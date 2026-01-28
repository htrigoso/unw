<?php
/**
 * Admission date helpers (ACF Options).
 *
 * Fields (options page):
 * - fecha_base_admision (Y-m-d)
 * - incremento_dias (number)
 * - actualizar_dias_antes (number)
 * - auto_actualizar_fecha (true/false)
 * - fecha_manual_admision (Y-m-d, optional)
 * - fecha_hoy_admision (Y-m-d, optional)
 */

/**
 * Parse an ACF date string (Y-m-d) into a DateTimeImmutable.
 *
 * @param mixed $date_str
 * @param DateTimeZone $timezone
 * @return DateTimeImmutable|null
 */
function unw_parse_admission_date_from_acf($date_str, DateTimeZone $timezone): ?DateTimeImmutable {
    if (!is_string($date_str) || $date_str === '') {
        return null;
    }

    $date = DateTimeImmutable::createFromFormat('!Y-m-d', $date_str, $timezone);
    if (!$date) {
        return null;
    }

    return $date;
}

/**
 * Get an option value from ACF with optional legacy fallback.
 *
 * @param string $primary
 * @param string $fallback
 * @return mixed
 */
function unw_get_admission_option_value(string $primary, string $fallback = '') {
    if (!function_exists('get_field')) {
        return null;
    }

    if (function_exists('get_field_object')) {
        $field = get_field_object($primary, 'option', false, false);
        if ($field) {
            return get_field($primary, 'option');
        }
    }

    if ($fallback !== '') {
        return get_field($fallback, 'option');
    }

    return get_field($primary, 'option');
}

/**
 * Parse days input with bounds.
 *
 * @param int|string $valor
 * @param string $nombre
 * @param int $min
 * @param int $max
 * @return int
 */
function unw_parse_dias($valor, string $nombre, int $min, int $max): int {
    if (is_int($valor)) {
        $dias = $valor;
    } elseif (is_string($valor)) {
        if (!preg_match('/\d+/', $valor, $match)) {
            throw new InvalidArgumentException("$nombre debe contener un numero de dias");
        }
        $dias = (int) $match[0];
    } else {
        throw new InvalidArgumentException("$nombre debe ser int o string");
    }

    if ($dias < $min || $dias > $max) {
        throw new InvalidArgumentException("$nombre debe estar entre $min y $max");
    }

    return $dias;
}

/**
 * Normalize a DateTimeInterface to a date-only DateTimeImmutable.
 *
 * @param DateTimeInterface $dt
 * @return DateTimeImmutable
 */
function unw_to_date_immutable(DateTimeInterface $dt): DateTimeImmutable {
    $timezone = $dt->getTimezone() ?: wp_timezone();
    $normalized = DateTimeImmutable::createFromFormat('!Y-m-d', $dt->format('Y-m-d'), $timezone);
    if (!$normalized) {
        return new DateTimeImmutable($dt->format('Y-m-d'), $timezone);
    }

    return $normalized;
}

/**
 * Calculate the next visible admission date.
 *
 * @param string|DateTimeInterface $fecha_base
 * @param int|string $dias_incremento
 * @param int|string $actualizar_dias_antes
 * @param bool $auto_actualizar
 * @param DateTimeInterface|null $hoy
 * @return DateTimeImmutable
 */
