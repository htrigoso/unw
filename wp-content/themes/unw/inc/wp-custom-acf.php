<?php
add_action('acf/init', function() {
  if( function_exists('acf_register_block_type') ) {

    acf_register_block_type([
      'name'            => 'accordion',
      'title'           => __('Accordion'),
      'description'     => __('Bloque de Accordion reutilizable con ACF'),
      'render_template' => 'template-parts/components/accordion.php',
      'category'        => 'layout',
      'icon'            => 'menu-alt',
      'keywords'        => ['accordion', 'tabs', 'toggle'],
      'supports'        => [
        'align' => false,
        'mode'  => false,
      ]
    ]);

    acf_register_block_type([
      'name'            => 'cards',
      'title'           => __('Cards'),
      'description'     => __('Bloque de Cards reutilizable con ACF'),
      'render_template' => 'template-parts/components/cards.php',
      'category'        => 'layout',
      'icon'            => 'menu-alt',
      'keywords'        => ['cards', 'tabs', 'toggle'],
      'supports'        => [
        'align' => false,
        'mode'  => false,
      ]
    ]);
     // Bloque Sidebar
    acf_register_block_type([
      'name'            => 'sidebar',
      'title'           => __('Sidebar'),
      'description'     => __('Bloque de Sidebar personalizado con ACF'),
      'render_template' => 'template-parts/components/sidebar.php',
      'category'        => 'layout',
      'icon'            => 'columns',
      'keywords'        => ['sidebar', 'aside', 'column'],
      'supports'        => [
        'align' => false,
        'mode'  => false,
      ]
    ]);

    // Bloque Sidebar
    acf_register_block_type([
      'name'            => 'contact',
      'title'           => __('Contacto'),
      'description'     => __('Bloque de Contacto personalizado con ACF'),
      'render_template' => 'template-parts/components/contact.php',
      'category'        => 'layout',
      'icon'            => 'columns',
      'keywords'        => ['contact', 'form', 'information'],
      'supports'        => [
        'align' => false,
        'mode'  => false,
      ]
    ]);
  }
});



function updateCustomAcf($page_id)
{

$acf_services = get_field('services',$page_id );

$acf_services['cards'] = [
    [
        'cards_title' => 'Constancia de promedio ponderado',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/constancia-de-promedio-ponderado/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Duplicado de record de notas histórico',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/duplicado-de-record-de-notas-historico/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Constancia de estudios',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/constancia-de-estudios/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Constancia de horas por curso',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/constancia-de-horas-por-curso/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Historial académico',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/historial-academico/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Certificado de estudios por ciclo',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/certificado-de-estudios-por-ciclo/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Modificación de sus datos en el sistema y/o foto',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/modificacion-de-sus-datos-en-el-sistema-y-o-foto/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Traslado interno',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/traslado-interno/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Usuario clave',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/usuario-clave/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Reserva de matrícula (opción 2)',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/reserva-de-matricula-2/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Reserva de matrícula',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/reserva-de-matricula/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Anulación de matrícula',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/anulacion-de-matricula/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Retiro de cursos',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/retiro-de-cursos/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Certificación de aprendizaje, habilidades y conocimiento – Inglés/Informática',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/certificacion-de-aprendizaje-habilidades-y-conocimiento-ingles-informatica/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Constancia de ingreso',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/constancia-de-ingreso/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Record de notas',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/record-de-notas/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Plan de estudios',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/plan-de-estudios/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Constancia de quinto superior',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/constancia-de-quinto-superior/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Constancia de tercio superior',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/constancia-de-tercio-superior/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Constancia para estudiante del exterior',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/constancia-para-estudiante-del-exterior/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Constancia de matrícula',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/constancia-de-matricula/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Trámite para realizar el proceso de sustentación – Parte II',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/tramite-para-realizar-el-proceso-de-sustentacion-parte-ii/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Duplicado carné universitario',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/duplicado-carne-universitario/',
            'target' => ''
        ]
    ],
    [
        'cards_title' => 'Carné de medio pasaje',
        'cards_link'  => [
            'title'  => 'Ver más',
            'url'    => 'https://www.uwiener.edu.pe/registros-academicos/carne-de-medio-pasaje/',
            'target' => ''
        ]
    ],
];

    // Agregar nuevos items al final de los existentes
    $acf_services['cards'] = array_merge($acf_services['cards'], $new_cards);

    // Guardar en ACF
    update_field('services', $acf_services, $page_id);
}