<?php
$benefits = [
  [
    'title' => 'Potenciada por ASU',
    'description' => 'Somos la 1era y única universidad peruana que sella una alianza con Arizona State University.',
    'icon' => get_template_directory_uri() . '/upload/careers/benefits/benefit-1.svg',
  ],
  [
    'title' => 'Calidad educativa',
    'description' => '1er universidad en Latinoamérica con ISO 9001.',
    'icon' => get_template_directory_uri() . '/upload/careers/benefits/benefit-2.svg',
  ],
  [
    'title' => 'ASU English Program',
    'description' => 'Inicia tu formación bilingüe con el programa de inglés de Arizona State University, incluido en la malla curricular.',
    'icon' => get_template_directory_uri() . '/upload/careers/benefits/benefit-3.svg',
  ],
  [
    'title' => 'Malla curricular innovadora',
    'description' => 'Nueva e innovadora malla curricular diseñada de acuerdo al plan de estudios de Arizona State University (ASU), la #1 en innovación.',
    'icon' => get_template_directory_uri() . '/upload/careers/benefits/benefit-4.svg',
  ],
  [
    'title' => 'Metodología innovadora de aprendizaje',
    'description' => 'Explorarás los fundamentos de biología con experimentos y la creación de modelos moleculares utilizando softwares digitales.',
    'icon' => get_template_directory_uri() . '/upload/careers/benefits/benefit-5.svg',
  ],
  [
    'title' => 'Acreditación Internacional',
    'description' => 'Primero y única carrera en el Perú acreditada por la Asociación Canadiense de escuelas de Farmacia - CASN.',
    'icon' => get_template_directory_uri() . '/upload/careers/benefits/benefit-6.svg',
  ],
  [
    'title' => 'Infraestructura renovada',
    'description' => 'Laboratorios completamente equipados para tu formación y logro de tus competencias.',
    'icon' => get_template_directory_uri() . '/upload/careers/benefits/benefit-7.svg',
  ],
];
?>

<section class="benefits">
  <h2 class="benefits__title">¿Por qué estudiar Farmacia y Bioquímica en U. Wiener?</h2>
  <ul class="benefits__list">
    <?php foreach ($benefits as $benefit): ?>
      <li class="benefits__item">
        <img src="<?php echo esc_url($benefit['icon']); ?>" alt="<?php echo esc_attr($benefit['title']); ?>" class="benefits__item-icon">
        <p class="benefits__item-title"><?php echo esc_html($benefit['title']); ?></p>
        <p class="benefits__item-description"><?php echo esc_html($benefit['description']); ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</section>
