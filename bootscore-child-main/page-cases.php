<?php
/**
* Template Name: Case studies
 */

get_header(); ?>

<!--- TOP START --->

<?php $top = get_field('top');
if( $top ): ?>
<section class="about b-radius27" data-aos="fade-up" style="background-image:linear-gradient(0deg, rgba(27,32,44,1) 0%, rgba(27,32,44,0) 100%), linear-gradient(90deg, rgba(41,7,81,1) 0%, rgba(41,7,81,0) 100%), url('<?php echo esc_url( $top['img'] ); ?>'"><div class="container-1540 breadcrumbs-white relative zindex999" data-aos="fade-up">
    <div class="bread-items -mt-50">
        
    </div>
</div>
    <div class="container-1540 grid-2 col-gap100 items-c h-100vh -pt-80 -pb-100 gap50-xl grid-1-l">
        <div class="content">
            <h2 class="white -pb-10" data-aos="fade-50"><?php echo ( $top['header'] ); ?></h2>
            <p class="white -pb-20 w-50p" data-aos="fade-100"><?php echo ( $top['txt'] ); ?></p>
            <div class="inline-buttons">
                <div class="oh-btn left-btn" data-aos="fade-200"><a href="<?php echo esc_url( $top['btn1']['url'] ); ?>"><?php echo esc_html( $top['btn1']['title'] ); ?></a></div>
            </div>
        </div>
    </div>
<?php endif; ?>
</section>
<!--- TOP END --->

<!--- OFFER --->

<section class="container-1540">                
    <div class="blog grid-2 -pb-20 grid-2-xl grid-1-xm">
    
<?php
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
    $paged = get_query_var('page');
} else {
    $paged = 1;
}
  
$custom_query_args = array(
    'post_type' => 'post', 
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $paged,
    'post_status' => 'publish',
    'ignore_sticky_posts' => true,
    'category_name' => 'cases',
	
    'order' => 'DESC', // 'ASC'
    'orderby' => 'date' // modified | title | name | ID | rand
);
$custom_query = new WP_Query( $custom_query_args );
  
if ( $custom_query->have_posts() ) :
    while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
	<div class="blog-item grid ta-left" data-aos="fade-100">
        <article <?php post_class(); ?>>
			<a class="-mb-20" href="<?php the_permalink() ?>"><?php the_post_thumbnail('single-post-thumbnail'); ?></a>
            <p class="blog-date"><?php echo get_the_date( 'j F Y' ); ?></p>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div><?php the_excerpt(); ?></div>
        </article>
	</div>
    <?php
    endwhile;
    ?>
     </div>
    <?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
        <?php
        $orig_query = $wp_query; // fix for pagination to work
        $wp_query = $custom_query;
        ?>
			<?php yourtheme_paging_nav(); ?>
        <?php
        $wp_query = $orig_query; // fix for pagination to work
        ?>
    <?php endif; ?>
  
<?php
    wp_reset_postdata(); // reset the query 
else:
    echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
endif;
?>
</div>
</section>

<!--- OFFER END --->

<?php
get_footer();
