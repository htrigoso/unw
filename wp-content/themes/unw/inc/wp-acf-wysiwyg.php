<?php

// Permitir iframe en el editor WYSIWYG de ACF y mantener orden del código.
add_filter('acf/load_field/type=wysiwyg', function($field) {
    $field['toolbar'] = 'full';
    return $field;
});

// Desactivar el filtro kses para contenido WYSIWYG de ACF cuando se carga el valor.
add_filter('acf/load_value/type=wysiwyg', function($value, $post_id, $field) {
    remove_filter('acf_the_content', 'wp_kses_post');
    return $value;
}, 10, 3);

// Agregar iframe a las etiquetas permitidas por WordPress en contenido de post.
add_filter('wp_kses_allowed_html', function($tags, $context) {
    if ($context === 'post') {
        $tags['iframe'] = [
            'src'             => true,
            'width'           => true,
            'height'          => true,
            'frameborder'     => true,
            'allowfullscreen' => true,
            'allow'           => true,
            'style'           => true,
            'class'           => true,
            'title'           => true,
        ];
    }
    return $tags;
}, 10, 2);
