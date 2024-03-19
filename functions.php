<?php
/**
 * Bathe functions
 *
 * @package Bathe
 */

/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */
add_action(
	'after_setup_theme',
	function () {
		load_theme_textdomain( 'bathe', get_theme_file_uri( 'languages' ) );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);
		add_theme_support(
			'custom-background',
			apply_filters(
				'bathe_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 200,
				'width'       => 50,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		 /**
		 * Enable responsive embed support.
		 *
		 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
		 */
		add_theme_support('responsive-embeds');

		/**
		 * Add support for block styles
		 *
		 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#default-block-styles
		 */
		add_theme_support('wp-block-styles');

		/** Add support for full and wide align blocks
		 *
		 * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#wide-alignment
		 */
		add_theme_support('align-wide');

		register_nav_menus(
			array(
				'primary_menu' => __( 'Primary Menu', 'bathe' ),
			)
		);
	}
);

/**
 * Register widget area.
 */
add_action(
	'widgets_init',
	function () {
		register_sidebar(
			array(
				'name'          => __( 'Sidebar', 'bathe' ),
				'id'            => 'sidebar-1',
				'description'   => '',
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
);

/**
 * Enqueue scripts and styles.
 */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style( 'bathe', get_theme_file_uri( 'assets/css/main.css' ), array(), '3.0.1' );
		wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );
		wp_enqueue_style( 'hamburgers', 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css', array(), '1.2.1' );
		wp_enqueue_style( 'splide/style', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), '4.1.4' );
		// wp_enqueue_style( 'tailwind', get_theme_file_uri( 'assets/css/tailwind.css' ), array(), '3.3.2' );

		wp_enqueue_script( 'bathe', get_theme_file_uri( 'assets/js/main.js' ), array(), '3.0.1', true );
		wp_enqueue_script( 'splide/script', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), '4.1.4', true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
);
