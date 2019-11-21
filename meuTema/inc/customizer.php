<?php 

function bs4wp_customize_register($wp_customize){
    //Rodapé
    $wp_customize -> add_section('footer', array(
    'title' => __('Rodapé', 'BS 4 + WP' /*nome do tema*/ ),
    'description' => sprintf(__('opções do rodapé', 'BS 4 + WP')),
    'priority' => 20,
    ));

    $wp_customize -> add_setting('footer_title', array(
        'default' => __('Meu primeiro tema WordPress', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_title', array(
        'label' => __('Titulo do Rodapé'),
        'section' => 'footer',
        'priority' => 1
    ));

    $wp_customize -> add_setting('footer_text', array(
        'default' => __('Feito por Clayton Tavares', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('footer_text', array(
        'label' => __('Texto do Rodapé'),
        'section' => 'footer',
        'priority' => 2
    ));

    //Cabeçalho
    $wp_customize -> add_section('header', array(
    'title' => __('Cabeçalho', 'BS 4 + WP' /*nome do tema*/ ),
    'description' => sprintf(__('opções do cabeçalho', 'BS 4 + WP')),
    'priority' => 19,
    ));

    $wp_customize -> add_setting('header_title', array(
        'default' => __('Meu primeiro tema WordPress', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('header_title', array(
        'label' => __('Titulo do cabeçalho'),
        'section' => 'header',
        'priority' => 1
    ));

    $wp_customize -> add_setting('header_txt', array(
        'default' => __('Feito com Bootstrap', 'BS 4 + WP'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('header_txt', array(
        'label' => __('Texto do cabeçalho'),
        'section' => 'header',
        'priority' => 2
    ));
}

add_action('customize_register', 'bs4wp_customize_register');

?>