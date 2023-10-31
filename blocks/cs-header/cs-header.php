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
<!--- TOP START --->

<?php $cs_header = get_field('cs_header');
if( $cs_header ): ?>
<section class="about b-radius27" data-aos="fade-up" style="background-image:linear-gradient(0deg, rgba(27,32,44,1) 0%, rgba(27,32,44,0) 100%), linear-gradient(90deg, rgba(41,7,81,1) 0%, rgba(41,7,81,0) 100%), url('<?php echo esc_url( $cs_header['img'] ); ?>'"><div class="container-1540 breadcrumbs-white relative zindex999" data-aos="fade-up">
    <div class="bread-items -mt-50">
        <?php ux_breadcrumbs(); ?>
    </div>
</div>
    <div class="container-1540 grid-2 col-gap100 items-c h-100vh -pt-80 -pb-100 gap50-xl grid-1-l">
        <div class="content">
            <h5 class="white -pb-10" data-aos="fade-50"><?php echo ( $cs_header['subheader'] ); ?></h5>  
            <h2 class="white -pb-10" data-aos="fade-50"><?php echo ( $cs_header['header'] ); ?></h2>
            <p class="white -pb-20 w-70p w-100p-xl" data-aos="fade-100"><?php echo ( $cs_header['txt'] ); ?></p>
            <div class="inline-buttons">
                <div class="oh-btn left-btn" data-aos="fade-200"><a href="<?php echo esc_url( $cs_header['btn1']['url'] ); ?>"><?php echo esc_html( $cs_header['btn1']['title'] ); ?></a></div>
                <div class="stroke-btn" data-aos="fade-200"><a target="_blank" href="<?php echo esc_url( $cs_header['btn2']['url'] ); ?>"><?php echo esc_html( $cs_header['btn2']['title'] ); ?></a></div>
            </div>
        </div>
    </div>
<?php endif; ?>
</section>