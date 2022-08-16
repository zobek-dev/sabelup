
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-[#60726e] pt-16 text-white" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>
	<div class="container mx-auto">
		<div class="grid lg:grid-cols-5 gap-4 mb-12">
			<div>
				<img src="<?php echo get_bloginfo('template_url')?>/assets/images/logo-sabelup-footer.png" alt="sabelup tu espacio textil" width="170" height="150" loading="lazy">
			</div>
			<div>
				<ul>
					<li>
						<a href="<?php echo get_bloginfo('url')?>" class="block mb-4 hover:underline hover:underline-offset-2">Inicio</a>
					</li>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/nosotros" class="block mb-4 hover:underline hover:underline-offset-2">Sobre Sabelup</a>
					</li>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/clientes" class="block mb-4 hover:underline hover:underline-offset-2">Clientes</a>
					</li>
				</ul>
			</div>
			<div>
				<h4><a href="<?php echo get_bloginfo('url')?>/servicios" class="block mb-1 hover:underline hover:underline-offset-2">Servicios Textiles</a></h4>
				<ul>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/servicios/cortinas" class="block mb-1 text-[#fdd1bd] hover:underline hover:underline-offset-2">Cortinas</a>
					</li>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/servicios/manteleria" class="block mb-1 text-[#fdd1bd] hover:underline hover:underline-offset-2">Manteles</a>
					</li>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/servicios/ropa-de-cama" class="block mb-1 text-[#fdd1bd] hover:underline hover:underline-offset-2">Ropa de cama</a>
					</li>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/servicios/uniformes" class="block mb-1 text-[#fdd1bd] hover:underline hover:underline-offset-2">Uniformes</a>
					</li>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/servicios/terrazas" class="block mb-1 text-[#fdd1bd] hover:underline hover:underline-offset-2">Terrazas</a>
					</li>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/servicios/arriendo-manteleria" class="block mb-1 text-[#fdd1bd] hover:underline hover:underline-offset-2">Arriendo mantelería</a>
					</li>
				</ul>
			</div>
			<div>
				<ul>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/contactanos" class="block mb-4 hover:underline hover:underline-offset-2">Contáctanos</a>
					</li>
					<li>
						<a href="<?php echo get_bloginfo('url')?>/faqs" class="block mb-4 hover:underline hover:underline-offset-2">FAQS</a>
					</li>
				</ul>
			</div>
			<div>
				<h4 class="mb-4 block text-[#fdd1bd]">¿Necesitas ayuda?</h4>
				<ul>
					<li>
						<a href="mailto:contacto@sabelup.cl" class="block mb-4 hover:underline hover:underline-offset-2">contacto@sabelup.cl</a>
					</li>
					<li>
						<a href="#" class="block mb-4 hover:underline hover:underline-offset-2">+569 77799000</a>
					</li>
					<li class="block mb-4">
						Santiago, Chile
					</li>
				</ul>
				<ul>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="text-center text-[10px] pt-4 pb-8">
			Diseñado por <a href="https://vanilla.cl" rel="noreferrer noopener" target="_blank" class="font-bold hover:underline hover:underline-offset-2">Vanilla</a> &copy; <?php echo date_i18n( 'Y' );?> 
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
