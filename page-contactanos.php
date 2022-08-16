<?php get_header(); ?>

<div class="bg-cover bg-center bg-no-repeat flex justify-center flex-col items-center py-28 text-white" style="background-image:url(<?php echo get_bloginfo('template_url')?>/assets/images/contactanos.png)">
	<h1 class="text-4xl lg:text-6xl font-montserrat-alternate font-bold tracking-[1px] mb-2">
		Contáctanos
	</h1>
	<p class="text-base lg:text-xl font-light">
		¿Quieres desarrollar un proyecto textil?
	</p>
</div>

<div class="container mx-auto my-8 max-w-[980px]">
	<div class="grid grid-cols-1 lg:grid-cols-2 items-center contact-grid">
		<div class="py-8 px-4 lg:py-8 lg:px-8 rounded-xl border contact-form">
			<?php echo apply_shortcodes('[contact-form-7 id="56" title="Form sabelup"]'); ?>
		</div>
		<div class="mt-0 mb-8 lg:mt-8 lg:px-8 contact-text">
			<h2 class="text-[#60726e] font-montserrat-alternate font-bold text-3xl mb-4">
				Escríbenos o contáctanos.
			</h2>
			<p class="text-[#4a5052] font-light mb-4">
				Si requieres un proyecto textil o tienes preguntas, no dudes en contactarnos y te responderemos a la brevedad.		
			</p>
			<a href="mailto:contacto@sabelup.cl" class="block text-[#4a5052] hover:underline hover:underline-offset-4 group"><span class="text-[#fdd1bd] group-hover:text-[#4a5052]">&#10132;</span>&nbsp;contacto@sabelup.cl</a>
			<a href="tel:+56977799000" class="block text-[#4a5052] hover:underline hover:underline-offset-4 group"><span class="text-[#fdd1bd] group-hover:text-[#4a5052]">&#10132;</span>&nbsp;+569 77799000</a>
			<p class="text-[#4a5052]"><span class="text-[#fdd1bd]">&#10132;</span>&nbsp;Santiago, Chile</p>
			<h3 class="my-4 font-montserrat-alternate text-[#60726e] font-bold">Siguenos en:</h3>
			<ul>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
</div>

<?php
get_footer();