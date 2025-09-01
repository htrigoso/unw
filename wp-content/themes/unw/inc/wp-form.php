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
                $merged[sanitize_key($item['name'])] = sanitize_text_field($item['value'] ?? '');
            }
        }
    }

    // 2. Carriers
    if (!empty($utm_carriers) && is_array($utm_carriers)) {
        foreach ($utm_carriers as $item) {
            if (!empty($item['name'])) {
                $merged[sanitize_key($item['name'])] = sanitize_text_field($item['value'] ?? '');
            }
        }
    }

    // 3. URL (sobrescribe todo)
    if (!empty($_GET)) {
        foreach ($_GET as $key => $value) {
            $key = sanitize_key($key);

            // solo aceptar claves que empiecen con "utm_"
            if (strpos($key, 'utm_') === 0) {
                $merged[$key] = sanitize_text_field(wp_unslash($value));
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
