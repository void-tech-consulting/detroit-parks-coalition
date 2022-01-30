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
                'live_title_id' => 'project_title',
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
