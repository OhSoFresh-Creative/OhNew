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

<section <?php echo $anchor; ?> class="brief contact -pt-100 -pb-50">
	<div class="container-1540 grid-2-1  grid-1-l">
     <div class="contact-form modal-box ">
            <h5 class="yellow -mb-10">Brief przygotowania strony internetowej</h5>
            <p class="-mb-30">Poniższy formularz służy do opisu strony internetowej, którą mamy dla Ciebie przygotować. Traktuj go jako biznes plan Twojej firmy. Im więcej przekażesz nam informacji, tym lepiej sprostamy Twoim oczekiwaniom. Jeśli jednak nie jesteś czegoś pewny, zostaw pytanie bez odpowiedzi.</p>
            <div class="form">
                <?php echo apply_shortcodes( '[contact-form-7 id="4798" title="Brief online"]' ); ?>
            </div>
        </div>
		<div class="contact-content -pt-50 -pt-120-l"  style="position: sticky; top: 150px; align-self: start;">
            <h5 class="header white -pb-30 -pb-20-l w-80p w-100p-xl">Potrzebujesz pomocy?</h5>
            <p class="phone fs-24 -mb-10"><a class="white" href="tel:500370348">+48 500 370 348</a></p>
            <p class="mail fs-24"><a class="white" href="mailto:info@ohsofresh.pl">info@ohsofresh.pl</a></p> 
          
		</div>
		</div>
</section>
 
