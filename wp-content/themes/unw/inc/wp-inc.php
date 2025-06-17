<?php

// require head
require_once dirname(__FILE__) . '/functions/include-assets.php';

// require actions
// require_once dirname(__FILE__) . '/actions/wp-action-contact.php';

// require functions
require_once dirname(__FILE__) . '/functions/register-option-page.php';
require_once dirname(__FILE__) . '/functions/tpl-functions.php';

// require custom post types
require_once dirname(__FILE__) . '/post-types/cpt-project.php';

// require menu walkers
// require head
require_once dirname(__FILE__) . '/functions/include-menu.php';



add_action('wp_ajax_form_contact', 'form_contact');
add_action('wp_ajax_nopriv_form_contact', 'form_contact');
function form_contact()
{


  $name =  $_POST['name'];
  if (!filter_var($name, FILTER_SANITIZE_STRING)){
    wp_send_json_error(array('status' => FALSE, 'message' => __('Ingresar nombre', 'unw')), 400 );
  }



  $email =  $_POST['email'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    wp_send_json_error(array('status' => FALSE, 'message' => __('Ingresar correo electrónico', 'unw')), 400 );
  }

  $phone =  $_POST['phone'];
  if (!filter_var($phone, FILTER_SANITIZE_NUMBER_INT)){
    wp_send_json_error(array('status' => FALSE, 'message' => __('Ingresar teléfono válido', 'unw')), 400 );
  }

  $message =  $_POST['message'];
  if (!filter_var($message, FILTER_SANITIZE_STRING)){
    wp_send_json_error(array('status' => FALSE, 'message' => __('Ingresar mensaje', 'unw')), 400 );
  }


  add_filter( 'wp_mail_content_type', function ( $content_type ) {
    return 'text/html';
  });


  $html = "<html>
  <head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  </head>
  <body>
      <div style='background-color: #ccc;'>
          <table>

              <tr>
                  <td>Nombre:</td>
                  <td>$name<br></td>
              </tr>
              <tr>
                  <td>Correo eletrónico:</td>
                  <td>$email</td>
              </tr>
              <tr>
                  <td>Teléfono:</td>
                  <td>$phone</td>
              </tr>
              <tr>
                  <td>Mensaje:</td>
                  <td>$message</td>
              </tr>
          </table>
      </div>
  </body>
</html>";


  $subject = 'Nuevo contacto';
  $headers[] = 'From: unw <info@unw.pe>';
  // $headers[] = 'Cc: Tabu <play@tabu.pe>';
  wp_mail($email , $subject, $body, $headers);

}
