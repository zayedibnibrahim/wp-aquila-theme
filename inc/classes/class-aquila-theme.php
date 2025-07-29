<?php

/**
 * Bootstraps the Theme.
 * 
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;

 use AQUILA_THEME\Inc\Traits\Singleton;


 class AQUILA_THEME {
    use Singleton;

    protected function __construct() {
        
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();
        Sidebars::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme(){
        add_theme_support('title-tag');

        add_theme_support( 'custom-logo', array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
        ));

        add_theme_support( 'custom-background', [
            'default-color'          => '#9132adff',
        ] );

        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

        add_editor_style();
        add_theme_support('wp-block-style');
        add_theme_support('align-wide');

        add_image_size('featured-thumbnail', 416, 277, true);
    }

    
    
 }