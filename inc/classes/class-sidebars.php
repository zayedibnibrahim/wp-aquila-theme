<?php
/**
 *  Register sidebars
 * 
 * 
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;
use AQUILA_THEME\Inc\Traits\Singleton;

class Sidebars {

    use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        add_action('widgets_init', [$this, 'register_sidebars']);
        add_action('widgets_init', [$this, 'register_clock_widget']);
    }

    public function register_sidebars(){
        register_sidebar( array(
		'name'          => __( 'Sidebar', 'aquila' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'aquila' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

        register_sidebar( array(
		'name'          => __( 'Footer', 'aquila' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'aquila' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

    }

	public function register_clock_widget(){
		register_widget( 'AQUILA_THEME\Inc\Clock_Widget' );
	}
    
}