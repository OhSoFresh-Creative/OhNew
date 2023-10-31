<?php
/**
* Template Name: Zapisy 
 */

get_header(); ?>

<!--- top START --->
<div class="container-1480 breadcrumbs-white relative zindex999" data-aos="fade-up">
    <div class="bread-items">
        
    </div>
</div>

<section class="aboutus b-radius27 -mb-110" data-aos="fade-up">

<?php $top = get_field('top');

if( $top ): ?>
    <div class="container-1480 col-gap100 items-c -pt-140 -pb-100 gap50-xl grid-1-l">
        <div class="content">
            <h3 class="white -pb-10" data-aos="fade-50"><?php echo ( $top['header'] ); ?></h3>
            <p class="white -pb-20" data-aos="fade-100"><?php echo ( $top['txt'] ); ?></p>
            <div class="inline-buttons">
                    <div class="white-btn left-btn" data-aos="fade-200"><a href="<?php echo esc_url( $top['btn1']['url'] ); ?>"><?php echo esc_html( $top['btn1']['title'] ); ?></a></div>
                    <div class="red-btn" data-aos="fade-300"><a href="<?php echo esc_url( $top['btn2']['url'] ); ?>"><?php echo esc_html( $top['btn2']['title'] ); ?></a></div>
                </div>
        </div>
    </div>
<?php endif; ?>
</section>
<!--- top END --->

<!--- OFFER START --->
    <section id="signup" class="contact signup container-1320 -mb-110 zindex999">
        <div class="contact-form" data-aos="fade-400">
            <div class="form">
                <?php echo do_shortcode( '[contact-form-7 id="'.get_field('signform').'"]' ); ?>
            </div>
        </div>
    </section>
<!--- OFFER END --->


<?php
get_footer();
