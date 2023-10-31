<?php
/**
* Template Name: Britannia
 * Template Post Type: post
 */

get_header();
?>
<!--- TOP START --->

<?php $posttop = get_field('posttop');
if( $posttop ): ?>
<section class="about b-radius27" data-aos="fade-up" style="background-image:linear-gradient(0deg, rgba(27,32,44,1) 0%, rgba(27,32,44,0) 100%), linear-gradient(90deg, rgba(41,7,81,1) 0%, rgba(41,7,81,0) 100%), url('<?php echo esc_url( $posttop['img'] ); ?>'"><div class="container-1540 breadcrumbs-white relative zindex999" data-aos="fade-up">
    <div class="bread-items -mt-50">
        
    </div>
</div>
    <div class="container-1540 grid-2 col-gap100 items-c h-100vh -pt-80 -pb-100 gap50-xl grid-1-l">
        <div class="content">
            <h5 class="white -pb-10" data-aos="fade-50"><?php echo ( $posttop['subheader'] ); ?></h5>  
            <h2 class="white -pb-10" data-aos="fade-50"><?php echo ( $posttop['header'] ); ?></h2>
            <p class="white -pb-20 w-70p w-100p-xl" data-aos="fade-100"><?php echo ( $posttop['txt'] ); ?></p>
            <div class="inline-buttons">
                <div class="oh-btn left-btn" data-aos="fade-200"><a href="<?php echo esc_url( $posttop['btn1']['url'] ); ?>"><?php echo esc_html( $posttop['btn1']['title'] ); ?></a></div>
                <div class="stroke-btn" data-aos="fade-200"><a target="_blank" href="<?php echo esc_url( $posttop['btn2']['url'] ); ?>"><?php echo esc_html( $posttop['btn2']['title'] ); ?></a></div>
            </div>
        </div>
    </div>
<?php endif; ?>
</section>
<!--- TOP END --->

<div class="grid-2 j-items-e main-img grid-1-l j-items-s-l" data-aos="fade-100">
	<div></div>
	<?php the_post_thumbnail( 'thumb-in' ); ?>
</div>

<!-- PROJECT -->
<?php $project = get_field('project');

if( $project ): ?>
    <div id="project" class="project container-1540 grid-2 gap100 j-items-c gap50-xl grid-1-l zindex999">
        <div class="content">
            <h3 class="red -mb-10" data-aos="fade-50"><?php echo ( $project['header'] ); ?></h3>
            <p class="-mb-30" data-aos="fade-100"><?php echo ( $project['txt'] ); ?></p>
        </div>
    </div>
<?php endif; ?>

<section class="-mb-100">                
    <div class="container-1540" data-aos="fade-300">
    <ul class="what-list w-70p grid-2 w-100p-2l grid-1-xxm">
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
	
	<?php while ( have_rows( 'results' ) ) : the_row();
        $img = get_sub_field( 'img' );
        $header = get_sub_field( 'header' );
        $txt = get_sub_field( 'txt' );
        ?>

		<div class="box b-radius15 b-shadow zindex999" data-aos="fade-200">
			<div class="flex j-content-s a-items-e">
				<img src="<?php echo esc_html( $img ); ?>"/>
				<p class="results"><?php echo esc_html( $header ); ?></p>
			</div>
			<p><?php echo esc_html( $txt ); ?></p>
		</div>
    <?php endwhile; ?> 

	<div class="absolute">
		<img data-aos="fade-up" src="https://ohsofresh.pl/wp-content/uploads/2022/11/wyniki.svg"/>
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
        <div class="content w-80p j-self-s  w-100p-l -pl-40-l -pr-40-l">
            <h3 class="red -mb-10" data-aos="fade-50"><?php echo ( $challenge['header'] ); ?></h3>
            <p class="" data-aos="fade-100"><?php echo ( $challenge['txt'] ); ?></p>
        </div>
        
    </div>
<?php endif; ?>

<!--- PROCESS --->

