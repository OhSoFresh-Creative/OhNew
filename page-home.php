<?php
/**
* Template Name: Page Home
 */

get_header(); ?>

<!--- HERO START --->
<?php $hero = get_field('hero');
    if( $hero ): ?>
    <section class="hero -mb-90 mobile-flex -mb-30-l -mb-0-xs relative zindex999" data-aos="fade-up">
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
        <div class="video-wrapper">
        <video class="start-video" playsinline autoplay muted loop id="myVideo">
            <source src="https://ohsofresh.pl/wp-content/uploads/2023/04/oh_vid.mp4" type="video/mp4">
        </video>
        </div>
        <?php endif; ?>
    </section>
<!--- HERO END --->

<!-- TECHNOLOGIA  -->
<?php $tech = get_field('tech');

if( $tech ): ?>
    <div id="tech" class="grid-2 gap100 items-c gap50-xxl grid-1-l container-l zindex999">
        <div class="content w-60p w-80p-2xxl w-100p-l">
            <h3 class="red -mb-10" data-aos="fade-100"><?php echo ( $tech['header'] ); ?></h3>
            <p class="-mb-30" data-aos="fade-200"><?php echo ( $tech['txt'] ); ?></p>
            <div class="oh-btn" data-aos="fade-300"><a href="<?php echo esc_url( $tech['btn']['url'] ); ?>"><?php echo esc_html( $tech['btn']['title'] ); ?></a></div>
        </div>
        <div class="img a-self-s-l h-100p-xl h-200px-xxm w-100p-xxm" data-aos="fade-up">
            <img class="b-radius-left b-shadow h-100p-xl cover b-radius15-l h-200px-xxm w-100p-xxm" src="<?php echo esc_url( $tech['img'] ); ?>" />
        </div>
    </div>
<?php endif; ?>
<!-- TECHNOLOGIA END --->

<!-- REALIZACJE  -->
<section class="work">
    <?php
        $work = get_field('work');
            
        if( $work ): ?>
            <div class="container-1540 grid-2 gap50 -mt-100 -mb-50 grid-1-xl gap30-xl -mt-70-xs">
                <div class="content" data-aos="fade-100">
                    <h3 class=""><?php echo ( $work['header'] ); ?></h3>
                    <p class="" ><?php echo ( $work['txt'] ); ?></p>
                </div>
                 <div class="oh-btn" data-aos="fade-200"><a href="<?php echo esc_url( $work['btn']['url'] ); ?>"><?php echo esc_html( $work['btn']['title'] ); ?></a></div>
            </div>
    <?php endif; ?>
</section>

 <section class="about_carousel offer-carousel container-1540 -mb-100 -mb-80-xs" data-aos="fade-300">                
       <div class="carousel" data-flickity='{ "cellAlign": "left", "draggable": true, "contain": true }'>
    
        <?php while ( have_rows( 'worktabs' ) ) : the_row();
                            $img = get_sub_field( 'img' );
                            $header = get_sub_field( 'header' );
                            $txt = get_sub_field( 'txt' );
                            $link = get_sub_field( 'link' );
                                ?>
         <div class="carousel-cell">
            <a href="<?php echo esc_html( $link ); ?>">
            <div class="carousel-img">
                <img class="b-shadow b-radius15" src="<?php echo esc_html( $img ); ?>" />
            </div>
            </a>
            <div class="content w-80p">
                <a href="<?php echo esc_html( $link ); ?>"><h5 class=""><?php echo esc_html( $header ); ?></h5></a>
                <p class="-pb-20"><?php echo esc_html( $txt ); ?></p>
                <div class="oh-btn"><a href="<?php echo esc_html( $link ); ?>">Zobacz case study</a></div>
            </div>
        </div>
        <?php endwhile; ?> 
        
        </div>
    </section>
<!-- REALIZACJE END --->

<!-- WHAT  -->
<?php

if( have_rows('what') ): while ( have_rows('what') ) : the_row();?>
    <div id="" class="grid-2 gap100 items-c gap30-xxl container-l grid-1-l zindex999 gap50-l">
        <div class="img a-self-s-l h-100p-xl h-200px-xxm w-100p-xxm" data-aos="fade-up">
            <img class="b-radius-right b-shadow h-100p-xl b-radius15-l cover h-200px-xxm w-100p-xxm" src="<?php echo get_sub_field('img'); ?>" />
        </div>
        <div class="content w-80p w-90p-xxl w-100p-l">
            <h3 class="red -pb-30" data-aos="fade-50"><?php echo get_sub_field('header'); ?></h3>
            <div class="grid-2 grid-1-m">
            <?php if( have_rows('icons') ): while ( have_rows('icons') ) : the_row(); ?>
            
                <div class="icons -pb-30" data-aos="fade-100">
                    <img src="<?php echo get_sub_field('icon')?>"/>
                    <p class="what-p"><?php echo get_sub_field('text')?></p>
                </div>
            
            <?php endwhile; endif; ?>
            </div>
            <div class="inline-buttons -mt-20">
                    <div class="oh-btn left-btn" data-aos="fade-200"><a href="<?php echo get_sub_field('btn1'); ?>">Nasza oferta</a></div>
                    <div class="stroke-btn" data-aos="fade-300"><a href="<?php echo get_sub_field('btn2'); ?>">Proces user experience</a></div>
                </div>
        </div>
    </div>

