<?php

/**
 * Тема Expert Luxury
 */

/* ================================
   НАСТРОЙКА ТЕМЫ
================================ */

function expert_luxury_setup() {

    // Авто <title>
    add_theme_support('title-tag');

    // Поддержка миниатюр
    add_theme_support('post-thumbnails');

    // HTML5 разметка
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Регистрация меню
    register_nav_menus([
        'main_menu' => 'Основное меню',
    ]);
}

add_action('after_setup_theme', 'expert_luxury_setup');


/* ================================
   ПОДКЛЮЧЕНИЕ СТИЛЕЙ И СКРИПТОВ
================================ */

function expert_luxury_assets() {

    // Основной стиль
    wp_enqueue_style(
        'expert-luxury-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );

    // Активное меню
    wp_enqueue_script(
        'expert-active-menu',
        get_template_directory_uri() . '/js/active-menu.js',
        [],
        '1.0',
        true
    );

    // Scroll анимация
    wp_enqueue_script(
        'expert-scroll-animate',
        get_template_directory_uri() . '/js/scroll-animate.js',
        [],
        '1.0',
        true
    );

    // Слайдер экспертов
    wp_enqueue_script(
        'expert-slider',
        get_template_directory_uri() . '/js/experts-slider.js',
        [],
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'expert_luxury_assets');
