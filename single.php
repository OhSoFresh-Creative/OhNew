<?php
/**
 * The template for displaying all single posts.
 *
 * @package ohsofresh
 */

get_header();
?>
<div class="container-1540 relative zindex999" data-aos="fade-up">
    
</div>

	<div class="post-top container-1540 -pt-220 -mb-80" data-aos="fade-50">
		<div class="grid-3-2 grid-1-xxm">
			<div>
			<h2 class="-mb-20"><?php echo get_the_title(); ?></h2>
			<p class="-mb-30"><?php the_excerpt(); ?></p>
			</div>
		</div>
	</div>
		<div class="post-img" data-aos="fade-100">
			<?php the_post_thumbnail( ); ?>
		</div>
	<div class="container-1540 -pt-60 -mb-60" data-aos="fade-100">
		<div class="w-60p w-90p-xxm -m-0auto">
              <?php the_content(); ?>
		</div>
	</div>
		

	<?php ?>
<?php
get_footer();
