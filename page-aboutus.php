<?php
/**
* Template Name: O nas
 */

get_header(); ?>

<!--- TOP START --->

<?php $top = get_field('top');
if( $top ): ?>
<section class="about b-radius27" data-aos="fade-up" style="background-image:linear-gradient(0deg, rgba(27,32,44,1) 0%, rgba(27,32,44,0) 100%), linear-gradient(90deg, rgba(41,7,81,1) 0%, rgba(41,7,81,0) 100%), url('<?php echo esc_url( $top['img'] ); ?>'"><div class="container-1540 breadcrumbs-white relative zindex999" data-aos="fade-up">
   
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

<!-- MORE  -->
<?php $more = get_field('more');

if( $more ): ?>
    <div class="more grid-2 gap100 j-items-c gap50-xl grid-1-l zindex999">
        <div class="content w-60p">
            <h3 class="red -mb-10" data-aos="fade-50"><?php echo ( $more['header'] ); ?></h3>
            <p class="-mb-30" data-aos="fade-100"><?php echo ( $more['txt'] ); ?></p>
        </div>
        <div class="img a-self-s-l" data-aos="fade-400">
            <img class="b-radius-left b-shadow" src="<?php echo esc_url( $more['img'] ); ?>" />
        </div>
    </div>
<?php endif; ?>
<!-- MORE END --->

<section id="aboutus" class="tabbed container-1540 -pt-100 -pt-80-l">

<tabs class="tabs" data-aos="fade-up">

    <div class="absolute line"><img src="https://ohsofresh.pl/wp-content/uploads/2022/11/line.svg" /></div>
    <div class="grid">
    <button class="tabs__item item1 active" style="--bgColorItem: #F49C00;" onclick="openTab('odkrywamy')">
        <svg class="icon icon1" viewBox="0 0 24 24" >
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>
        </svg>
        <p>Odkrywamy</p>
    </button>
    </div>

    <div class="grid">
    <button class="tabs__item item2" style="--bgColorItem: #EC3C0C;" onclick="openTab('planujemy')">
        <svg class="icon icon2" viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/><path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/>
        </svg>
        <p>Planujemy</p>
    </button>
    </div>

<div class="grid">
    <button class="tabs__item item4" style="--bgColorItem: #C51A62;" onclick="openTab('tworzymy')"> 
      <svg class="icon icon4" viewBox="0 0 24 24" >
        <path  d="M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1
          C3.9,4.4,4.4,3.9,5.1,3.9z"/>
        <path  d="M4.2,9.3h15.6"/>
        <path  d="M9.1,9.5v10.3"/>
      </svg>
        <p>Tworzymy</p>
    </button>
    </div>

<div class="grid">
    <button class="tabs__item item3" style="--bgColorItem: #A21AA5;" onclick="openTab('testujemy')">
      <svg class="icon icon3" viewBox="0 0 24 24">
   <line x1="4" y1="21" x2="4" y2="14"></line><line x1="4" y1="10" x2="4" y2="3"></line><line x1="12" y1="21" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="3"></line><line x1="20" y1="21" x2="20" y2="16"></line><line x1="20" y1="12" x2="20" y2="3"></line><line x1="1" y1="14" x2="7" y2="14"></line><line x1="9" y1="8" x2="15" y2="8"></line><line x1="17" y1="16" x2="23" y2="16"></line>
      </svg>
        <p>Testujemy</p>
    </button>
    </div>

