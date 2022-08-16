<?php get_header(); ?>

<!--Slider-->
<div class="main-slide relative h-max-[700px] overflow-hidden">
	<ul class="swiper-wrapper">
		<li class="swiper-slide relative">
			<picture>
				<source media="(min-width: 829px)" srcset="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-1-desk.jpg">
				<source media="(min-width: 399px)" srcset="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-1-tab.jpg">
				<source media="(min-width: 150px)" srcset="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-1-mob.jpg">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-1-desk.jpg" alt="" class="object-cover object-center">
			</picture>
			<div class="absolute w-full h-full top-0 left-0 flex justify-center items-center text-center text-white flex-col px-6 py-4" style="background: linear-gradient(90deg, rgba(253,209,189,0.8) 0%, rgba(96,114,110,0.8) 100%);">
				<h2 class="text-4xl lg:text-7xl font-montserrat-alternate font-bold tracking-[2.5px] mb-1">Lorem ipsum dolor sit.</h2>
				<p class="text-base lg:text-[20px] mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="#" class="text-[#fdd1bd]">A, quisquam!</a></p>		
				<a href="#" class="block bg-[#fdd1bd] text-[#60726e] px-4 py-3 uppercase tracking-[1px] text-sm font-semibold rounded-3xl hover:opacity-[0.7]">Lorem, ipsum dolor.</a>
			</div>
		</li>
		<li class="swiper-slide relative">
			<picture>
				<source media="(min-width: 829px)" srcset="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-2-desk.jpg">
				<source media="(min-width: 399px)" srcset="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-2-tab.jpg">
				<source media="(min-width: 150px)" srcset="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-2-mob.jpg">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-2-desk.jpg" alt="" class="object-cover object-center">
			</picture>
			<div class="absolute w-full h-full top-0 left-0 flex justify-center items-center text-center text-white flex-col px-6 py-4" style="background: linear-gradient(90deg, rgba(253,209,189,0.8) 0%, rgba(96,114,110,0.8) 100%);">
				<h2 class="text-4xl lg:text-7xl font-montserrat-alternate font-bold tracking-[2.5px] mb-1">Lorem ipsum dolor sit.</h2>
				<p class="text-base lg:text-[20px] mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="#" class="text-[#fdd1bd]">A, quisquam!</a></p>		
				<a href="#" class="block bg-[#fdd1bd] text-[#60726e] px-4 py-3 uppercase tracking-[1px] text-sm font-semibold rounded-3xl hover:opacity-[0.7]">Lorem, ipsum dolor.</a>
			</div>
		</li>
		<li class="swiper-slide relative">
			<picture>
				<source media="(min-width: 829px)" srcset="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-3-desk.jpg">
				<source media="(min-width: 399px)" srcset="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-3-tab.jpg">
				<source media="(min-width: 150px)" srcset="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-3-mob.jpg">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/banners/Ban-3-desk.jpg" alt="" class="object-cover object-center">
			</picture>
			<div class="absolute w-full h-full top-0 left-0 flex justify-center items-center text-center text-white flex-col px-6 py-4" style="background: linear-gradient(90deg, rgba(253,209,189,0.8) 0%, rgba(96,114,110,0.8) 100%);">
				<h2 class="text-4xl lg:text-7xl font-montserrat-alternate font-bold tracking-[2.5px] mb-1">Lorem ipsum dolor sit.</h2>
				<p class="text-base lg:text-[20px] mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="#" class="text-[#fdd1bd]">A, quisquam!</a></p>		
				<a href="#" class="block bg-[#fdd1bd] text-[#60726e] px-4 py-3 uppercase tracking-[1px] text-sm font-semibold rounded-3xl hover:opacity-[0.7]">Lorem, ipsum dolor.</a>
			</div>
		</li>
	</ul>
	<div class="swiper-pagination"></div>
	<div class="swiper-button-prev"></div>
  	<div class="swiper-button-next"></div>
