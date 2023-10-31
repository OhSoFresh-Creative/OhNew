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
<!--- HERO START --->
<?php $hero = get_field('hero');
    if( $hero ): ?>
    <section <?php echo $anchor; ?> class="hero -mb-90 mobile-flex -mb-30-l -mb-0-xs relative zindex999 " data-aos="fade-up" style="background-image:linear-gradient(0deg, rgba(27,32,44,1) 0%, rgba(27,32,44,0) 100%), linear-gradient(90deg, rgba(41,7,81,1) 0%, rgba(41,7,81,0) 100%), url('<?php echo ( $hero['hero-img'] ); ?>'">
        <div class="hero-wrapper container-1540 grid-2 items-c gap100 gap50-l relative zindex999">
            <div class="hero-content w-90p j-self-s w-100p-xl">
                <h2 class="white" data-aos="fade-50"><?php echo ( $hero['hero-header'] ); ?></h2>
                <p class="fs-20 -pb-30 white" data-aos="fade-100"><?php echo ( $hero['hero-txt'] ); ?></p>
                <div class="inline-buttons">
                    <div class="oh-btn left-btn" data-aos="fade-200"><a href="<?php echo esc_url( $hero['hero-btn1']['url'] ); ?>"><?php echo esc_html( $hero['hero-btn1']['title'] ); ?></a></div>
                    <div class="stroke-btn" data-aos="fade-300"><a href="<?php echo esc_url( $hero['hero-btn2']['url'] ); ?>"><?php echo esc_html( $hero['hero-btn2']['title'] ); ?></a></div>
                </div>
                
            </div>
        </div> 
        <?php endif; ?>
    </section>
<!--- HERO END --->
 
