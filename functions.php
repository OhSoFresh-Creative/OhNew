<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

require_once 'aq_resizer.php';

/*--- OPTIONS CUSTOM PAGES ----*/

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Realizacje',
        'menu_title'    => 'Dodatkowe opcje',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}

/*--- CZYTAJ WIĘCEJ BLOG ----*/

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*--- CUSTOM FIELDS ---*/

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/hero' );
    register_block_type( __DIR__ . '/blocks/career-txt' );
    register_block_type( __DIR__ . '/blocks/career-how' );
    register_block_type( __DIR__ . '/blocks/career-offers' );
    register_block_type( __DIR__ . '/blocks/blogtxt' );
    register_block_type( __DIR__ . '/blocks/cs-header' );
    register_block_type( __DIR__ . '/blocks/brief' );
}

/*--- CUSTOM FONTS ---*/

function dynamic_styles() {
    $font_path = get_stylesheet_directory_uri() . '/fonts/';

    echo '<style>';
    echo '@font-face {
        font-family: "Uni Sans";
        src: url("' . $font_path . 'UniSans-Heavy.eot");
        src: url("' . $font_path . 'UniSans-Heavy.eot?#iefix") format("embedded-opentype"),
            url("' . $font_path . 'UniSans-Heavy.woff2") format("woff2"),
            url("' . $font_path . 'UniSans-Heavy.woff") format("woff"),
            url("' . $font_path . 'UniSans-Heavy.ttf") format("truetype"),
            url("' . $font_path . 'UniSans-Heavy.svg#UniSans-Heavy") format("svg");
        font-weight: 900;
        font-style: normal;
        font-display: swap;
    }';

    echo '@font-face {
        font-family: "Uni Sans";
        src: url("' . $font_path . 'UniSans.eot");
        src: url("' . $font_path . 'UniSans.eot?#iefix") format("embedded-opentype"),
            url("' . $font_path . 'UniSans.woff2") format("woff2"),
            url("' . $font_path . 'UniSans.woff") format("woff"),
            url("' . $font_path . 'UniSans.ttf") format("truetype"),
            url("' . $font_path . 'UniSans.svg#UniSans") format("svg");
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }';

    echo '@font-face {
        font-family: "Uni Sans";
        src: url("' . $font_path . 'UniSans-Bold.eot");
        src: url("' . $font_path . 'UniSans-Bold.eot?#iefix") format("embedded-opentype"),
            url("' . $font_path . 'UniSans-Bold.woff2") format("woff2"),
            url("' . $font_path . 'UniSans-Bold.woff") format("woff"),
            url("' . $font_path . 'UniSans-Bold.ttf") format("truetype"),
            url("' . $font_path . 'UniSans-Bold.svg#UniSans-Bold") format("svg");
        font-weight: bold;
        font-style: normal;
        font-display: swap;
    }';

    echo '@font-face {
        font-family: "Uni Sans";
        src: url("' . $font_path . 'UniSans-SemiBold.eot");
        src: url("' . $font_path . 'UniSans-SemiBold.eot?#iefix") format("embedded-opentype"),
            url("' . $font_path . 'UniSans-SemiBold.woff2") format("woff2"),
            url("' . $font_path . 'UniSans-SemiBold.woff") format("woff"),
            url("' . $font_path . 'UniSans-SemiBold.ttf") format("truetype"),
            url("' . $font_path . 'UniSans-SemiBold.svg#UniSans-SemiBold") format("svg");
        font-weight: 600;
        font-style: normal;
        font-display: swap;
    }';

    echo '</style>';
}

add_action('wp_head', 'dynamic_styles');
