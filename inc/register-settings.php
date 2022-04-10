<?php

// Menu registration
 register_nav_menu("primary", "Navigation");
function dpc_calendar_customizer($wp_customize)
{
   //require 'section_vars.php'
  $wp_customize->add_section('project_section', array(
    'title' => 'Resources',
  ));

  $wp_customize->add_setting('project_title', array(
    'default' => '',

  ));

  $wp_customize->add_control('project_title', array(
    'label' => 'Date',
    //has to meet whatever string you made the section name as
    'section' => 'project_section',
  ));

  $wp_customize->add_setting('calendar_section', array(
    'default' => '',
  ));

  $wp_customize->add_control('calendar_section', array(
    'label' => 'Calendar Link',
    //has to meet whatever string you made the section name as
    'section' => 'project_section',
  ));
// project 1
  $wp_customize->add_setting('project_title1', array(
    'default' => '',
  ));

  $wp_customize->add_control('project_title1', array(
    'label' => 'Location',
    //has to meet whatever string you made the section name as
    'section' => 'project_section',
  ));
  $wp_customize->add_setting('project_title2', array(
    'default' => '',

  ));
  $wp_customize->add_control('project_title2', array(
    'label' => 'Payment',
    //has to meet whatever string you made the section name as
    'section' => 'project_section',
  ));

  $wp_customize->add_setting('project_description', array(
    'default' => 'Coming Soon',
  ));
  $wp_customize->add_control('project_description', array(
    'label' => 'Project Description',
    //has to meet whatever string you made the section name as
    'section' => 'project_section',
    'type' => 'textarea',
  ));

}
add_action('customize_register', 'dpc_calendar_customizer');


// function example_repeatable_customizer($wp_customize)
// {
//   require 'section_vars.php';
//   require_once 'controller.php';

//   $wp_customize->add_control('Repeater', array(
//     'label' => 'Date',
//     //has to meet whatever string you made the section name as
//     'section' => 'project_section',
//   ));


//   $wp_customize->add_setting(
//     $example_repeater,
//     array(
//       'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
//       'transport' => 'refresh',
//     )
//   );

//   $wp_customize->add_control(
//     new Onepress_Customize_Repeatable_Control(
//       $wp_customize,
//       $example_repeater,
//       array(
//         'label'     => esc_html__('Example Q & A Repeater'),
//         'description'   => '',
//         'section'       => $project_section,
//         'live_title_id' => 'some_quote',
//         'title_format'  => esc_html__('[live_title]'), // [live_title]
//         'max_item'      => 10, // Maximum item can add
//         'limited_msg'   => wp_kses_post(__('Max items added')),
//         'fields'    => array(
//           'some_quote'  => array(
//             'title' => esc_html__('Text'),
//             'type'  => 'text',
//           ),
//           'some_image' => array(
//             'title' => esc_html__('Image'),
//             'type'  => 'media',
//           ),
//         ),
//       )
//     )
//   );
// }
// add_action('customize_register', 'example_repeatable_customizer');


function contact_customizer($wp_customize)
{
  //require 'section_vars.php';
  // require_once 'controller.php';
  $wp_customize->add_section('footer_section', array(
    'title' => 'Contact',
  ));

  // Headline text
  $wp_customize->add_setting('contact_headline', array(
    'default' => "Contact us!"
  ));
  $wp_customize->add_control('contact_headline', array(
    'label' => 'Contact headline',
    'section' => 'footer_section',
    'type' => 'textarea'
  ));
  // Description text
  $wp_customize->add_setting('contact_desc', array(
    'default' => "Call and leave a message or send an email to get more information."
  ));
  $wp_customize->add_control('contact_desc', array(
    'label' => 'Contact description',
    'section' => 'footer_section',
    'type' => 'textarea'
  ));
  //Shortcode for form
  $wp_customize->add_setting('contact_form_shortcode', array(
    'default' => "[shortcode goes here]"
  ));
  $wp_customize->add_control('contact_form_shortcode', array(
    'label' => 'Contact form shortcode',
    'section' => 'footer_section',
    'type' => 'textarea'
  ));
}
add_action('customize_register', 'contact_customizer');

// [forminator_form id="129"]