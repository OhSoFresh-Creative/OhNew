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
 
<!--- CECHY --->

<section class="container-1540 -pt-0 -pb-100 -pt-80-l -pb-80-l -mt-n100-s" style="margin-top: -350px; z-index: 99999; position: relative;">

<div class="why-bg absolute zindex0" data-aos="fade-100"><img src="https://ohsofresh.pl/wp-content/uploads/2023/06/whyus.svg" /></div>

<?php
	$job_first = get_field('job_first');
	if( $job_first ): ?>

    <div class="adv adv2 flex j-content-e -pr-50 -pt-70-l -pr-0-l grid-1-xm" data-aos="fade-400">
        <img class="b-radius15 b-shadow order-2 order-1-xm" src="<?php echo aq_resize( $job_first['img']['url'], 395, true ); ?>" />
        <div class="content2 w-35p a-self-e order-1 zindex999 w-50p-2l a-self-c-l w-100p-xm order-2-xm">
            <h2 class="fs-28-xs -mb-10" data-aos="fade-100"><?php echo ( $job_first['header'] ); ?></h2>
            <div data-aos="fade-200"><?php echo ( $job_first['txt'] ); ?></div>
        </div>
    </div>
<?php endif; ?>

<?php
	$job_second = get_field('job_second');
	if( $job_second ): ?>

    <div class="adv flex j-content-s -pt-100 -pb-20 -pb-0-l grid-1-xm">
        <img data-aos="fade-100" class="b-radius15 b-shadow" src="<?php echo aq_resize( $job_second['img']['url'], 395, true ); ?>"/>
        <div class="content1 zindex999 w-35p a-self-e w-50p-2l a-self-c-l w-100p-xm">
            <h2 class="fs-28-xs -mb-10" data-aos="fade-100"><?php echo ( $job_second['header'] ); ?></h2>
            <div data-aos="fade-200"><?php echo ( $job_second['txt'] ); ?></div>
        </div>
    </div>
<?php endif; ?>

<?php
	$job_third = get_field('job_third');
	if( $job_third ): ?>

    <div class="adv adv2 flex j-content-c -pt-100 -pt-70-l grid-1-xm">
        <img data-aos="fade-100" class="b-radius15 b-shadow order-2 order-1-l" src="<?php echo aq_resize( $job_third['img']['url'], 395, true ); ?>" alt="<?php echo esc_attr( $job_third['img']['alt'] ); ?>" />
        <div class="content3 w-35p a-self-e order-1 zindex999 w-50p-2l a-self-c-l order-2-l w-100p-xm">
            <h2 class="fs-28-xs -mb-10" data-aos="fade-100"><?php echo ( $job_third['header'] ); ?></h2>
            <div data-aos="fade-200"><?php echo ( $job_third['txt'] ); ?></div>
        </div>
    </div>
<?php endif; ?>

</section>