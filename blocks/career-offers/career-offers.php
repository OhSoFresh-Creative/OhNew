<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Anchor
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Class
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
$align = '';
if ( ! empty( $block['align'] ) ) {
    $align .= ' align' . $block['align'];
}

?>

   <section id="offers" class="container-1540 jobs favor position-relative -mt-100 grid-3-1 -mb-70 grid-1-l">
   <div class="">
        <h4 class="main" data-aos="fade-up"><?php the_field('subheader'); ?></h4>
        <div class="accordion-wrapper"> 
        <h2 class="jobs__gradient -pb-20" data-aos="fade-100"><?php the_field('header'); ?></h2>
        <?php while ( have_rows( 'offers' ) ) : the_row();
                $stanowisko = get_sub_field( 'stanowisko' );
                $txt = get_sub_field( 'txt' );
            ?>
                
                <div class="accordion-wrapper" data-aos="fade-200">     
                    <button class="job-btn acc"><?php echo ( $stanowisko ); ?></button>
                        <div class="panel">
                            <div class="accordion-box">
                                <?php echo ( $txt ); ?>
                                <div class="dark-btn -mt-30">
                                   <a class="app"  href="#popup-<?php echo get_row_index(); ?>">Aplikuj</a>
                                </div>
                            </div>
                        </div>
                </div>
                <div id="popup-<?php echo get_row_index(); ?>" class="overlay">
                    <div class="popup">
                        
                        <a class="close" href="#jobs">&times;</a>
                        <div class="content">
							<h5 class="-pb-10">Dołącz do nas</h5>
                            <?php echo apply_shortcodes( '[contact-form-7 id="4330" title="Wyślij CV"]' ); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?> 
        </div>
		</div>
		<div></div>
    </section>