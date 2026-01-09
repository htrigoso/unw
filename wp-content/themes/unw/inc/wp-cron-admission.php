<?php
/**
 * Admission automatic date update (ACF Options)
 */

// 1️⃣ Ejecutar actualización automática solo en detalle de carreras
add_action( 'wp', function() {
    if ( is_admin() ) {
        return;
    }

    // Solo ejecutar en single de carreras o carreras a distancia
    if ( ! is_singular( [ 'carreras', 'carreras-a-distancia' ] ) ) {
        return;
    }

    admission_update_date();
} );

function admission_update_date() {
    $auto_enabled = get_field( 'admission_auto_update_enabled', 'option' );

    if ( ! $auto_enabled ) {
        return;
    }

    $admission_date = get_field( 'admission_date', 'option' );
    $increment_days = get_field( 'admission_increment_days', 'option' );
    $lead_days = get_field( 'admission_update_lead_days', 'option' );

    if ( empty( $admission_date ) || empty( $increment_days ) || empty( $lead_days ) ) {
        return;
    }

    $increment_days = (int) $increment_days;
    $lead_days = (int) $lead_days;

    if ( $increment_days < 1 ) {
        $increment_days = 1;
    } elseif ( $increment_days > 30 ) {
        $increment_days = 30;
    }

    if ( $lead_days < 1 ) {
        $lead_days = 1;
    } elseif ( $lead_days > 7 ) {
        $lead_days = 7;
    }

    $timezone = wp_timezone();
    $base_date = DateTimeImmutable::createFromFormat( 'Y-m-d', $admission_date, $timezone );

    if ( ! $base_date && preg_match( '/^\d{8}$/', $admission_date ) ) {
        $base_date = DateTimeImmutable::createFromFormat( 'Ymd', $admission_date, $timezone );
    }

    if ( ! $base_date ) {
        $base_date = DateTimeImmutable::createFromFormat( 'd/m/Y', $admission_date, $timezone );
    }

    if ( ! $base_date ) {
        return;
    }

    $next_date = $base_date->add( new DateInterval( 'P' . $increment_days . 'D' ) );
    $trigger_date = $next_date->sub( new DateInterval( 'P' . $lead_days . 'D' ) );
    $today_date = ( new DateTimeImmutable( 'now', $timezone ) )->format( 'Y-m-d' );

    if ( $today_date !== $trigger_date->format( 'Y-m-d' ) ) {
        return;
    }

    $last_run = get_option( 'admission_last_update' );
    $last_updated_date = get_option( 'admission_last_updated_date' );
    $base_date_str = $base_date->format( 'Y-m-d' );
    if ( $last_run === $today_date && $last_updated_date === $base_date_str ) {
        return;
    }

    update_field( 'admission_date', $next_date->format( 'Y-m-d' ), 'option' );

    update_option( 'admission_last_update', $today_date );
    update_option( 'admission_last_updated_date', $next_date->format( 'Y-m-d' ) );
}