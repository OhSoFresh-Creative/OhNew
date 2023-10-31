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

    <section id="how" class="container-1540 job-how position-relative -mt-100 -mt-0-s">
        <div class="position-relative zindex1000">
        <h2 data-aos="fade-100"><?php the_field('how_header'); ?></h2>            
        <div class="grid-4 gap40 -mt-30 grid-2-l grid-1-m">
        
        <?php while ( have_rows( 'how' ) ) : the_row();
                $step = get_sub_field( 'step' );
                $img = get_sub_field( 'img' );
                $txt = get_sub_field( 'txt' );
            ?>
            <div class="career__content b-radius15 b-shadow bg-dark" data-aos="fade-200">
                <h3><?php echo esc_html( $step ); ?></h3>
                <img class="-mt-10" src="<?php echo esc_html( $img ); ?>" />
                <p class="-mt-20"><?php echo ( $txt ); ?></p>
            </div>
            <?php endwhile; ?> 
        </div>
        </div>
    </section>