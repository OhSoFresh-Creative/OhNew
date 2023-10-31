<?php
/**
* Template Name: Polityka
 */

get_header(); ?>

<div class="container-1540 breadcrumbs-white relative zindex999" data-aos="fade-up">
   
</div>

<!--- CONTACT START --->
<section class="-pt-120" data-aos="fade-up">
    <div class="container-1540 -pt-120 -pb-120 grid-2">
        <div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php
				while ( have_posts() ) :
					the_post();

					do_action( 'ohsofresh_page_before' );

					get_template_part( 'template-parts/content', 'page' );

					/**
					 * Functions hooked in to ohsofresh_page_after action
					 *
					 * @hooked ohsofresh_display_comments - 10
					 */
					do_action( 'ohsofresh_page_after' );

				endwhile;
				?>
			</main>
		</div>
    </div>
</section>

<!--- CONTACT END --->

<?php
get_footer();