</div>
<!-- seccion de texto y confianza-->
<div class="container mx-auto my-8 max-w-[980px]">
	<!--Text-->
	<section class="text-center my-16">
		<h1 class="text-2xl text-[#60726e] font-bold tracking-[1px] mb-2">Cortinaje, mantelería, ropa de cama, terraza, uniformes y más</h1>
		<p class="text-xl text-[#60726e] tracking-[1px]">Te asoramos para lleves a cabo tus proyectos con gran calidad</p>
	</section>
	<!--Container - Grid-->
	<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 my-16">
		<div class="flex flex-col gap-y-4 justify-center items-center text-center px-4">
			<?php get_template_part('template-parts/calidad', null, null)?>
			<h3 class="font-montserrat-alternate text-[#60726e] font-bold tracking-[1px] text-2xl">Calidad</h3>
			<p class="text-[#60726e]">
				de materia prima para fabricar nuestros productos textiles. 
			</p>
		</div>
		<div class="flex flex-col gap-y-4 justify-center items-center text-center px-4">
			<?php get_template_part('template-parts/experiencia', null, null)?>
			<h3 class="font-montserrat-alternate text-[#60726e] font-bold tracking-[1px] text-2xl">Experiencia</h3>
			<p class="text-[#60726e]">
				de más de 10 años en el mundo textil y de confección.
			</p>
		</div>
		<div class="flex flex-col gap-y-4 justify-center items-center text-center px-4">
			<?php get_template_part('template-parts/despacho', null, null)?>
			<h3 class="font-montserrat-alternate text-[#60726e] font-bold tracking-[1px] text-2xl">Despachos</h3>
			<p class="text-[#60726e]">
				a todo Chile previa coordinación.
			</p>
		</div>
		<div class="flex flex-col gap-y-4 justify-center items-center text-center px-4">
			<?php get_template_part('template-parts/atencion', null, null)?>
			<h3 class="font-montserrat-alternate text-[#60726e] font-bold tracking-[1px] text-2xl">Atención</h3>
			<p class="text-[#60726e]">
				Personalizada y de gran compromiso con tus requerimientos.
			</p>
		</div>
	</section>
</div>

