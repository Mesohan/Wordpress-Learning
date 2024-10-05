<?php
/* 
* My theme function
*/


// Theme Title
add_theme_support('title tag');


// Theme CSS and Jquery file calling
function sohan_css_and_js_file_calling (){

wp_enqueue_style('saif-style',get_stylesheet_uri());
wp_register_style('bootstarp', get_template_directory_uri().'/css/bootstrap.css', array(),'4.0.0','all');
wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(),'4.0.0','all');

wp_enqueue_style('bootstarp');
wp_enqueue_style('custom');

// jquery
 wp_enqueue_script('jquery');
 wp_enqueue_script('bootstrap', get_template_directory_uri( ).'/js.bootstrap.js',array(), '4.0.0','true');
 wp_enqueue_script('main', get_template_directory_uri( ).'/js.main.js',array(), '1.0.69','true');

}

add_action('wp_enqueue_scripts','sohan_css_and_js_file_calling');


 //google fonts enqueue

 function sohan_add_google_fonts(){
  wp_enqueue_style( 'sohan_google_fonts','https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap',false );

 }

 add_action('wp_enqueue_scripts','sohan_add_google_fonts');


// Theme function

function sohan_customizar_register($wp_customize){
  //Header Area Function

    $wp_customize->add_section('sohan_header_area', array(
      'title' =>__('Header Area', 'sohan'),
      'description' => 'If you interested to update your header area, you can do it here.'
    ));
  
    $wp_customize->add_setting('sohan_logo', array(
      'default' => get_bloginfo('template_directory') . '/img/logo.jpg',
    ));
  
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'sohan_logo', array(
      'label' => 'Logo Upload',
      'description' => 'If you interested to change or update your logo you can do it.',
      'setting' => 'sohan_logo',
      'section' => 'sohan_header_area',
    ) ));

    //Menu Position Option
    $wp_customize ->add_section( 'sohan_menu_option',array(
      'title'=>__('menu position option','sohan'),
      'description' => 'If you interested to change your menu position , you can do it here.'

    ));


    $wp_customize->add_setting('sohan_menu_position',array(
      'default' => 'right_menu',

    ));
    $wp_customize-> add_control('sohan_menu_position',array(
      'label' => 'menu position',
      'description'=> 'select your menu position',
      'setting' => 'sohan_menu_position',
      'section' => 'sohan_menu_option',
      'type'=> 'radio',
      'choices'=>array(
        'left_menu'=>'Left menu',
        'right_menu'=>'Right menu',
        'center_menu'=>'Center menu',
      ) ));



      
    //footer Option
    $wp_customize ->add_section( 'sohan_footer_option',array(
      'title'=>__('footer option','sohan'),
      'description' => 'If you interested to change your footer settings , you can do it here.'

    ));


    $wp_customize->add_setting('sohan_copyright_section',array(
      'default' => '&copy; copyright 2021 | sohan',

    ));
    $wp_customize-> add_control('sohan_copyright_section',array(
      'label' => 'copyright text',
      'description'=> 'Ifyou need you can update your copyright text from here ',
      'setting' => 'sohan_copyright_section',
      'section' => 'sohan_footer_option',
  
       ));
  
  }
  
  add_action('customize_register', 'sohan_customizar_register');


// Menu Register
register_nav_menu( 'main_menu', __('main Menu', 'sohan') );




// walker Menu properties

function sohan_nav_description($item_output, $item, $args) {
  if(!empty($item-description)){
    $item_output = str_replace($args->link_after . '</a>', '<span class=""wakler_nav>' .
    $item->description . '</span>' . $args->link_after .'</a>', $item_output);
}
return $item_output;


}

// add_filter( $hook_name:string, $callback:callable, $priority:integer, $accepted_args:integer );
add_filter( 'walker_nav_menu_start_el','sohan_nav_description', 10, 3  );
