<?php
/**
 * Fusiona UTMs desde defaults, carriers y URL (prioridad: URL > carriers > defaults)
 *
 * @param array $utms_default
 * @param array $utm_carriers
 * @return array
 */
function merge_utms($utms_default, $utm_carriers) {
    $merged = [];

    // 1. Defaults
    if (!empty($utms_default) && is_array($utms_default)) {
        foreach ($utms_default as $item) {
            if (!empty($item['name'])) {
                $name  = sanitize_key($item['name']);
                $value = sanitize_text_field($item['value'] ?? '');
                $merged[$name] = $value;
            }
        }
    }

    // 2. Carriers (sobrescriben defaults)
    if (!empty($utm_carriers) && is_array($utm_carriers)) {
        foreach ($utm_carriers as $item) {
            if (!empty($item['name'])) {
                $name  = sanitize_key($item['name']);
                $value = sanitize_text_field($item['value'] ?? '');
                $merged[$name] = $value;
            }
        }
    }

    // 3. URL (sobrescribe todo si coincide, o añade si es nuevo)
    if (!empty($_GET)) {

        foreach ($_GET as $key => $value) {
            $name = sanitize_key($key);

            // Solo aceptar claves que empiecen con "utm_"
            if (strpos($name, 'utm_') === 0) {
                $merged[$name] = sanitize_text_field(wp_unslash($value));
            }
        }
    }

    // Convertimos al formato esperado
    $result = [];
    foreach ($merged as $name => $value) {
        $result[] = [
            'name'  => $name,
            'value' => $value
        ];
    }

    return $result;
}
