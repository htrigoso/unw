<?php

function getNextAdmissionDate(
    string $admission_date,
    int $admission_increment_days,
    int $admission_update_lead_days,
    ?string $today = null
): array {
    // Fecha base
    $base = unw_parse_flexible_date($admission_date);
    if (!$base) {
        return [
            'next_date'  => '',
            'days_until' => 0,
            'cycle'      => 0,
        ];
    }
    $base->setTime(0, 0, 0);

    // Fecha actual
    $now = $today
        ? unw_parse_flexible_date($today)
        : new DateTime('today');
    if (!$now) {
        $now = new DateTime('today');
    }
    $now->setTime(0, 0, 0);

    // Si hoy es antes de la fecha base, la próxima ES la base
    if ($now < $base) {
        return [
            'next_date'  => $base->format('d/m/Y'),
            'days_until' => (int) $now->diff($base)->days,
            'cycle'      => 0,
        ];
    }

    // Días transcurridos desde la base
    $elapsed = (int) $base->diff($now)->days;

    // Ciclo actual y siguiente
    $currentCycle = (int) floor($elapsed / $admission_increment_days);
    $nextCycle    = $currentCycle + 1;

    // Calcular próxima fecha candidata
    $totalDays = $nextCycle * $admission_increment_days;
    $nextDate  = (clone $base)->modify("+{$totalDays} days");
    $daysUntil = (int) $now->diff($nextDate)->days;

    if ($daysUntil <= $admission_update_lead_days) {
        $nextCycle++;
        $totalDays = $nextCycle * $admission_increment_days;
        $nextDate  = (clone $base)->modify("+{$totalDays} days");
        $daysUntil = (int) $now->diff($nextDate)->days;
    }

    return [
        'next_date'  => $nextDate->format('d/m/Y'),
        'days_until' => $daysUntil,
        'cycle'      => $nextCycle,
    ];
}

function unw_parse_flexible_date(string $value): ?DateTime
{
    $value = trim($value);
    if ($value === '') {
        return null;
    }

    $dmy = DateTime::createFromFormat('d/m/Y', $value);
    if ($dmy instanceof DateTime) {
        return $dmy;
    }

    $ymd = DateTime::createFromFormat('Y-m-d', $value);
    if ($ymd instanceof DateTime) {
        return $ymd;
    }

    try {
        return new DateTime($value);
    } catch (Throwable $e) {
        return null;
    }
}





function unw_get_admission_shortcode_settings(): array
{
    return [
        'date_base' => (string) get_field('admission_date', 'option'),
        'increment_days' => (int) get_field('admission_increment_days', 'option'),
        'lead_days' => (int) get_field('admission_update_lead_days', 'option'),
    ];
}

function unw_is_valid_admission_shortcode_settings(array $settings): bool
{
    return
        $settings['date_base'] !== '' &&
        $settings['increment_days'] > 0 &&
        $settings['lead_days'] >= 0;
}

function unw_resolve_next_admission_date(array $settings): string
{
    $result = getNextAdmissionDate(
        $settings['date_base'],
        $settings['increment_days'],
        $settings['lead_days']
    );

    return (string) ($result['next_date'] ?? '');
}

function unw_get_spanish_month_name(int $month_number): string
{
    $months = [
        1 => 'ENERO', 2 => 'FEBRERO', 3 => 'MARZO', 4 => 'ABRIL',
        5 => 'MAYO', 6 => 'JUNIO', 7 => 'JULIO', 8 => 'AGOSTO',
        9 => 'SEPTIEMBRE', 10 => 'OCTUBRE', 11 => 'NOVIEMBRE', 12 => 'DICIEMBRE',
    ];

    return $months[$month_number] ?? '';
}

function unw_get_admission_date_parts(string $next_date): ?array
{
    $date_obj = DateTime::createFromFormat('d/m/Y', $next_date);
    if (!$date_obj instanceof DateTime) {
        return null;
    }

    $day = $date_obj->format('d');
    $month = unw_get_spanish_month_name((int) $date_obj->format('n'));
    if ($month === '') {
        return null;
    }

    return [
        'day' => $day,
        'month' => $month,
    ];
}

function unw_render_admission_date_card(string $day, string $month): string
{
    return sprintf(
        '<div class="admission__header-ad__date"><span class="admission__header-ad__date--day">%s</span><span class="admission__header-ad__date--month">%s</span></div>',
        esc_html($day),
        esc_html($month)
    );
}

function unw_fecha_admision_shortcode(): string {
    $settings = unw_get_admission_shortcode_settings();
    if (!unw_is_valid_admission_shortcode_settings($settings)) {
        return '';
    }

    $next_date = unw_resolve_next_admission_date($settings);
    if ($next_date === '') {
        return '';
    }

    $parts = unw_get_admission_date_parts($next_date);
    if (!$parts) {
        return '';
    }

    return unw_render_admission_date_card($parts['day'], $parts['month']);
}
add_shortcode('fecha_admision', 'unw_fecha_admision_shortcode');