<?php get_header(); ?>
<div class="bg-cover bg-center bg-no-repeat flex justify-center flex-col items-center py-28 text-white" style="background-image:url(<?php echo get_bloginfo('template_url')?>/assets/images/clientes.png)">
	<h1 class="text-3xl lg:text-6xl font-montserrat-alternate font-bold tracking-[1px] mb-2 text-center">
		Han confiado en nosotros
	</h1>
	<p class="text-base lg:text-xl font-light">
		Algunos de nuestros clientes.
	</p>
</div>
<section class="container mx-auto my-12 max-w-[980px]">
	<h2 class="text-3xl text-[#60726e] font-bold tracking-[1px] text-center mb-8">Han confiado en nosotros</h2>
	<ul class="text-center">
		<li class="inline-block">
			<a href="https://granarenamonticello.cl/" target="_blank" rel="noopener noreferrer">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/monticello.png" alt="monticello" width="180" loading="lazy">
			</a>
		</li>
		<li class="inline-block">
			<a href="https://dreams.cl/" target="_blank" rel="noopener noreferrer">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/dreams.png" alt="" width="180" loading="lazy">
			</a>
		</li>
		<li class="inline-block">
			<a href="http://capital-apart.santiago-chile-hotels.net/en/" target="_blank" rel="noopener noreferrer">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/capital-apart-h.png" alt="capital apart hotel" width="180" loading="lazy">
			</a>
		</li>
		<li class="inline-block">
			<a href="https://www.ubo.cl/" target="_blank" rel="noopener noreferrer">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/universidad-bernardo-o.png" alt="" width="180" loading="lazy">
			</a>
		</li>
		<li class="inline-block">
			<a href="https://todoproteccionchile.cl/" target="_blank" rel="noopener noreferrer">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/todo-proteccion.png" alt="" width="180" loading="lazy">
			</a>
		</li>
	</ul>
</section>

<!--Reviews-->
<section class="mx-auto container max-w-[780px] mt-24">
	<h2 class="text-3xl text-[#60726e] font-bold tracking-[1px] text-center mb-8">¿Qué dicen de nosotros?</h2>
	<div class="reviews-slider overflow-hidden">
		<ul class="swiper-wrapper">
			<li class="swiper-slide">
				<?php get_template_part('template-parts/comillas',null, ['class' => 'mb-4 mx-auto block'])?>
				<p class="text-center mb-4 text-[#4a5052]">
					“Hace tiempo estaba buscando una empresa que me fabricara las cortinas de mi nueva casa, cotice en muchos lugares pero la que mas se acomodo a mi presupuesto fue Sabelup, el asesor fue a mi casa, tomo las medidas y me asesoro en todo lo que yo necesitaba, fue la mejor solución. Tengo las cortinas hace 5 años y están como nuevas.”
				</p>
				<h4 class="text-[#60726e] text-center font-bold">CLAUDIA CAMBLOR</h4> 
				<p class="text-center text-[#4a5052]">Instalación cortinas Roller Duos</p>
			</li>
			<li class="swiper-slide">
				<?php get_template_part('template-parts/comillas',null, ['class' => 'mb-4 mx-auto block'])?>
				<p class="text-center mb-4 text-[#4a5052]">
					“Lo que más me gusto de Sabelup fue el tiempo que se demoraron en confeccionar mis productos , teníamos un evento y contábamos con tiempos muy acotados , ellos me solucionaron el problema en solo un par de días , y me fabricaron todos los manteles y servilletas que necesitábamos de manera urgente , aun estamos agradecidos y seguimos trabajando con ellos.”
				</p>
				<h4 class="text-[#60726e] text-center font-bold">JORGE ARRAU</h4> 
				<p class="text-center text-[#4a5052]">Productor de Eventos</p>
			</li>	
		</ul>
		<!-- <div class="swiper-pagination" id="swiper-reviews-pagination"></div> -->
		<div id="swiper-reviews-pagination" class="text-center my-8"></div>
	</div>
</section>

<!--Call to action -->
<section class="bg-fixed bg-cover bg-center" style="background-image: url(<?php echo get_bloginfo('template_url')?>/assets/images/fondo-necesitasayuda.jpg)">
	<div class="mx-auto container p-12 text-white max-w-[980px]">
		<h2 class="text-4xl font-bold font-montserrat-alternate mb-4">
			¿Necesitas apoyo para<br class="hidden lg:block"> un proyecto textil?
		</h2>
		<p class="mb-4">
			Te ayudamos a desarrollar variados productos textiles con <br class="hidden lg:block"> la mejor calidad y experiencia.
		</p>		
		<a href="<?php echo get_bloginfo('url')?>/contactanos" class="block bg-[#fdd1bd] text-[#60726e] px-4 py-3 uppercase tracking-[1px] text-sm font-semibold rounded-3xl hover:opacity-[0.7] w-max">
			CONTÁCTANOS
		</a>
	</div>
</section>

<?php
get_footer();