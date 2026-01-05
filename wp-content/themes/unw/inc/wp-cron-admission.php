<?php
/**
 * Admission automatic date update (ACF Options)
 */


// 1️⃣ Programar el cron diario
function admission_schedule_cron() {
    if ( ! wp_next_scheduled( 'admission_update_event' ) ) {
        wp_schedule_event( time(), 'daily', 'admission_update_event' );
    }
}
add_action( 'wp', 'admission_schedule_cron' );


// 2️⃣ Ejecutar actualización automática
add_action( 'admission_update_event', 'admission_update_date' );

function admission_update_date() {

    // Obtener el group "admission" desde Options
    $admission = get_field( 'admission', 'option' );

    if ( ! is_array( $admission ) ) {
        return;
    }

    // Día configurado (dentro del group)
    $update_day = $admission['admission_update_day'] ?? 'saturday';

    // Día actual (monday, tuesday...)
    $today = strtolower( date( 'l' ) );

    // Si hoy no es el día configurado → salir
    if ( $today !== $update_day ) {
        return;
    }

    // Evitar ejecutar más de una vez el mismo día
    $last_run   = get_option( 'admission_last_update' );
    $today_date = date( 'Y-m-d' );

    if ( $last_run === $today_date ) {
        return;
    }

    // Actualizar SOLO el campo date (ACF Date Picker → Ymd)
    $admission['date'] = date( 'Ymd' );

    update_field( 'admission', $admission, 'option' );

    // Guardar última ejecución
    update_option( 'admission_last_update', $today_date );
}