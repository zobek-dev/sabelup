<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200;300;500;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
  <style>
    [x-cloak] {
      display: none !important;
    }
  </style>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased font-montserrat'); ?>>

  <?php do_action('tailpress_site_before'); ?>

  <div id="page" class="min-h-screen flex flex-col">

    <?php do_action('tailpress_header'); ?>
    <div class="bg-[#60726e]">
      <div class="container mx-auto">
        <div title="barra de anuncio" class=" text-white text-sm py-2 flex justify-end gap-x-4">
          <a href="mailto:contacto@sabelup.cl" class="hidden lg:block">
            contacto@sabelup.cl
          </a>
          <a href="#" target="blank" class="flex items-center gap-x-1">
            +56 977799000 <?php get_template_part('template-parts/whatsapp', null, ['width' => '16', 'height' => '16']) ?>
          </a>
        </div>
      </div>
    </div>

    <header class="sticky top-0 left-0 w-full border-b border-[#aab2af] bg-white  z-[99]">
      <div class="mx-auto container">
        <div class="flex justify-between items-center">
          <div itemscope itemtype="http://schema.org/Organization">
            <a href="<?php echo get_bloginfo('url') ?>" itemprop="url" title="labelup">
              <?php get_template_part('template-parts/sabelup-logo', null, null) ?>
            </a>
          </div>
          <!--mobile-button-->

          <button aria-label="Toggle del menú" id="primary-menu-toggle" aria-expanded="false" class="lg:hidden">
            <?php get_template_part('template-parts/burger', null, ['class' => '', 'width' => '26', 'height' => '26']) ?>
            <?php get_template_part('template-parts/close', null, ['class' => 'hidden', 'width' => '26', 'height' => '26']) ?>
          </button>

          <!--navigation-->
          <?php
          wp_nav_menu(
            array(
              'container_id'    => 'primary-menu',
              'container_class' => 'menu-navigation',
              'menu_class'      => 'nav',
              'theme_location'  => 'primary',
              'li_class'        => 'nav-item',
              'link_class' => 'nav-link',
              'walker' => new tailpress_Alpine_Walker_Nav_Menu(), // custom walker
              'fallback_cb'     => false,
            )
          );
          ?>
        </div>
      </div>
    </header>

    <div id="content" class="site-content flex-grow">
      <main>