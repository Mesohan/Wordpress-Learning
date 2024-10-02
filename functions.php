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

// Theme function

function sohan_customizar_register($wp_customize){
    $wp_customize-> add_section('sohan_header_area', array(
        'title'=> __('header Area','sohan'),
        'description'=> ' If you want to update your header area, you can do it.  '

    ));
    $wp_customize->ann_setting('sohan_logo', array( 
        'default' => get_bloginfo('template_directory').'/img/logo/jpg' ,
    ) );

    $wp_customize-> add_control( new WP_Customize_Image_Control($wp_customize,'sohan_logo', array(
        'label'=> 'logo upload',
'description' => 'If you interester to change or update your logo you can do it.',
        'setting'=> 'sohan_logo',
        'section'=> 'sohan_header_area',
    )));
}



add_action( 'customizar_register','sohan_customizar_register');