<section class="process -pt-100 -pb-100 -mt-100 -mb-100" data-aos="fade-100">
	<div class="container-1540">
	<h3 class="-pb-20">Proces</h3>
	<div class="grid-1-1-2 grid-1-l">
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

<!--- AUDIT --->

<section class="container-1540">
	<h3 class="ta-center -pb-20" data-aos="fade-up">Audyt User experience</h3>
	<p class="ta-center -pb-40 w-50p -m-0auto w-70p-xl w-100p-l" data-aos="fade-100">Na potrzeby projektu przeprowadziliśmy warsztaty kreatywne, określając problemy związane z zapisami na kursy języka angielskiego.</p>
	<div class="test">
	<div id="comparison" data-aos="fade-200">
	<figure>
		<div id="divisor"></div>
	</figure>
	<input type="range" min="0" max="100" value="50" id="slider" oninput="moveDivisor()">
	</div>
	</div>
</section>

<!--- INTERVIEWS --->

<section class="interviews relative -mt-100 -mb-100" data-aos="fade-up">
	<div class="container-1540 relative zindex999 grid-3-2 gap150 -pt-220 -pb-220 a-items-c gap50-l -pt-120-xxm -pb-120-xxm grid-1-xxm">
		<div>
			<h3 class="yellow -pb-20" data-aos="fade-100">Wywiady z użytkownikami</h3>
			<p data-aos="fade-200">Wykorzystując przemyślane scenariusze wywiadów pogłębionych (In-depth Interviews) nasz zespół UX, przeprowadził serię spotkań z użytkownikami. Ankietowani dzielili się z nami swoimi przemyśleniami odnośnie do samych zajęć, ale również opiniami na temat procesu wyboru i zapisu na kursy. </p>
		</div>
		<div data-aos="fade-300">
			<div class="bg-yellow b-radius15 b-shadow dark interview-box -mb-40">
				<b class="fs-46 dark">01</b>
				<p class="dark">Zaprojektowaliśmy i wybraliśmy kilka wydajnych scenariuszy wywiadów pogłębionych przeprowadzonych z przedstawicielami wybranej grupy docelowej.</p>
			</div>
			<div class="bg-yellow b-radius15 b-shadow dark interview-box">
				<b class="fs-46 dark">02</b>
				<p class="dark">Zgromadziliśmy odpowiednie dane jakościowe, co pozwoliło nam, otrzymać jasny i żywy obraz opinii użytkowników, jako podsumowanie po przeprowadzeniu wywiadów.</p>
			</div>
		</div>
	</div>
	<img class="interview-sign absolute" data-aos="fade-50" src="https://ohsofresh.pl/wp-content/uploads/2022/11/wnioski.svg" />
	<div class="grey-box"></div>
</section>

<!--- MOBILE FIRST --->

<section>
	<div class="container-1540">
		<h3 class="ta-center -pb-20" data-aos="fade-up">USer Flow & mobile first</h3>
		<p class="ta-center -pb-70 w-70p -m-0auto w-100p-l" data-aos="fade-100">Podczas realizacji zwróciliśmy szczególną uwagę na zaprojektowanie płynnego i intuicyjnego przepływu użytkowników (User Flow) na potrzeby wersji mobilnej.</p>
	</div>
	<div data-aos="fade-200" class="ta-center">
		<img class="mobile-first" src="https://ohsofresh.pl/wp-content/uploads/2022/11/flow.svg">
	</div>
</section>

<!--- WIREFRAMES --->

