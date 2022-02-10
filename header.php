<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<script src="https://cdn.jsdelivr.net/npm/ie11-custom-properties@4.1.0/ie11CustomProperties.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50 text-gray-900 antialiased relative w-full min-h-screen font-sans text-gray-900 bg-gradient-to-br from-sky-50 to-sky-300'); ?>>


	<header class="max-w-screen-xl w-full mx-auto mt-4 lg:top-4 z-50 px-4 lg:px-24 flex max-h-screen">
		<nav class="relative overflow-hidden lg:overflow-visible w-full flex flex-col lg:flex-row lg:justify-between lg:items-center">

			<div class="flex items-center pl-2 lg:pl-0 space-x-2 cursor-pointer">
				<?php if (has_custom_logo()) { ?>
					<img class="h-24" src="<?php echo wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]; ?>" alt="">
					<a href="/" class="text-xl xl:text-2xl font-bold tracking-wide block py-6">
						<span class="text-blue">TSC</span> Bergheim e.V.
						<span class="block text-yellow text-sm font-semibold ml-1">Der Tauch-Sport-Club aus Bergheim</span>
					</a>
				<?php } else { ?>
					<a href="/" class="text-3xl xl:text-4xl font-bold tracking-wide ">
						<span class="text-blue">TSC</span> Bergheim e.V.
						<span class="block text-yellow text-sm font-semibold ml-1">Der Tauch-Sport-Club aus Bergheim</span>
					</a>
				<?php } ?>
			</div>


			<svg id="mobileMenuToggle" viewBox="0 0 20 20" class=" lg:hidden cursor-pointer inline-block w-6 h-6 absolute top-5 right-5 " version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
					<g id="icon-shape">
						<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
					</g>
				</g>
			</svg>


			<script>
				document.getElementById("mobileMenuToggle").onclick = () => {
					document.getElementById("primary-menu").classList.toggle("hidden")
				}
			</script>

			<?php
			wp_nav_menu(
				array(
					'container_id'    => 'primary-menu',
					'container_class' => 'hidden lg:flex lg:self-stretch lg:items-center overflow-y-auto lg:overflow-y-visible flex-1 lg:flex-initial shadow-inner lg:shadow-none',
					'menu_class'      => 'lg:flex lg:ml-4 lg:my-2 lg:self-stretch divide-y lg:divide-y-0 divide-gray-200 bg-white lg:bg-transparent',
					'theme_location'  => 'primary',
					'li_class'        => 'group',
					'fallback_cb'     => false,
				)
			);
			?>

		</nav>
	</header>

	<main id="content" class="site-content container mx-auto px-4 lg:px-24 pt-8 max-w-screen-xl ">


		<!-- Start introduction -->
		<?php if (is_front_page()) : ?>


			<!-- End introduction -->
		<?php endif; ?>