function unw_proxima_fecha_admision(
    $fecha_base,
    $dias_incremento,
    $actualizar_dias_antes,
    bool $auto_actualizar = true,
    ?DateTimeInterface $hoy = null
): DateTimeImmutable {
    $timezone = wp_timezone();

    if (is_string($fecha_base)) {
        $base = DateTimeImmutable::createFromFormat('!d/m/Y', $fecha_base, $timezone);
        if (!$base) {
            $base = DateTimeImmutable::createFromFormat('!Y-m-d', $fecha_base, $timezone);
        }
        if (!$base) {
            throw new InvalidArgumentException("fecha_base debe tener formato dd/mm/yyyy");
        }
    } elseif ($fecha_base instanceof DateTimeInterface) {
        $timezone = $fecha_base->getTimezone() ?: $timezone;
        $base = unw_to_date_immutable($fecha_base);
    } else {
        throw new InvalidArgumentException("fecha_base debe ser string o DateTime");
    }

    if (!$auto_actualizar) {
        return $base;
    }

    $dias_incremento = unw_parse_dias($dias_incremento, "dias_incremento", 1, 30);
    $actualizar_dias_antes = unw_parse_dias($actualizar_dias_antes, "actualizar_dias_antes", 1, 7);

    $hoy_dt = $hoy ? unw_to_date_immutable($hoy) : new DateTimeImmutable('today', $timezone);

    if ($hoy_dt <= $base) {
        $candidata = $base;
    } else {
        $dias_desde_base = $base->diff($hoy_dt)->days;
        $n = intdiv($dias_desde_base, $dias_incremento);
        $offset = $n * $dias_incremento;
        $candidata = $base->modify('+' . $offset . ' days');
        if ($candidata < $hoy_dt) {
            $candidata = $candidata->modify('+' . $dias_incremento . ' days');
        }
    }

    $limite_actualizacion = $candidata->modify('-' . $actualizar_dias_antes . ' days');
    if ($hoy_dt >= $limite_actualizacion) {
        $candidata = $candidata->modify('+' . $dias_incremento . ' days');
    }

    return $candidata;
}

/**
 * Calculate visible and next admission dates based on ACF options.
 *
 * @return array{current:?DateTimeImmutable,next:?DateTimeImmutable,auto_enabled:bool}
 */
function unw_get_admission_schedule_dates(): array {
    $result = [
        'current' => null,
        'next' => null,
        'auto_enabled' => false,
    ];

    if (!function_exists('get_field')) {
        return $result;
    }

    $timezone = wp_timezone();
    $auto_enabled = (bool) unw_get_admission_option_value(
        'auto_actualizar_fecha',
        'admission_auto_update_enabled'
    );
    $result['auto_enabled'] = $auto_enabled;

    $base_date = unw_parse_admission_date_from_acf(
        unw_get_admission_option_value('fecha_base_admision', 'admission_date'),
        $timezone
    );
    $manual_date = unw_parse_admission_date_from_acf(
        unw_get_admission_option_value('fecha_manual_admision'),
        $timezone
    );
    $today_override = unw_parse_admission_date_from_acf(
        unw_get_admission_option_value('fecha_hoy_admision', 'admission_today_override'),
        $timezone
    );

    try {
        $increment_days = unw_parse_dias(
            unw_get_admission_option_value('incremento_dias', 'admission_increment_days'),
            'incremento_dias',
            1,
            30
        );
    } catch (InvalidArgumentException $e) {
        return $result;
    }

    if (!$auto_enabled) {
        $current = $manual_date ?: $base_date;
        if (!$current) {
            return $result;
        }

        $result['current'] = $current;
        $result['next'] = $current->modify('+' . $increment_days . ' days');
        return $result;
    }

    if (!$base_date) {
        return $result;
    }

    try {
        $lead_days = unw_parse_dias(
            unw_get_admission_option_value('actualizar_dias_antes', 'admission_update_lead_days'),
            'actualizar_dias_antes',
            1,
            7
        );
    } catch (InvalidArgumentException $e) {
        return $result;
    }

    $today = $today_override ?: new DateTimeImmutable('today', $timezone);

    try {
        $visible_date = unw_proxima_fecha_admision(
            $base_date,
            $increment_days,
            $lead_days,
            true,
            $today
        );
    } catch (InvalidArgumentException $e) {
        return $result;
    }

    $result['current'] = $visible_date;
    $result['next'] = $visible_date->modify('+' . $increment_days . ' days');

    return $result;
}

/**
 * Get the visible admission date based on ACF options.
 *
 * @return DateTimeImmutable|null
 */
function unw_get_visible_admission_date(): ?DateTimeImmutable {
    $schedule = unw_get_admission_schedule_dates();
    return $schedule['current'];
}

