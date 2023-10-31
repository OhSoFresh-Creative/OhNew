<?php
/**
* Template Name: Blog
 * Template Post Type: post
 */

get_header();
?>
<!--- TOP START --->



<?php $posttop = get_field('posttop');
if( $posttop ): ?>
<section class="about b-radius27" data-aos="fade-up" style="background-image:linear-gradient(0deg, rgba(27,32,44,1) 0%, rgba(27,32,44,0) 100%), linear-gradient(90deg, rgba(41,7,81,1) 0%, rgba(41,7,81,0) 100%), url('<?php echo esc_url( $posttop['img'] ); ?>'"><div class="container-1540 breadcrumbs-white relative zindex999" data-aos="fade-up">
    <div class="bread-items -mt-50">
        <?php ux_breadcrumbs(); ?>
    </div>
</div>
    <div class="container-1540 grid-2 col-gap100 items-c h-100vh -pt-80 -pb-100 gap50-xl grid-1-l">
        <div class="content">
            <h5 class="white -pb-10" data-aos="fade-50"><?php echo ( $posttop['subheader'] ); ?></h5>  
            <h2 class="white -pb-10" data-aos="fade-50"><?php echo ( $posttop['header'] ); ?></h2>
            <p class="white -pb-20 w-50p" data-aos="fade-100"><?php echo ( $posttop['txt'] ); ?></p>
            <div class="inline-buttons">
                <div class="oh-btn left-btn" data-aos="fade-200"><a href="<?php echo esc_url( $posttop['btn1']['url'] ); ?>"><?php echo esc_html( $posttop['btn1']['title'] ); ?></a></div>
                <div class="stroke-btn" data-aos="fade-200"><a href="<?php echo esc_url( $posttop['btn2']['url'] ); ?>"><?php echo esc_html( $posttop['btn2']['title'] ); ?></a></div>
            </div>
        </div>
    </div>
<?php endif; ?>
</section>
<!--- TOP END --->

<div class="grid-2 j-items-e main-img" data-aos="fade-100">
	<div></div>
	<?php the_post_thumbnail( 'thumb-in' ); ?>
</div>



<!-- PROJECT -->
<?php $project = get_field('project');

if( $project ): ?>
    <div class="project container-1540 grid-2 gap100 j-items-c gap50-xl grid-1-l zindex999">
        <div class="content">
            <h3 class="red -mb-10" data-aos="fade-50"><?php echo ( $project['header'] ); ?></h3>
            <p class="-mb-30" data-aos="fade-100"><?php echo ( $project['txt'] ); ?></p>
        </div>
        <div class="img a-self-s-l" data-aos="fade-400">
        </div>
    </div>
<?php endif; ?>

<section class="-mb-100">                
    <div class="container-1540" data-aos="fade-300">
    <ul class="what-list w-70p grid-2">
    <?php while ( have_rows( 'what' ) ) : the_row();
            $what = get_sub_field( 'what' );
        ?>
			
				<li><?php echo esc_html( $what ); ?></li>
			
        <?php endwhile; ?> </ul>
        </div>
</section>

<!-- PROJECT END --->

<!-- WYNIKI -->
<section class="results container-1540 grid-3 gap50 relative -pt-50">
	<div></div>
	<?php while ( have_rows( 'results' ) ) : the_row();
        $img = get_sub_field( 'img' );
        $header = get_sub_field( 'header' );
        $txt = get_sub_field( 'txt' );
        ?>

		<div class="box b-radius15 b-shadow zindex999">
			<div class="flex j-content-s">
				<img src="<?php echo esc_html( $img ); ?>"/>
				<p class="results"><?php echo esc_html( $header ); ?></p>
			</div>
			<p><?php echo esc_html( $txt ); ?></p>
		</div>
    <?php endwhile; ?> 

	<div class="absolute">
		<img src="https://ohsofresh.pl/wp-content/uploads/2022/11/wyniki.svg"/>
	</div>

</section>
<!-- WYNIKI END --->

<!-- WYZWANIE  -->
<?php $challenge = get_field('challenge');

if( $challenge ): ?>
    <div id="challenge" class="grid-2 gap100 items-c gap50-xl grid-1-l zindex999 -mt-100">
		<div class="img j-self-s-l" data-aos="fade-up">
            <img class="b-radius15 b-shadow" src="<?php echo esc_url( $challenge['img'] ); ?>" />
        </div>
        <div class="content w-80p j-self-s ">
            <h3 class="red -mb-10" data-aos="fade-50"><?php echo ( $challenge['header'] ); ?></h3>
            <p class="-mb-30" data-aos="fade-100"><?php echo ( $challenge['txt'] ); ?></p>
        </div>
        
    </div>
<?php endif; ?>

<!--- PROCESS --->

