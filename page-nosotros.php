<?php get_header(); ?>
<section class="bg-cover bg-center" style="background-image:url(<?php echo get_bloginfo('template_url')?>/assets/images/sobre-nosotros.png)">
	<div class="py-24 lg:py-28">
		<h1 class="text-center text-white font-montserrat-alternate text-4xl lg:text-7xl font-bold tracking-[2.5px]">Sobre Nosotros</h1>
	</div>
</section>
<div class="container mx-auto max-w-[980px]">
	<section class="my-8">
		<div class="grid grid-cols-1 lg:grid-cols-4 text-center lg:text-left gap-4 items-center mb-8">
			<div class="text-[#4a5052] text-base lg:text-xl font-medium col-span-3">
				Nuestra empresa esta inserta en el mercado nacional hace más de 10 años, contamos con experiencia en confección de cortinas, mantelería y todo tipo textiles, hemos fabricamos a grandes cadenas de hoteles y empresas en general. Trabajamos con telas importadas y nacionales, pero siempre enfocándonos en la calidad de nuestros productos. 
			</div>
			<div class="p-0 lg:p-4">
				<div class="bg-[#60726e] hidden lg:block text-white text-center font-montserrat-alternates col-span-1 py-4">
					<p class="text-4xl font-bold">Más de</p>
					<p class="text-4xl text-[#fdd1bd] font-bold">10 años</p>
					<p class="text-2xl font-light">en el mercado</p>
				</div>
			</div>
		</div>
		<hr class="border-b-[0.5px] border-t-0 border-[#4a5052]/50">
	</section>
	<section class="my-8">
		<p class="text-center lg:text-left text-[#4a5052] text-base lg:text-xl mb-4 font-light">
			Sabemos que con el tiempo el mundo textil ha tenido grandes renovaciones y nos hemos adaptado a este cambio, con nuestro equipo estamos en constante actualización para estar a la vanguardia de lo que nuestros clientes van necesitando y estar acorde a las nuevas tendencias a nivel mundial.
		</p>
		<p class="text-center lg:text-left text-[#4a5052] text-base lg:text-xl mb-4 font-light">
			Fabricamos todo tipo de Cortinas tradicionales, Roller dúo, Roller blacout , carpas, cierres de terrazas (PVC), mantelería en general , Ropa de cama , pieceras ,  confección de uniformes, bordados , estampados ,  etc.  En general nos adecuamos a lo que nuestros clientes nos soliciten fabricando a medida todo tipo de textiles. 
		</p>
		<p class="text-center lg:text-left text-[#4a5052] text-base lg:text-xl mb-8 font-light">
			También contamos con el servicio de arriendo de mantelería para eventos particular y/o empresas.
		</p>
	</section>	
	<hr class="border-b-[0.5px] border-t-0 border-[#4a5052]/50">
	<section class="my-8">
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
			<div>
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/nosotros-cortinas.png" alt="cortinas rollers" loading="lazy">
			</div>
			<div>
				<p class="text-center lg:text-right text-[#4a5052] text-base lg:text-xl font-medium">
				Actualmente en Sabelup te ofrecemos un servicio de asesoría personalizada  sin costos adicionales, nuestros asesores de venta van directamente donde deseas instalar nuestros productos y te presentan todas las alternativas disponibles. 
				</p>
			</div>
		</div>
	</section>
</div>
<div class="my-12">
	<img src="<?php echo get_bloginfo('template_url')?>/assets/images/linea-curvas.png" alt="lineas curvas" loading="lazy" class="w-full object-cover object-center">
</div>
<!--Container - Grid-->
<div class="container mx-auto max-w-[980px]">
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

<section class="container mx-auto my-12">
	<h2 class="text-3xl text-[#60726e] font-bold tracking-[1px] text-center mb-8">Han confiado en nosotros</h2>
	<ul class="text-center">
		<li class="inline-block">
			<a href="#">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/monticello.png" alt="monticello" width="180" loading="lazy">
			</a>
		</li>
		<li class="inline-block">
			<a href="#">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/dreams.png" alt="" width="180" loading="lazy">
			</a>
		</li>
		<li class="inline-block">
			<a href="#">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/capital-apart-h.png" alt="capital apart hotel" width="180" loading="lazy">
			</a>
		</li>
		<li class="inline-block">
			<a href="#">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/universidad-bernardo-o.png" alt="" width="180" loading="lazy">
			</a>
		</li>
		<li class="inline-block">
			<a href="#">
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/todo-proteccion.png" alt="" width="180" loading="lazy">
			</a>
		</li>
	</ul>
</section>

<?php
get_footer();
