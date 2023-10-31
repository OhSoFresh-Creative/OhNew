<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>

<footer>

  <div class="bootscore-footer footer-section">
    <div class="<?= bootscore_container_class(); ?> ">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <?php dynamic_sidebar('top footer'); ?>
      <?php endif; ?>

      <div class="row footer container-1540 gap50 -pt-150 -pb-150 grid-2-l gap30-l -pt-100-l -pb-100-l grid-1-s">

        <!-- Footer 1 Widget -->
        <div class="">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div class="">
          <?php if (is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <div class="">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
          <?php endif; ?>
        </div>

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container'      => false,
        'menu_class'     => '',
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
        'depth'          => 1,
        'walker'         => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>

    </div>
  </div>

  <div class="bootscore-info site-info py-4 text-center">
    <div class="<?= bootscore_container_class(); ?>">
      <?php if (is_active_sidebar('footer-info')) : ?>
        <?php dynamic_sidebar('footer-info'); ?>
      <?php endif; ?>
      <p class="ohsofresh">© <a href="https://www.ohsofresh.pl" title="OhSoFresh"><span class="gradient-reverse">OhSoFresh</span></a> Creative - All rights reserved. </p>
    </div>
  </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?= get_stylesheet_directory_uri(); ?>/js/simple-lightbox.min.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/flicky.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/tabs.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/tabbed.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/aos.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/anim.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/js/modal.js"></script>

<script>
  AOS.init();
</script>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>

</html>
