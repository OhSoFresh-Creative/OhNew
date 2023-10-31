<?php
/**
* Template Name: Nasze metody
 */

get_header(); ?>

<!--- top START --->
<div class="container-1480 breadcrumbs relative zindex999" data-aos="fade-up">
    <div class="bread-items">
        
    </div>
</div>

<section class="bg-white b-shadowonly b-radius27" data-aos="fade-up">

<?php $top = get_field('top');

if( $top ): ?>
    <div class="container-1480 grid-2 col-gap100 items-c -pt-80 -pb-100 gap50-xl grid-1-l">
        <div class="content">
            <h2 class="-pb-10" data-aos="fade-50"><?php echo ( $top['header'] ); ?></h2>
            <p class="-pb-20" data-aos="fade-100"><?php echo ( $top['txt'] ); ?></p>
            <div class="inline-buttons">
                <div class="blue-btn" data-aos="fade-200"><a href="<?php echo esc_url( $top['btn1']['url'] ); ?>"><?php echo esc_html( $top['btn1']['title'] ); ?></a></div>
            </div>
        </div>
        <div class="img order-left" data-aos="fade-up">
            <img src="<?php echo esc_url( $top['img'] ); ?>" />
        </div>
    </div>
<?php endif; ?>
</section>
<!--- top END --->

<!-- TEDDYEDDIE  -->
<?php $teddy = get_field('teddy');

if( $teddy ): ?>
    <div id="teddy" class="container-1320 grid-2-3 gap10 items-c -mt-110 gap10-xl grid-1-l">
        <div class="img a-self-s-l" data-aos="fade-up">
            <img class="b-radius27" src="<?php echo esc_url( $teddy['img'] ); ?>" />
        </div>
        <div class="content">
            <h4 class="red -mb-10" data-aos="fade-50"><?php echo ( $teddy['header'] ); ?></h4>
            <div class="red -mb-30" data-aos="fade-100"><?php echo ( $teddy['txt'] ); ?></div>
            <div class="blue-btn" data-aos="fade-200"><a href="<?php echo esc_url( $teddy['btn']['url'] ); ?>">Dowiedz się więcej</a></div>
        </div>
    </div>
<?php endif; ?>
<!-- TEDDYEDDIE END --->

<!-- CAMBRIDGE  -->
<?php $cambridge = get_field('cambridge');

if( $cambridge ): ?>
    <div id="cambridge" class="container-1320 grid-2-3 gap10 items-c -mt-110 gap10-xl grid-1-l">
        <div class="img a-self-s-l" data-aos="fade-up">
            <img class="b-radius27" src="<?php echo esc_url( $cambridge['img'] ); ?>" />
        </div>
        <div class="content">
            <h4 class="red -mb-10" data-aos="fade-50"><?php echo ( $cambridge['header'] ); ?></h4>
            <div class="red -mb-30" data-aos="fade-100"><?php echo ( $cambridge['txt'] ); ?></div>
            <div class="blue-btn" data-aos="fade-200"><a href="<?php echo esc_url( $cambridge['btn']['url'] ); ?>">Dowiedz się więcej</a></div>
        </div>
    </div>
<?php endif; ?>
<!-- eklektyzm END --->

<!-- CAMBRIDGE  -->
<?php $eklektyzm = get_field('eklektyzm');

if( $eklektyzm ): ?>
    <div id="eklektyzm" class="container-1320 grid-2-3 gap10 items-c -mt-110 -mb-110 gap10-xl grid-1-l">
        <div class="img a-self-s-l" data-aos="fade-up">
            <img class="b-radius27" src="<?php echo esc_url( $eklektyzm['img'] ); ?>" />
        </div>
        <div class="content">
            <h4 class="red -mb-10" data-aos="fade-50"><?php echo ( $eklektyzm['header'] ); ?></h4>
            <div class="red -mb-30" data-aos="fade-100"><?php echo ( $eklektyzm['txt'] ); ?></div>
            <div class="blue-btn" data-aos="fade-200"><a href="<?php echo esc_url( $eklektyzm['btn']['url'] ); ?>">Dowiedz się więcej</a></div>
        </div>
    </div>
<?php endif; ?>
<!-- eklektyzm END --->


<?php
get_footer();
