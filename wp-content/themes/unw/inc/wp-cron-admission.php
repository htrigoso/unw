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

    // Lead: si faltan <= lead_days, saltar al siguiente ciclo
    // Ejemplo: próxima=28/03, lead=4 → los 4 días son: 24,25,26,27
    // Hoy 24/03: diff=4 → 4 <= 4 → activa → muestra el ciclo siguiente
    // Hoy 23/03: diff=5 → 5 <= 4 → false  → muestra 28/03
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





function unw_fecha_admision_shortcode(): string {

$date_base = get_field('admission_date', 'option');
$admission_increment_days = get_field('admission_increment_days', 'option');
$admission_update_lead_days = get_field('admission_update_lead_days', 'option');


 $date = getNextAdmissionDate($date_base, $admission_increment_days, $admission_update_lead_days);

    return '<div class="admission__header-ad__date">' .
        '<span class="admission__header-ad__date--day">' . esc_html($parts['day']) . '</span>' .
        '<span class="admission__header-ad__date--month">' . esc_html($parts['month']) . '</span>' .
        '</div>';
}
add_shortcode('fecha_admision', 'unw_fecha_admision_shortcode');