/**
 * Get the next admission date based on ACF options.
 *
 * @return DateTimeImmutable|null
 */
function unw_get_next_admission_date(): ?DateTimeImmutable {
    $schedule = unw_get_admission_schedule_dates();
    return $schedule['next'];
}

/**
 * Legacy wrapper for backward compatibility.
 *
 * @return DateTimeImmutable|null
 */
function admission_update_date(): ?DateTimeImmutable {
    return unw_get_visible_admission_date();
}

/**
 * Format a date as d/m/Y.
 *
 * @param DateTimeInterface $d
 * @return string
 */
function unw_format_date_es(DateTimeInterface $d): string {
    return $d->format('d/m/Y');
}

/**
 * Format a date as "LUNES 16/01/2026".
 *
 * @param DateTimeInterface $d
 * @return string
 */
function unw_format_date_es_with_weekday(DateTimeInterface $d): string {
    $days = [
        'LUNES', 'MARTES', 'MIERCOLES', 'JUEVES', 'VIERNES', 'SABADO', 'DOMINGO',
    ];
    $day_index = (int) $d->format('N') - 1;
    $day_name = $days[$day_index] ?? '';

    return trim($day_name . ' ' . $d->format('d/m/Y'));
}

/**
 * Get the formatted visible admission date for templates.
 *
 * @return string
 */
function unw_get_visible_admission_date_formatted(): string {
    $date = unw_get_visible_admission_date();
    if (!$date) {
        return '';
    }

    return esc_html(unw_format_date_es($date));
}

/**
 * Build a plain-text message for admin display.
 *
 * @param DateTimeImmutable|null $date
 * @param bool $auto_enabled
 * @return string
 */
function unw_get_admission_admin_message(?DateTimeImmutable $date, bool $auto_enabled): string {
    if (!$date) {
        return 'No disponible';
    }

    $message = unw_format_date_es_with_weekday($date);
    if (!$auto_enabled) {
        $message .= ' (auto desactivado)';
    }

    return $message;
}

/**
 * Populate ACF message field for current admission date.
 *
 * @param array $field
 * @return array
 */
/**
 * Populate ACF message field for next admission date.
 *
 * @param array $field
 * @return array
 */
function unw_acf_admission_next_date_message(array $field): array {
    $schedule = unw_get_admission_schedule_dates();

    $field['message'] = unw_get_admission_admin_message(
        $schedule['current'],
        $schedule['auto_enabled']
    );

    return $field;
}
add_filter(
    'acf/load_field/key=field_unw_admission_next_date_display',
    'unw_acf_admission_next_date_message'
);

/**
 * Get visible admission date parts (day + month in Spanish, uppercase).
 *
 * @return array{day:string,month:string}
 */
function unw_get_visible_admission_date_parts(): array {
    $date = unw_get_visible_admission_date();
    if (!$date) {
        return ['day' => '', 'month' => ''];
    }

    $months = [
        'ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO',
        'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE',
    ];
    $month_index = (int) $date->format('n') - 1;
    $month = $months[$month_index] ?? '';

    return [
        'day' => $date->format('d'),
        'month' => $month,
    ];
}

/**
 * Shortcode: [fecha_admision]
 *
 * @return string
 */
function unw_fecha_admision_shortcode(): string {
    $parts = unw_get_visible_admission_date_parts();

    if ($parts['day'] === '' || $parts['month'] === '') {
        return '';
    }

    return '<div class="admission__header-ad__date">' .
        '<span class="admission__header-ad__date--day">' . esc_html($parts['day']) . '</span>' .
        '<span class="admission__header-ad__date--month">' . esc_html($parts['month']) . '</span>' .
        '</div>';
}
add_shortcode('fecha_admision', 'unw_fecha_admision_shortcode');

/**
 * Prime admission schedule on every request (admin + frontend).
 */
function unw_prime_admission_schedule() {
  $today = new DateTimeImmutable('today', wp_timezone());
    unw_get_admission_schedule_dates();
}
add_action('init', 'unw_prime_admission_schedule');