<!--Grid-->
<section class="mb-16">
	<h2 class="text-3xl text-[#60726e] font-bold tracking-[1px] text-center mt-12 mb-8">Servicios</h2>
	<div>
		<ul class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 grid-servicios">
			<li class="flex flex-col group uno">
				<div class="h-[50%] overflow-hidden">
					<img src="<?php echo get_bloginfo('template_url')?>/assets/images/s-cortinas.jpg" alt="servicio de cortinas" class="object-cover object-center aspect-square">
				</div>
				<div class="h-[50%] flex flex-col justify-center p-4 bg-[#60726e] text-white group-hover:bg-[#fdd1bd] group-hover:text-white transition-all duration-500 ease-in-out">
					<h3 class="text-xl xl:text-2xl text-white font-bold font-montserrat-alternates mb-2 xl:mb-2 leading-none">Cortinas</h3>
					<p class="mb-2 xl:mb-6 text-xs xl:text-base font-light">Tradicionales, visillos, cortinas verticales, roller duo...</p>
					<a href="<?php echo get_bloginfo('url')?>/servicios/cortinas" class="text-xs xl:text-base text-[#fdd1bd] group-hover:text-[#60726e] font-light">VER MÁS &#10132;</a>
				</div>
			</li>
			<li class="flex flex-col group dos">
				<div class="h-[50%] flex flex-col justify-center p-4 bg-[#60726e] text-white group-hover:bg-[#fdd1bd] group-hover:text-white transition-all duration-500 ease-in-out">
					<h3 class="text-xl xl:text-2xl text-white font-bold font-montserrat-alternates mb-2 xl:mb-2 leading-none">Mantelería</h3>
					<p class="mb-2 xl:mb-6 text-xs xl:text-base font-light">Nuestra confección simplifica y se enfoca en el área de la hotelería…</p>
					<a href="<?php echo get_bloginfo('url')?>/servicios/manteleria" class="text-xs xl:text-base text-[#fdd1bd] group-hover:text-[#60726e] font-light">VER MÁS &#10132;</a>
				</div>
				<div class="h-[50%] overflow-hidden">
					<img src="<?php echo get_bloginfo('template_url')?>/assets/images/s-manteleria.jpg" alt="servicio de mantelería" class="object-cover object-center aspect-square">
				</div>
			</li>
			<li class="flex flex-col tres group">
				<div class="h-[50%] overflow-hidden">
					<img src="<?php echo get_bloginfo('template_url')?>/assets/images/s-ropacama.jpg" alt="servicio de ropa de cama" class="object-cover object-center aspect-square">
				</div>
				<div class="h-[50%] flex flex-col justify-center p-4 bg-[#60726e] text-white group-hover:bg-[#fdd1bd] group-hover:text-white transition-all duration-500 ease-in-out">
					<h3 class="text-xl xl:text-2xl text-white font-bold font-montserrat-alternates mb-2 xl:mb-2 leading-none">Ropa de cama</h3>
					<p class="mb-2 xl:mb-6 text-xs xl:text-base font-light">Buscamos enfocarnos al área Hotelera, Apart Hotel, Hogar…</p>
					<a href="<?php echo get_bloginfo('url')?>/servicios/ropa-de-cama" class="text-xs xl:text-base text-[#fdd1bd] group-hover:text-[#60726e] font-light">VER MÁS &#10132;</a>
				</div>
			</li>
			<li class="flex flex-col cuatro group">
				<div class="h-[50%] flex flex-col justify-center p-4 bg-[#60726e] text-white group-hover:bg-[#fdd1bd] group-hover:text-white transition-all duration-500 ease-in-out">
					<h3 class="text-xl xl:text-2xl text-white font-bold font-montserrat-alternates mb-2 xl:mb-2 leading-none">Uniformes</h3>
					<p class="mb-2 xl:mb-6 text-xs xl:text-base font-light">Tenemos la solución para su equipo de trabajo en distintos tipos de rubro…</p>
					<a href="<?php echo get_bloginfo('url')?>/servicios/uniformes" class="text-xs xl:text-base text-[#fdd1bd] group-hover:text-[#60726e] font-light">VER MÁS &#10132;</a>
				</div>
				<div class="h-[50%] overflow-hidden">
					<img src="<?php echo get_bloginfo('template_url')?>/assets/images/s-uniformes.jpg" alt="uniformes" class="object-cover object-center aspect-square">
				</div>
			</li>
			<li class="flex flex-col cinco group">
				<div class="h-[50%] overflow-hidden">
					<img src="<?php echo get_bloginfo('template_url')?>/assets/images/s-terraza.jpg" alt="servicio de cortinas" class="object-cover object-center aspect-square">
				</div>
				<div class="h-[50%] flex flex-col justify-center p-4 bg-[#60726e] text-white group-hover:bg-[#fdd1bd] group-hover:text-white transition-all duration-500 ease-in-out">
					<h3 class="text-xl xl:text-2xl text-white font-bold font-montserrat-alternates mb-2 xl:mb-2 leading-none">Terraza</h3>
					<p class="mb-2 xl:mb-6 text-xs xl:text-base font-light">Siempre se busca y logra aprovechar bien los espacios…</p>
					<a href="<?php echo get_bloginfo('url')?>/servicios/terraza" class="text-xs xl:text-base text-[#fdd1bd] group-hover:text-[#60726e] font-light">VER MÁS &#10132;</a>
				</div>
			</li>
			<li class="flex flex-col seis group">
				<div class="h-[50%] flex flex-col justify-center p-4 bg-[#60726e] text-white group-hover:bg-[#fdd1bd] group-hover:text-white transition-all duration-500 ease-in-out">
					<h3 class="text-xl xl:text-2xl text-white font-bold font-montserrat-alternates mb-2 xl:mb-2 leading-none">Arriendo Mantelería</h3>
					<p class="mb-2 xl:mb-6 text-xs xl:text-base font-light">Brindamos la solución con un stock de productos…</p>
					<a href="<?php echo get_bloginfo('url')?>/servicios/arriendo-manteleria" class="text-xs xl:text-base text-[#fdd1bd] group-hover:text-[#60726e] font-light">VER MÁS &#10132;</a>
				</div>
				<div class="h-[50%] overflow-hidden">
					<img src="<?php echo get_bloginfo('template_url')?>/assets/images/s-arriendo.jpg" alt="arriendo manteleria" class="object-cover object-center aspect-square">
				</div>
			</li>
		</div>
	</div>
</section>

<!--Reviews-->
<div class="mx-auto container max-w-[780px]">
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
</div>

<!--Call to action -->
<section class="bg-fixed bg-cover bg-center" style="background-image: url(<?php echo get_bloginfo('template_url')?>/assets/images/fondo-necesitasayuda.jpg)">
	<div class="mx-auto container p-12 text-white max-w-[980px]">
		<h2 class="text-4xl font-bold font-montserrat-alternate mb-4">
		¿Necesitas apoyo para<br class="hidden lg:block"> un proyecto textil?
		</h2>
		<p class="mb-4">
		Te ayudamos a desarrollar variados productos textiles con <br class="hidden lg:block"> la mejor calidad y experiencia.
		</p>		
		<a href="<?php echo get_bloginfo('url')?>/contactanos" class="block bg-[#fdd1bd] text-[#60726e] px-4 py-3 uppercase tracking-[1px] text-sm font-semibold rounded-3xl hover:opacity-[0.7] w-max">CONTÁCTANOS</a>
	</div>
</section>

<!--Companys-->

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
<?php
get_footer();
