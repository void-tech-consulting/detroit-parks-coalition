<?php

// Menu registration
register_nav_menu("primary", "Navigation");

function parks_tiles_repeater($wp_customize) {
    require 'section_vars.php';
    require_once 'controller.php';
    $wp_customize->add_section($parks_tiles_section, array(
        'title' => 'Parks Tiles Repeater',
    ));
    $wp_customize->add_setting($parks_tiles_setting, array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new Onepress_Customize_Repeatable_Control(
            $wp_customize,
            $parks_tiles_setting,
            array(
                'label' => esc_html__('Parks Tiles Repeater'),
                'description' => 'add or remove parks tile from homepage',
                'section' => $parks_tiles_section,
                'live_title_id' => 'park_name',
                'title_format' => esc_html__('[live_title]'),
                'max_item' => 20,
                'limited_msg' => wp_kses_post('Max of 20 parks met'),
                'fields' => array(
                    'park_name' => array(
                      'title' => esc_html__('Park Name'),
                      'type' => 'text',
                    ),
                    'park_link' => array(
                      'title' => esc_html__('Link to Park Website'),
                      'type' => 'text',
                    ),
                    'park_img' => array(
                      'title' => esc_html__('Park Tile Image'),
                      'type' => 'media',
                    ),
                  ),
                ),
            )
        );

}
add_action('customize_register', 'parks_tiles_repeater');

function get_involved_tiles_repeater($wp_customize) {
  require 'section_vars.php';
  require_once 'controller.php';
  $wp_customize->add_section($get_involved_tiles_section, array(
      'title' => 'Get Involved Tiles Repeater',
  ));
  $wp_customize->add_setting($get_involved_tiles_setting, array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(
      new Onepress_Customize_Repeatable_Control(
          $wp_customize,
          $get_involved_tiles_setting,
          array(
              'label' => esc_html__('Get Involved Tiles Repeater'),
              'description' => 'add or remove parks tile from homepage',
              'section' => $get_involved_tiles_section,
              'live_title_id' => 'park_name',
              'title_format' => esc_html__('[live_title]'),
              'max_item' => 20,
              'limited_msg' => wp_kses_post('Max of 20 parks met'),
              'fields' => array(
                  'park_name' => array(
                    'title' => esc_html__('Park Name'),
                    'type' => 'text',
                  ),
                  'park_link' => array(
                    'title' => esc_html__('Link to Park Website'),
                    'type' => 'text',
                  ),
                  'park_img' => array(
                    'title' => esc_html__('Get Tile Image'),
                    'type' => 'media',
                  ),
                ),
              ),
          )
      );

}
add_action('customize_register', 'get_involved_tiles_repeater');

function company_information_customizer($wp_customize)
{
  require 'section_vars.php';

  $wp_customize->add_section($company_information_section, array(
    'title' => 'Company Information',
  ));

  // Phone number
  $wp_customize->add_setting($company_information_phone, array(
    'default' => 'Phone number placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_information_phone_control, array(
    'label' => 'Phone number',
    'section' => $company_information_section,
    'settings' => $company_information_phone
  )));

  // Email
  $wp_customize->add_setting($company_information_email, array(
    'default' => 'Email placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_information_email_control, array(
    'label' => 'Email',
    'section' => $company_information_section,
    'settings' => $company_information_email
  )));

  // Primary message
  $wp_customize->add_setting($company_information_message, array(
    'default' => 'Message placeholder'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_information_message_control, array(
    'label' => 'Message',
    'section' => $company_information_section,
    'settings' => $company_information_message
  )));

  // Twitter
  $wp_customize->add_setting($company_link_twitter, array(
    'default' => 'https://www.twitter.com'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_link_twitter_control, array(
    'label' => 'Link to Twitter page (i.e., https://twitter.com)',
    'section' => $company_information_section,
    'settings' => $company_link_twitter
  )));
    // Youtube
  $wp_customize->add_setting($company_link_youtube, array(
    'default' => 'https://www.youtube.com'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_link_youtube_control, array(
    'label' => 'Link to YouTube page (i.e., https://youtube.com)',
    'section' => $company_information_section,
    'settings' => $company_link_youtube
  )));
  // Facebook
  $wp_customize->add_setting($company_link_facebook, array(
    'default' => 'https://www.facebook.com'
  ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, $company_link_facebook_control, array(
    'label' => 'Link to Facebook page (i.e., https://facebook.com)',
    'section' => $company_information_section,
    'settings' => $company_link_facebook
  )));
}
add_action('customize_register', 'company_information_customizer');