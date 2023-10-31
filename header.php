<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">


    	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/flicky.css">
		<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/bx/jquery.bxslider.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="<?= get_stylesheet_directory_uri(); ?>/bx/jquery.bxslider.min.js"></script>
		<script src="<?= get_stylesheet_directory_uri(); ?>/js/anchor.js"></script>
    	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/aos/aos.css">

		<script src="<?= get_stylesheet_directory_uri(); ?>/js/anim.js"></script>
    	<script src="<?= get_stylesheet_directory_uri(); ?>/js/menubar.js"></script>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet"> 

		<script>
			$(document).ready(function(e) {
				$('.slider').bxSlider({
					auto: true,
					autoHover: true
				});
    		});
		</script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- The Modal -->
	<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content modal-box">
		<span class="close">&times;</span>
		<div class="modal-form">
				<div>
				<h5 class="yellow -mb-10">Napisz do nas</h5>
				<p class="-mb-30">Napisz nam dokładnie czego potrzebujesz, a my w ciągu 12 godzin wrócimy do Ciebie z wyceną!</p>
				<div class="form">
					<?php echo apply_shortcodes( '[contact-form-7 id="4155" title="Formularz kontaktowy_copy"]' ); ?>
				</div>
				</div>
		</div>
	</div>

	</div>

<?php wp_body_open(); ?>

<div id="page" class="site">

  <header id="masthead" class="site-header">

    <div class="fixed-top">

      <nav id="nav-main" class="navbar navbar-expand-lg">

        <div class="<?= bootscore_container_class(); ?>">

          <!-- Navbar Brand -->
          <a class="navbar-brand xs d-md-none" href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-sm.svg" alt="logo" class="logo xs"></a>
          <a class="navbar-brand md d-none d-md-block" href="<?= esc_url(home_url()); ?>"><img src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo.svg" alt="logo" class="logo md"></a>

          <!-- Offcanvas Navbar -->
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
            <div class="offcanvas-header">
              <span class="h5 offcanvas-title"><?php esc_html_e('Menu', 'bootscore'); ?></span>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">

              <!-- Bootstrap 5 Nav Walker Main Menu -->
              <?php
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => '__return_false',
                'items_wrap'     => '<ul id="bootscore-navbar" class="navbar-nav m-auto %2$s">%3$s</ul>',
                'depth'          => 2,
                'walker'         => new bootstrap_5_wp_nav_menu_walker()
              ));
              ?>

              <!-- Top Nav 2 Widget -->
              <?php if (is_active_sidebar('top-nav-2')) : ?>
                <?php dynamic_sidebar('top-nav-2'); ?>
              <?php endif; ?>

            </div>
			
          </div>

          <div class="header-actions d-flex align-items-center">
<div class="top-buttons">
				<div id="myBtn" class="oh-btn" data-aos="fade-200"><a>Zapytaj o wycenę</a></div>
			</div>
            <!-- Top Nav Widget -->
            <?php if (is_active_sidebar('top-nav')) : ?>
              <?php dynamic_sidebar('top-nav'); ?>
            <?php endif; ?>

            <?php
            if (class_exists('WooCommerce')) :
              get_template_part('template-parts/header/actions', 'woocommerce');
            else :
              get_template_part('template-parts/header/actions');
            endif;
            ?>

            <!-- Navbar Toggler -->
            <button class="btn btn-outline-secondary d-lg-none ms-1 ms-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
              <i class="fa-solid fa-bars"></i><span class="visually-hidden-focusable">Menu</span>
            </button>

          </div><!-- .header-actions -->

        </div><!-- bootscore_container_class(); -->

      </nav><!-- .navbar -->

      <?php
      if (class_exists('WooCommerce')) :
        get_template_part('template-parts/header/top-nav-search-collapse', 'woocommerce');
      else :
        get_template_part('template-parts/header/top-nav-search-collapse');
      endif;
      ?>

    </div><!-- .fixed-top .bg-light -->

    <!-- Offcanvas User and Cart -->
    <?php
    if (class_exists('WooCommerce')) :
      get_template_part('template-parts/header/offcanvas', 'woocommerce');
    endif;
    ?>

  </header><!-- #masthead -->
