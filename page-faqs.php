<?php get_header(); ?>
<div class="bg-cover bg-center bg-no-repeat flex justify-center flex-col items-center py-28 text-white" style="background-image:url(<?php echo get_bloginfo('template_url')?>/assets/images/faqs.png)">
	<h1 class="text-3xl lg:text-6xl font-montserrat-alternate font-bold tracking-[1px] mb-2">Preguntas frecuentes</h1>
	<p class="text-base lg:text-xl font-light">Queremos responder todas tus dudas.</p>
</div>
<div class="container mx-auto max-w-[980px] my-8">
	<section>
		<ul>
			<li>
				<h3 class="py-4 px-6 font-bold text-[#60726e] tracking-[1px] bg-[#e4e8e6]">
					¿Cuánto tiempo se demoran en fabricar los productos?
				</h3>
				<p class="px-6 pt-4 pb-10 text-[#4a5052] text-sm bg-[#fcfcfc]">
					En general depende de cuantos productos sean, pero en general nos demoramos entre 12-15 días hábiles . Siempre lo conversamos con el cliente y llegamos a un acuerdo que sea el mejor para ambas partes.
				</p>
			</li>
			<li>
				<h3 class="py-4 px-6 font-bold text-[#60726e] tracking-[1px] bg-[#e4e8e6]">
					¿Debo abonar para mandar hacer mis productos? 
				</h3>
				<p class="px-6 pt-4 pb-10 text-[#4a5052] text-sm bg-[#fcfcfc]">
					Si, generalmente pedimos un abono del 50 % del total del presupuesto y el saldo lo solicitamos contra entrega.	
				</p>
			</li>
			<li>
				<h3 class="py-4 px-6 font-bold text-[#60726e] tracking-[1px] bg-[#e4e8e6]">
					¿Cómo puedo solicitar una cotización? 
				</h3>
				<p class="px-6 pt-4 pb-10 text-[#4a5052] text-sm bg-[#fcfcfc]">
					Nos puedes contactar a nuestro whatsapp directamente o contamos con correo electrónico y formulario de contacto , de esa forma coordinamos una visita a tu domicilio o empresa para tomar las medidas de lo que necesites y en un plazo de 24-48 hr enviamos el presupuesto.
				</p>
			</li>
			<li>
				<h3 class="py-4 px-6 font-bold text-[#60726e] tracking-[1px] bg-[#e4e8e6]">
					¿Tiene algún costo la visita para cotización? 
				</h3>
				<p class="px-6 pt-4 pb-10 text-[#4a5052] text-sm bg-[#fcfcfc]">
					Visita gratis dentro del área metropolitana,  tomamos medidas y llevamos muestras para que revise el cliente lo que requiera.
				</p>
			</li>
		</ul>
	</section>
	<section class="my-12">
		<h3 class="text-[#60726e] font-montserrat-alternate font-bold text-3xl text-center mb-4">¿Aún tienes dudas?</h3>
		<a href="<?php echo get_bloginfo('url')?>/contactanos" class="block bg-[#fdd1bd] text-[#60726e] px-4 py-3 uppercase tracking-[1px] text-sm font-semibold rounded-3xl hover:opacity-[0.7] w-max mx-auto">CONTÁCTANOS</a>
	</section>	
</div>

<?php
get_footer();