<?php endwhile; endif; ?>
<!-- WHAT END --->

<!-- USER EXPERIENCE --->
<section id="ux" class="user-exp container-1180 -mt-100">
    <div class="ta-center">
        <p class="workshop" data-aos="fade-up">Workshop</p>
        <h2 data-aos="fade-50">USER EXPERIENCE</h2>
        <p class="w-70p -m-0auto w-90p-xm" data-aos="fade-100">Pomagamy firmom kształtować propozycję wartości i rozwijać się poprzez doświadczenie UX projektowane w oparciu o badania klientów, analitykę i metryki biznesowe.</p>
    </div>

    <div class="first -mt-100 relative -mt-80-xs">
        <div class="absolute" data-aos="fade-up">
            <div class="signbg discbg"></div>
        </div>
        <?php
            $first = get_field('first');
                
            if( $first ): ?>
                <div class="grid-2 a-items-c zindex999 grid-1-l gap50-l">
                    <div class="img" data-aos="fade-up">
                        <img class="b-radius15 b-shadow" src="<?php echo esc_url( $first['img'] ); ?>" />
                    </div>
                    <div class="content -pl-50 -pl-0-l">
                        <img data-aos="fade-50" src="<?php echo esc_url( $first['icon'] ); ?>" />
                        <h4 class="yellow -pt-20" data-aos="fade-100"><?php echo ( $first['header'] ); ?></h4>
                        <p class="-pt-10" data-aos="fade-200"><?php echo ( $first['txt'] ); ?></p>
                    </div> 
                </div>
        <?php endif; ?>
    </div>

    <div class="second -mt-100 relative -mt-80-xs">
        <div class="absolute" data-aos="fade-up">
            <div class="signbg workbg"></div>
        </div>
        <?php
            $second = get_field('second');
                
            if( $second ): ?>
                <div class="grid-2 a-items-c zindex999 grid-1-l gap50-l">
                    <div class="img order-2 order-1-l" data-aos="fade-up">
                        <img class="b-radius15 b-shadow" src="<?php echo esc_url( $second['img'] ); ?>" />
                    </div>
                    <div class="content order-1 -pr-50 order-2-l -pr-0-l">
                        <img data-aos="fade-50" src="<?php echo esc_url( $second['icon'] ); ?>" />
                        <h4 class="orange -pt-20" data-aos="fade-100"><?php echo ( $second['header'] ); ?></h4>
                        <p class="-pt-10" data-aos="fade-200"><?php echo ( $second['txt'] ); ?></p>
                    </div> 
                </div>
        <?php endif; ?>
    </div>

    <div class="third -mt-100 relative -mt-80-xs">
        <div class="absolute" data-aos="fade-up">
            <div class="signbg wirebg"></div>
        </div>
        <?php
            $third = get_field('third');
                
            if( $third ): ?>
                <div class="grid-2 a-items-c zindex999 grid-1-l gap50-l">
                    <div class="img" data-aos="fade-up">
                        <img class="b-radius15 b-shadow" src="<?php echo esc_url( $third['img'] ); ?>" />
                    </div>
                    <div class="content -pl-50 -pl-0-l">
                        <img data-aos="fade-50" src="<?php echo esc_url( $third['icon'] ); ?>" />
                        <h4 class="jasmine -pt-20" data-aos="fade-100"><?php echo ( $third['header'] ); ?></h4>
                        <p class="-pt-10" data-aos="fade-200"><?php echo ( $third['txt'] ); ?></p>
                    </div> 
                </div>
        <?php endif; ?>
    </div>

    <div class="fourth -mt-100 relative -mt-80-xs">
        <div class="absolute" data-aos="fade-up">
            <div class="signbg uibg"></div>
        </div>
        <?php
            $fourth = get_field('fourth');
                
            if( $fourth ): ?>
                <div class="grid-2 a-items-c zindex999 grid-1-l gap50-l">
                    <div class="img order-2 order-1-l" data-aos="fade-up">
                        <img class="b-radius15 b-shadow" src="<?php echo esc_url( $fourth['img'] ); ?>" />
                    </div>
                    <div class="content order-1 -pr-50 order-2-l -pr-0-l">
                        <img data-aos="fade-50" src="<?php echo esc_url( $fourth['icon'] ); ?>" />
                        <h4 class="purple -pt-20" data-aos="fade-100"><?php echo ( $fourth['header'] ); ?></h4>
                        <p class="-pt-10" data-aos="fade-200"><?php echo ( $fourth['txt'] ); ?></p>
                    </div> 
                </div>
        <?php endif; ?>
    </div>

</section>

<!-- USER EXPERIENCE END --->



<?php
get_footer();