<section class="bg-dark -mt-100 -mb-100 -pt-100 -pb-100">
	<div class="container-1540">
		<div class="grid-2 gap50 -pb-70 grid-1-xm gap10-xm -pb-50-xm">
			<div class="content">
				<h3 class="" data-aos="fade-up">Wireframes</h3>
			</div>
				<div data-aos="fade-100">
				<p>Przemyślany układ elementów serwisu, takich jak: tekst, grafiki, menu, buttony został zaprojektowany, kładąc nacisk na tym, co najważniejsze, na strukturze, funkcjonalnościach i sposobie działania, czyli na usability i user experience projektowanego rozwiązania.</p>
				</div>
		</div>
		<div class="grid-3-2 gap50 grid-1-xxm" data-aos="fade-200">
			<img src="https://ohsofresh.pl/wp-content/uploads/2023/03/brit-wire1.png">
			<img src="https://ohsofresh.pl/wp-content/uploads/2023/03/brit-wire2.png">
		</div>
		<div class="grid-3-2 gap50 -mt-50 grid-1-xxm" data-aos="fade-200">
			<img src="https://ohsofresh.pl/wp-content/uploads/2023/03/brit-wire3.png">
			<img src="https://ohsofresh.pl/wp-content/uploads/2023/03/brit-wire4.png">
		</div>
	</div>
</section>

<!--- UI --->

<section class="britannia-ui -pb-100">
	<div class="container-1540">
		<h3 class="ta-center -pb-20" data-aos="fade-up">User interface</h3>
		<p class="ta-center -pb-70 w-70p -m-0auto w-100p-l" data-aos="fade-100">W konsultacji z Klientem, stworzyliśmy przejrzysty i przyjemny w odbiorze interfejs użytkownika, pozwalający na łatwy dostęp do informacji oraz wybór odpowiedniego kursu języka angielskiego.</p>
	</div>
	<div class="ta-center" data-aos="fade-200">
		<img src="https://ohsofresh.pl/wp-content/uploads/2022/11/britannia-ui.png">
	</div>
</section>

<!--- RESULT --->

<section class="result relative">
	<div class="container-1540 relative zindex999 grid-2-1 gap150 -pt-100 -pb-100 a-items-c grid-2-1100 gap-50-1100 grid-1-xxm">
		<div>
			<h3 class="yellow -pb-20" data-aos="fade-up">Rezultat</h3>
			<div class="" data-aos="fade-50"><?php the_field('res_txt'); ?></div>
		</div>
		<div class="">
			<?php while ( have_rows( 'results_bottom' ) ) : the_row();
			$img = get_sub_field( 'img' );
			$header = get_sub_field( 'header' );
			$txt = get_sub_field( 'txt' );
			?>
			<div class="bg-dark box b-radius15 b-shadow zindex999 -mb-20" data-aos="fade-200">
				<div class="flex j-content-s a-items-e">
					<img src="<?php echo esc_html( $img ); ?>"/>
					<p class="results"><?php echo esc_html( $header ); ?></p>
				</div>
				<p><?php echo esc_html( $txt ); ?></p>
			</div>
		
    	<?php endwhile; ?> 
		</div>
	</div>
	<img data-aos="fade-100" class="bg absolute" src="https://ohsofresh.pl/wp-content/uploads/2022/11/Wyniki.svg" />
</section>

<!-- REALIZACJE  -->
<section class="works bg-dark -pt-100 -pb-100">
    <?php
        $works = get_field('works');
            
        if( $works ): ?>
            <div class="container-1540 grid-2 gap50 -mb-50 grid-1-xl gap30-xl">
                <div class="content">
                    <h3 class="" data-aos="fade-100"><?php echo ( $works['header'] ); ?></h3>
                </div>
                 <div class="oh-btn" data-aos="fade-200"><a href="<?php echo esc_url( $works['btn']['url'] ); ?>"><?php echo esc_html( $works['btn']['title'] ); ?></a></div>
            </div>
    <?php endif; ?>


 <div class="about_carousel offer-carousel container-1540">                
       <div class="carousel" data-flickity='{ "cellAlign": "left", "draggable": true, "contain": true }'>
    
        <?php while ( have_rows( 'workstabs' ) ) : the_row();
                            $img = get_sub_field( 'img' );
                            $header = get_sub_field( 'header' );
                            $txt = get_sub_field( 'txt' );
                            $link = get_sub_field( 'link' );
                                ?>
        <div class="carousel-cell" data-aos="fade-300">
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