<div class="grid">
    <button class="tabs__item item5" style="--bgColorItem: #6D00EE;" onclick="openTab('wdrazamy')">
        <svg class="icon icon5" viewBox="0 0 24 24">
		   <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line>
	    </svg>
        <p>Wdrażamy</p>
    </button>
    </div>

    <div class="tabs__border"></div>
    
  </tabs>

  <div class="svg-container">
    <svg viewBox="0 0 202.9 45.5" >
      <clipPath id="tabs" clipPathUnits="objectBoundingBox" transform="scale(0.0049285362247413 0.021978021978022)">
        <path  d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
          c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
          c9.2,3.6,17.6,4.2,23.3,4H6.7z"/>
      </clipPath>
    </svg>
  </div>

    <div id="odkrywamy" class="tab" data-aos="fade-100">
        <div class="grid-2 gap100 items-c gap50-xl grid-1-l">
        <?php
            $discover = get_field('discover');
            if( $discover ): ?>
                <img class="b-radius10 b-shadow" src="<?php echo ( $discover['img'] ); ?>"/>
                <div class="content">
                    <h6 class="yellow -pb-10"><?php echo ( $discover['header'] ); ?></h6>
                    <div class="" ><?php echo ( $discover['txt'] ); ?></div>
                </div> 
            <?php endif; ?>
        </div>
    </div>

    <div id="planujemy" class="tab" style="display:none" data-aos="fade-100">
        <div class="grid-2 gap100 items-c gap50-xl grid-1-l">
        <?php
            $define = get_field('define');
            if( $define ): ?>
                <img class="b-radius10 b-shadow" src="<?php echo ( $define['img'] ); ?>"/>
                <div class="content">
                    <h6 class="orange -pb-10"><?php echo ( $define['header'] ); ?></h6>
                    <div class="" ><?php echo ( $define['txt'] ); ?></div>
                </div> 
            <?php endif; ?>
        </div>
    </div>

    <div id="tworzymy" class="tab" style="display:none" data-aos="fade-100">
        <div class="grid-2 gap100 items-c gap50-xl grid-1-l">
            <?php
                $design = get_field('design');
                if( $design ): ?>
                <img class="b-radius10 b-shadow" src="<?php echo ( $design['img'] ); ?>"/>
                <div class="content">
                    <h6 class="pink -pb-10"><?php echo ( $design['header'] ); ?></h6>
                    <div class="" ><?php echo ( $design['txt'] ); ?></div>
                </div> 
            <?php endif; ?>
        </div>
    </div>

    <div id="testujemy" class="tab" style="display:none" data-aos="fade-100">
        <div class="grid-2 gap100 items-c gap50-xl grid-1-l">
            <?php
                $tests = get_field('tests');
                if( $tests ): ?>
                <img class="b-radius10 b-shadow" src="<?php echo ( $tests['img'] ); ?>"/>
                <div class="content">
                    <h6 class="jasmine -pb-10"><?php echo ( $tests['header'] ); ?></h6>
                    <div class="" ><?php echo ( $tests['txt'] ); ?></div>
                </div> 
            <?php endif; ?>
        </div>
    </div>

    <div id="wdrazamy" class="tab" style="display:none" data-aos="fade-100">
        <div class="grid-2 gap100 items-c gap50-xl grid-1-l">
            <?php
                $develop = get_field('develop');
                if( $develop ): ?>
                <img class="b-radius10 b-shadow" src="<?php echo ( $develop['img'] ); ?>"/>
                <div class="content">
                    <h6 class="purple -pb-10"><?php echo ( $develop['header'] ); ?></h6>
                    <div class="" ><?php echo ( $develop['txt'] ); ?></div>
                </div> 
            <?php endif; ?>
        </div>
    </div>
</section>

<!--- CECHY --->

<section class="container-1540 -pt-120 -pb-200 -pt-80-l -pb-80-l">
    <div class="adv flex j-content-s -pb-20 -pb-0-l grid-1-xm">
        <img data-aos="fade-up" class="b-radius15 b-shadow" src="https://ohsofresh.pl/wp-content/uploads/2022/11/1.jpg" />
        <div class="content1 w-35p a-self-e w-50p-2l a-self-c-l w-100p-xm">
            <h2 class="fs-28-xs -mb-10" data-aos="fade-100">Od początku do końca </h2>
            <p data-aos="fade-200">A nawet dłużej nasi Klienci mogą liczyć na nasze wsparcie. Jesteśmy ich sekundantami od koncepcji projektowej, poprzez cele biznesowe i dogłębne zrozumienie problemu, który z nimi rozwiązujemy. Nasze doświadczenie jest solidną podporą podczas tej współpracy.</p>
        </div>
    </div>

    <div class="adv adv2 flex j-content-e -pr-50 -pt-70-l -pr-0-l grid-1-xm">
        <img data-aos="fade-up" class="b-radius15 b-shadow order-2 order-1-xm" src="https://ohsofresh.pl/wp-content/uploads/2022/11/2.jpg" />
        <div class="content2 w-35p a-self-e order-1 zindex999 w-50p-2l a-self-c-l w-100p-xm order-2-xm">
            <h2 class="fs-28-xs -mb-10" data-aos="fade-100">Współpraca partnerska</h2>
            <p data-aos="fade-200">Tylko tworząc zgrany zespół z Klientem, jesteśmy w stanie wyjść naprzeciw jego oczekiwaniom. Pomysły naszych Klientów przekuwamy w innowacyjne realizacje w postaci aplikacji i serwisów internetowych. Budujemy relację partnerką, dbając o płynną wymianę informacji na każdym etapie realizacji. Taka współpraca jest przejrzysta i pozwala na sprawne dążenie do wspólnego celu.</p>
        </div>
    </div>

    <div class="adv adv2 flex j-content-s -pt-150 -pt-70-l grid-1-xm">
        <img data-aos="fade-up" class="b-radius15 b-shadow order-2 order-1-l" src="https://ohsofresh.pl/wp-content/uploads/2023/01/process.jpg" />
        <div class="content3 w-35p a-self-e order-1 zindex999 w-50p-2l a-self-c-l order-2-l w-100p-xm">
            <h2 class="fs-28-xs -mb-10" data-aos="fade-100">Działamy efektywnie</h2>
            <p data-aos="fade-200">Nastawieni na wymierne rezultaty wspieramy zarówno duże marki, jak i wyjątkowe start-upy. Zdobyte doświadczenie w wielu branżach pozwala nam tworzyć złożone rozwiązania cyfrowe. Wierzymy, że nasz wkład przyczynia się do zwiększenia wydajności biznesów, przynosząc zadowolenie naszym partnerom. Ponieważ Twój sukces to nasz sukces!</p>
        </div>
    </div>

</section>

<?php
get_footer();