<section class="process -pt-100 -pb-100 -mt-100 -mb-100" data-aos="fade-100">
	<div class="container-1540">
	<h3 class="-pb-20">Proces</h3>
	<div class="grid-1-1-2">
	<div class="strategy">
		<p class="-pb-20 opacity-50">Strategy</p>
		<div class="w100">
			<p>Cele, KPI, Planowanie</p>
			<div class="process-line bg-yellow"></div>
		</div>
	</div>
	<div>
		<p class="-pb-20 opacity-50">Discovery</p>
		<div class="discovery w100">
			<p>Audyt UX</p>
			<div class="process-line bg-orange"></div>
		</div>
		<div class="discovery w200">
			<p>Wywiady pogłębione</p>
			<div class="process-line bg-orange"></div>
		</div>
		<div class="discovery w100">
			<p>Ścieżki użytkowników</p>
			<div class="process-line bg-orange"></div>
		</div>
	</div>
	<div class="">
		<p class="-pb-20 opacity-50">Definition</p>
		<div class="definition w50">
			<p>UX Design</p>
			<div class="process-line bg-purple"></div>
		</div>
		<div class="definition w170">
			<p>UI Design</p>
			<div class="process-line bg-purple"></div>
		</div>
		<div class="definition w140">
			<p>Prototypowanie</p>
			<div class="process-line bg-purple"></div>
		</div>
		<div class="definition w100">
			<p>Testy użyteczności</p>
			<div class="process-line bg-purple"></div>
		</div>
		<div class="definition w300">
			<p>Development</p>
			<div class="process-line bg-purple"></div>
		</div>
	</div>
	</div>
	</div>
</section>

<!--- PERSONAS --->

<section class="relative -pb-100">
	<div class="container-1540 grid-2 gap150">
		<div class="">
			<h3 class="-mb-30">Persony</h3>
			<p class="-mb-30">Celem projektu było wdrożenie rozwiązania ułatwiające zapis na kursy języka angielskiego. W związku z wieloma wyróżnienie wzorców zachowań użytkowników.</p>
			<img src="https://ohsofresh.pl/wp-content/uploads/2022/12/grupydocelowe.png"/>
		</div>
		<img src="https://ohsofresh.pl/wp-content/uploads/2022/12/user.svg"/>
	</div>
</section>

<!--- ARCHITEKTURA INFORMACJI --->

<section class="bg-dark -mt-100 -pt-100 -pb-100">
	<div class="container-1540">
		<h3 class="ta-center -pb-20">Architektura informacji</h3>
		<p class="ta-center -pb-70 w-50p -m-0auto">Celem projektu było wdrożenie rozwiązania ułatwiające zapis na kursy języka angielskiego. W związku z wieloma wyróżnienie wzorców zachowań użytkowników.</p>
	</div>
	<div class="ta-center">
		<img src="https://ohsofresh.pl/wp-content/uploads/2022/11/arch.svg">
	</div>
</section>

<!-- BADANIA  -->
<section class="badania relative -pt-150 -pb-150">
    <?php
        $badaniatop = get_field('badaniatop');
            
        if( $badaniatop ): ?>
            <div class="container-1540 grid-2 gap50 -mb-100">
                <div class="content">
                    <h3 class="-pb-20"><?php echo ( $badaniatop['header'] ); ?></h3>
                    <p class="" ><?php echo ( $badaniatop['txt'] ); ?></p>
                </div>
    		<img class="absolute" style="top:380px;" src="https://ohsofresh.pl/wp-content/uploads/2022/12/techniki.svg" />
            </div>
    <?php endif; ?>
	             
    <div class="carousel container-1540" data-flickity='{ "cellAlign": "left", "draggable": true, "contain": true }'>

    <?php while ( have_rows( 'techniki' ) ) : the_row();
                        $header = get_sub_field( 'header' );
                        $txt = get_sub_field( 'txt' );
						?>
    <div class="carousel-cell">
        <h6 class=""><?php echo esc_html( $header ); ?></h6>
        <p class=""><?php echo esc_html( $txt ); ?></p>
    </div>
    <?php endwhile; ?> 
    </div>
</section>
<!-- BADANIA END --->

<!--- UI --->

<section class="maestria-ui relative -pt-100">
	<div class="container-1540 grid-2 gap150">
		<div></div>
		<div class="w-70p -pt-100 j-self-e">
			<h3 class="-mb-30">User interface</h3>
			<p class="-mb-30">Mając na celu zapewnienie najlepszych wrażeń podczas korzystania z platformy zaprojektowaliśmy interfejs wspierający użytkownika na każdym etapie procesu zakupowego. Spójna wizualnie platforma daje poczucie swobody oraz ułatwia procesy poznawcze, dzięki czemu eksploracja całego sklepu staje się łatwa i intuicyjna. Wyróżniające się elementy “Call to action” wspierają komunikację sprzedażową oraz budują zaangażowanie użytkownika.</p>
		</div>
		
	</div>
	<div class="relative ta-right zindex999">
		<img class="ui" src="https://ohsofresh.pl/wp-content/uploads/2022/12/maestria_tmp.png"/>
	</div>
