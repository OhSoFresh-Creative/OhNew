<?php
/**
* Template Name: Maestria
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

<!--- PERSONAS --->

<section class="relative">
	<div class="container-1540 grid-2 gap150 grid-1-l">
		<div class="">
			<h3 class="-mb-20" data-aos="fade-100">Persony</h3>
			<p class="-mb-30" data-aos="fade-200">Zrozumienie grupy docelowej było zasadniczym punktem realizacji założeń projektu, do czego posłużyły nam wzorce użytkowników w postaci Person.</p>
			<div class="grid gap30">
				<img data-aos="fade-300" src="https://ohsofresh.pl/wp-content/uploads/2023/03/per-1.svg"/>
				<img data-aos="fade-300" class="j-self-e" src="https://ohsofresh.pl/wp-content/uploads/2023/03/per-2.svg"/>
				<img data-aos="fade-300" src="https://ohsofresh.pl/wp-content/uploads/2023/03/per-3.svg"/>
			</div>
		</div>
		<img data-aos="fade-up" class="d-none-l" src="https://ohsofresh.pl/wp-content/uploads/2022/12/user.svg"/>
	</div>
</section>

<!--- ARCHITEKTURA INFORMACJI --->

<section class="bg-dark -mt-100 -pt-100 -pb-100" data-aos="fade-up">
	<div class="container-1540">
		<h3 class="ta-center -pb-20" data-aos="fade-50">Architektura informacji</h3>
		<p class="ta-center -pb-70 w-50p -m-0auto w-70p-xl w-100p-l" data-aos="fade-100">Użyteczna architektura informacji wpływa na pozytywne odczucia użytkownika, zadbaliśmy o uporządkowany układ i oznaczenia informacji na stronie.</p>
	</div>
	<div class="container-1540 gap50 grid-2 grid-1-xxm">
		<img data-aos="fade-200" src="https://ohsofresh.pl/wp-content/uploads/2023/01/apr1.png">
		<img data-aos="fade-300" class="-mt-80 -mt-0-xxm" src="https://ohsofresh.pl/wp-content/uploads/2023/01/apr2.png">
	</div>
</section>

<!-- BADANIA  -->
<section class="badania relative -pt-150 -pb-150" data-aos="fade-up">
    <?php
        $badaniatop = get_field('badaniatop');
            
        if( $badaniatop ): ?>
            <div class="container-1540 grid-2 gap50 -mb-100 grid-2-1-l grid-1-md">
                <div class="content">
                    <h3 class="-pb-20" data-aos="fade-100"><?php echo ( $badaniatop['header'] ); ?></h3>
                    <p class="" data-aos="fade-200"><?php echo ( $badaniatop['txt'] ); ?></p>
                </div>
    		<img data-aos="fade-50" class="absolute" style="top:380px;" src="https://ohsofresh.pl/wp-content/uploads/2022/12/techniki.svg" />
            </div>
    <?php endif; ?>
	             
    <div class="carousel container-1540" data-flickity='{ "cellAlign": "left", "draggable": true, "contain": true }'>

    <?php while ( have_rows( 'techniki' ) ) : the_row();
                        $header = get_sub_field( 'header' );
                        $txt = get_sub_field( 'txt' );
						?>
    <div class="carousel-cell" data-aos="fade-300">
        <h6 class=""><?php echo esc_html( $header ); ?></h6>
        <p class=""><?php echo esc_html( $txt ); ?></p>
    </div>
    <?php endwhile; ?> 
    </div>
</section>
<!-- BADANIA END --->

<!--- UI --->

<section class="maestria-ui relative -pt-100 -pt-50-xxl" data-aos="fade-up">
	<div class="container-1540 grid-2 gap150 gap50-xxl grid-1-l">
		<div class="d-none-xs"></div>
		<div class="w-70p -pt-100 j-self-e w-90p-1100 zindex999 -pt-0-2xl j-self-s-l -pt-0-xs">
			<h3 class="-mb-30" data-aos="fade-50">User interface</h3>
			<p class="-mb-30" data-aos="fade-100">Precyzyjny i efektywny proces projektowania User Experience, jak i UI Design zaowocował użytecznym i przyjaznym interfejsem.</p>
		</div>
		
	</div>
	<div class="apr-ui relative ta-right zindex999 zindex9-1100">
		<img data-aos="fade-400" class="ui" src="https://ohsofresh.pl/wp-content/uploads/2023/01/apr_ui.png"/>
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
