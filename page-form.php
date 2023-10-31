<?php
/**
* Template Name: Form
 */

get_header('contact'); ?>

<div class="container-1540 breadcrumbs-white relative zindex999" data-aos="fade-up">
    <div class="bread-items -mt-50">
        
    </div>
</div>

<!--- CONTACT START --->
<section class="contact " data-aos="fade-up">
    <div class="contact-wrapper container-1540 grid-2 col-gap140 -pt-120 -pb-80 gap50-xl grid-1-l gap30-l -pt-80-l">
        <div class="contact-content a-self-c -pt-120-l">
            <h2 class="header white -pb-30 -pb-20-l w-80p w-100p-xl" data-aos="fade-up">Porozmawiajmy</h2>
            <p class="phone fs-24 -mb-10"><a class="white" href="tel:500370348">+48 500 370 348</a></p>
            <p class="mail fs-24"><a class="white" href="mailto:info@ohsofresh.pl">info@ohsofresh.pl</a></p> 
            <div class="so-icons flex -mt-40">
                <a href="https://www.facebook.com/OhSoFreshCreative/" target="_blank" rel="noopener"><img class="b-radius27" src="https://ohsofresh.pl/wp-content/uploads/2022/12/facebook.svg" /></a>
                <a href="https://www.instagram.com/ohsofresh.creative/" target="_blank" rel="noopener"><img class="b-radius27" src="https://ohsofresh.pl/wp-content/uploads/2022/12/instagram.svg" /></a>
                <a href="https://www.linkedin.com/company/ohsofresh/" target="_blank" rel="noopener"><img class="b-radius27" src="https://ohsofresh.pl/wp-content/uploads/2022/12/linkedin.svg" /></a>
            </div>
        </div>
        <div class="contact-form" data-aos="fade-400">
            <div>
            <h5 class="yellow -mb-10">Napisz do nas</h5>
            <p class="-mb-30">Wypełnij formularz, a my skontaktujemy się w ciągu kilku godzin!</p>
            <div class="form">
                <?php echo apply_shortcodes( '[contact-form-7 id="4155" title="Zapytaj o wycenę"]' ); ?>
            </div>
            </div>
        </div>
    </div>
</section>

<!--- CONTACT END --->

<?php
get_footer();

