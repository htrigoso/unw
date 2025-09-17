<?php
$tabs = [
  ['label' => 'Presentación',         'target' => 'presentacion'],
  ['label' => 'Beneficios',           'target' => 'beneficios'],
  ['label' => 'Malla Curricular',     'target' => 'malla'],
  ['label' => 'Campo Laboral',        'target' => 'campo-laboral'],
  ['label' => 'Plana Docente',        'target' => 'teaching-staff'],
  ['label' => 'Infraestructura',      'target' => 'infraestructura'],
  ['label' => 'Admisión',             'target' => 'admision'],
  ['label' => 'Internacionalización', 'target' => 'internacionalizacion'],
];
  $terms = get_the_terms(get_the_ID(), 'modalidad');
?>

<div class="career-tabs">
  <div class="x-container career-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs' => $tabs
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="career-tabs__content">
      <?php foreach ($tabs as $i => $tab): ?>
      <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content<?php echo $i === 0 ? ' is-active' : ''; ?>"
        role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($tab['target']); ?>">
        <?php
          switch ($tab['target']) {
            case 'presentacion':

              $presentation = get_field('presentation', get_the_ID());

              $testimonials_info = $presentation['testimonials_info'] ?? null;

              $testimonials = [];
              if (
                is_array($testimonials_info) &&
                !empty($testimonials_info['testimonials']) &&
                is_array($testimonials_info['testimonials'])
              ) {

                foreach ($testimonials_info['testimonials'] as $testimonial_post) {
                  $info = get_field('info-testimonio', $testimonial_post->ID);
                  $testimonials[] = [
                    'name'        => get_the_title($testimonial_post),
                    'title'       => $info['program_name'] ?? '',
                    'description' => $info['testimonial_text'] ?? '',
                    'footer'      => $info['institution_name'] ?? '',
                    'image'       => get_the_post_thumbnail_url($testimonial_post->ID, 'full') ?: '',
                  ];
                }
              } ?>
        <?php
              get_template_part(CAREERS_CONTENT_TAB_PATH . '1-presentation/content-career-intro', null, [
                'presentation' => $presentation
              ]);
              ?>
        <?php
              get_template_part(COMMON_CONTENT_PATH, 'testimonials', [
                'title' => $testimonials_info['title'] ?? '',
                'testimonials' => $testimonials
              ]);
              ?>
        <section class="contact-form-careers">
          <div class="x-container x-container--pad-213 contact-form-careers__wrapper">
            <?php
                  if ($terms && !is_wp_error($terms)) {
                    $slugs = wp_list_pluck($terms, 'slug');
                    if (in_array('presencial', $slugs)) {
                      get_template_part(CAREERS_CONTENT_PATH, 'contact-form-presencial',[
                         'data_form_type' =>$args['data-form']['mobile']
                      ]);
                    } else {
                      get_template_part(CAREERS_CONTENT_PATH, 'contact-form-virtual',[
                         'data_form_type' =>$args['data-form']['mobile']
                      ]);
                    }
                  }
                  ?>
          </div>
        </section>
        <section class="career-tabs__faq">
          <?php
              $faqs = $presentation['faqs'];
                get_template_part(COMMON_CONTENT_PATH, 'faq-section', [
                  'title' => $faqs['title'],
                  'faq' => $faqs['faq']
                ]);
                ?>
        </section>
        <?php
              break;

            case 'beneficios':
              $benefits = get_field('benefits', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '2-benefits/content-benefits', null, [
                'benefits' => $benefits
              ]);
              break;

            case 'malla':
              $malla_curricular = get_field('malla_curricular', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '3-curriculum-map/content-program-curriculum', null, [
                'malla_curricular' => $malla_curricular
              ]);
              $curriculum_legend = get_field('curriculum_legend', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '3-curriculum-map/content-curriculum-legend', null, [
                'curriculum_legend' => $curriculum_legend
              ]);
              break;

            case 'campo-laboral':
              $career_field = get_field('career_field', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '4-career-field/content-career-field', null, [
                'career_field' => $career_field
              ]);
              break;

            case 'teaching-staff':
              $teaching_staff = get_field('teaching_staff', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '5-teaching-staff/content-teaching-staff', null, [
                'teaching_staff' => $teaching_staff
              ]);
              break;

            case 'infraestructura':
              $infrastructure = get_field('infrastructure', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '6-infrastructure/content-infrastructure', null, [
                'infrastructure' => $infrastructure
              ]);
              break;

            case 'admision':
              $admission_info = get_field('admission_info', get_the_ID());

              get_template_part(CAREERS_CONTENT_TAB_PATH . '7-admission/content-admission', null, [
                'admission_info' => $admission_info
              ]);
              break;

            case 'internacionalizacion':
            ?>
        <div class="career-tabs__internationalization">
          <?php
                get_template_part(COMMON_CONTENT_PATH, 'internationalization', null, [
                  'id' => 0
                ]);
                ?>
        </div>
        <?php
              break;
          }
          ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>