</section>

<!--- RESULT --->

<section class="result relative -mb-100">
	<div class="container-1540 relative zindex999 grid-2-1 gap150 -pt-100 -pb-100 a-items-c">
		<div>
			<h3 class="yellow -pb-20">Rezultat</h3>
			<p class="fs-24">Przejrzystość, prostota nawigacji, odpowiedź na potrzeby pasażerów i partnerów biznesowych - tak prezentuje się nowy serwis internetowy lotniska Ławica. Zaprojektowana od podstaw strona ułatwia dostęp do najważniejszych informacji o rozkładzie lotów oraz w atrakcyjny sposób przybliża użytkownikom usługi dostępne na lotnisku. 

Wynajem sali na spotkanie biznesowe, szybka rezerwacja parkingu czy zamówienie hotelu to tylko kilka klików! Pozytywne wrażenia użytkowników oraz zaangażowanie zespołu sprawia, że już kolejny rok dbamy o dalszy rozwój serwisu. </p>
		</div>
		<div>
			<div class="bg-dark box b-radius15 b-shadow zindex999 -mb-50">
				<div class="flex j-content-c">
					<img src="<?php echo esc_html( $img ); ?>"/>
					<p class="results"><?php echo esc_html( $header ); ?></p>
				</div>
				<p><?php echo esc_html( $txt ); ?></p>
			</div>
			<div class="box b-radius15 b-shadow zindex999 -mb-50">
				<div class="flex j-content-c">
					<img src="<?php echo esc_html( $img ); ?>"/>
					<p class="results"><?php echo esc_html( $header ); ?></p>
				</div>
				<p><?php echo esc_html( $txt ); ?></p>
			</div><div class="box b-radius15 b-shadow zindex999">
				<div class="flex j-content-c">
					<img src="<?php echo esc_html( $img ); ?>"/>
					<p class="results"><?php echo esc_html( $header ); ?></p>
				</div>
				<p><?php echo esc_html( $txt ); ?></p>
			</div>
		</div>
	</div>
	<img class="bg absolute" src="https://ohsofresh.pl/wp-content/uploads/2022/11/Wyniki.svg" />
	<div class="lightgrey-box"></div>
</section>

<!-- REALIZACJE  -->
<section class="works bg-dark -pt-100 -pb-100">
    <?php
        $works = get_field('works', 'option');
            
        if( $works ): ?>
            <div class="container-1540 grid-2 gap50 -mb-50">
                <div class="content">
                    <h3 class=""><?php echo ( $works['header'] ); ?></h3>
                </div>
                 <div class="oh-btn" data-aos="fade-300"><a href="<?php echo esc_url( $works['btn']['url'] ); ?>"><?php echo esc_html( $works['btn']['title'] ); ?></a></div>
            </div>
    <?php endif; ?>


 <div class="about_carousel offer-carousel container-1540">                
       <div class="carousel" data-flickity='{ "cellAlign": "left", "draggable": true, "contain": true }'>
    
        <?php while ( have_rows( 'workstabs', 'option' ) ) : the_row();
                            $img = get_sub_field( 'img' );
                            $header = get_sub_field( 'header' );
                            $txt = get_sub_field( 'txt' );
                            $link = get_sub_field( 'link' );
                                ?>
        <div class="carousel-cell">
            <div class="carousel-img">
                <img class="b-shadow b-radius15" src="<?php echo esc_html( $img ); ?>" />
            </div>
            <h5 class=""><?php echo esc_html( $header ); ?></h5>
            <p class=""><?php echo esc_html( $txt ); ?></p>
        </div>
        <?php endwhile; ?> 
        
        </div>
    </div>
</section>
<!-- REALIZACJE END --->

<!--- END PAGE --->

<script>
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          const square = entry.target.querySelector(".process-line");

          if (entry.isIntersecting) {
            square.classList.add("line-animation");
            return; // if we added the class, exit the function
          }

          // We're not intersecting, so remove the class!
          square.classList.remove("line-animation");
        });
      });

      let elements = document.querySelectorAll(".w50,.w80,.w100,.w140,.w170,.w200,.w300");
      for (let element of elements) {
        observer.observe(element);
      }
    </script>

	 <script>
var divisor = document.getElementById("divisor"),
slider = document.getElementById("slider");
function moveDivisor() { 
	divisor.style.width = slider.value+"%";
}
</script>

<!-- WYZWANIE END --->

<?php
get_footer();
