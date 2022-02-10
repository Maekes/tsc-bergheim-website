<?php get_header(); ?>

<div class="max-w-screen-xl lg:flex">

	<div class="w-full lg:w-9/12 p-0 mb-8 mx-auto">


		<?php if (have_posts() && is_user_logged_in()) { ?>

			<?php
			while (have_posts()) :
				the_post();
			?>

				<?php get_template_part('template-parts/content', 'single'); ?>


			<?php endwhile; ?>

		<?php } else { ?>
			<p class="p-4 lg:p-6 bg-white shadow-lg rounded-lg">Tut uns leid, aber dieser Inhalt ist nur für Mitglieder bestimmt.</p>
		<?php } ?>

	</div>

</div>
<?php
get_footer();
