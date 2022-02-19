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

function get_involved_tile_customizer($wp_customize) {
    $wp_customize->add_section('get_involved', array(
        'title' => 'Get Involved Images',
    ));

    $wp_customize->add_setting('get_involved_tile_1', array(
        'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'get_involved_tile_1',
        array (
            'label' => 'Image 1',
            'section' => 'get_involved',
        )
    ));

    $wp_customize->add_setting('get_involved_tile_2', array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
      $wp_customize,
      'get_involved_tile_2',
      array (
          'label' => 'Image 2',
          'section' => 'get_involved',
      )
  ));

  $wp_customize->add_setting('get_involved_tile_3', array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
      $wp_customize,
      'get_involved_tile_3',
      array (
          'label' => 'Image 3',
          'section' => 'get_involved',
      )
  ));

  $wp_customize->add_setting('get_involved_tile_4', array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
      $wp_customize,
      'get_involved_tile_4',
      array (
          'label' => 'Image 4',
          'section' => 'get_involved',
      )
  ));

  $wp_customize->add_setting('get_involved_tile_5', array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control(
      $wp_customize,
      'get_involved_tile_5',
      array (
          'label' => 'Image 5',
          'section' => 'get_involved',
      )
  ));

}
add_action('customize_register', "get_involved_tile_customizer");