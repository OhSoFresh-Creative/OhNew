<?php
/**
* Template Name: Kursy
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
    <div class="container-1480 grid-2 col-gap100 items-c -pt-80 -pb-100 gap50-xl grid-1-l">
        <div class="content">
            <h2 class="white -pb-10" data-aos="fade-50"><?php echo ( $top['header'] ); ?></h2>
            <p class="white -pb-20" data-aos="fade-100"><?php echo ( $top['txt'] ); ?></p>
            <div class="inline-buttons">
                <div class="red-btn" data-aos="fade-300"><a href="<?php echo esc_url( $top['btn1']['url'] ); ?>"><?php echo esc_html( $top['btn1']['title'] ); ?></a></div>
            </div>
        </div>
        <div class="img order-left" data-aos="fade-up">
            <img src="<?php echo esc_url( $top['img'] ); ?>" />
        </div>
    </div>
<?php endif; ?>
</section>
<!--- top END --->

<!--- OFFER START --->
    <section class="offer container-1320 -mb-110 zindex999">
        <div class="">
        </div>
        <div class="offer-blurbs zindex999 -pb-50 grid-3 gap40 grid-2-xxl grid-1-xm" data-aos="fade-50">
            <?php while ( have_rows( 'offer' ) ) : the_row();
                $type = get_sub_field( 'type' );
                $btn1 = get_sub_field( 'btn1' );
                $btn2 = get_sub_field( 'btn2' );
            ?>
            <div class="offer-items b-shadow b-radius27 grid">
                <div class="type block b-radius10 -mb-20" style="background-color: rgba(<?php echo the_sub_field( 'color' ); ?>);">
                    <b class="ta-center -pt-20 -pb-20"><?php echo esc_html( $type ); ?></b>
                </div>
                <div><?php echo the_sub_field('offer-header'); ?></div>
                <div><?php echo the_sub_field( 'offer-txt' ); ?></div>
                    <div class="dropdown">
                        <button class="dropbtn">Zapisz się</button>
                            <div class="dropdown-content">
                            <a class="red-more a-self-e" href="<?php echo esc_html( $btn1 ); ?>">Zapisy dla nowych uczniów</a>
                            <a class="red-more a-self-e" href="<?php echo esc_html( $btn2 ); ?>">Zapisy dla uczniów kontynuujących</a>
                        </div>
                    </div>
            </div>
            <?php endwhile; ?> 
        </div>
        <div class="blue-btn ta-center zindex-1" data-aos="fade-100"><a href="#">Masz pytania?</a></div>
    </section>
<!--- OFFER END --->


<?php
get_footer();
