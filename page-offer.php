<?php
/**
* Template Name: Oferta
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
            <p class="white -pb-20 w-70p w-100p-xl" data-aos="fade-100"><?php echo ( $top['txt'] ); ?></p>
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
    <div class="offer">
    
    <?php while ( have_rows( 'offer' ) ) : the_row();
            $img = get_sub_field( 'img' );
            $header = get_sub_field( 'header' );
            $text = get_sub_field( 'txt' );
            $bg = get_sub_field( 'bg' );
        ?>
        <div id="offerlist-<?php echo get_row_index(); ?>" class="offer-list grid-2 gap100 relative a-items-c -mt-150 gap50-2xl grid-1-xxm -mt-100-l">
            <div class="img h-100p-xl order-1-xxm" data-aos="fade-up">
                <img class="b-radius15 b-shadow h-100p-xl cover-xl w-100p-xxm h-200px-xxm cover-xxm" src="<?php echo esc_html( $img ); ?>" />
            </div>
            <div class="content zindex999 order-2-xxm">
                <h3 class="-mb-30" data-aos="fade-200"><?php echo esc_html( $header ); ?></h3>
                 <p data-aos="fade-300"><?php echo esc_html( $text ); ?></p> <!--tutaj bez esc_html jak <br> -->
            </div>
            <div id="offer" class="bg-sign absolute zindex0" data-aos="fade-100"><img src="<?php echo esc_html( $bg ); ?>" /></div>
        </div>
        <?php endwhile; ?> 
        </div>
</section>

<!--- OFFER END --->

<?php
get_footer();
