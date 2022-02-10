<?php
/* 
Template Name: Vorstand
*/

get_header(); ?>

<div class="mb-4 space-y-4 p-8 bg-white bg-opacity-90 rounded-2xl shadow-lg">
    <h1><?php the_title() ?></h1>


    <?php the_content() ?>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-16">

    <?php $post_objects = get_field('vorstandsmitglieder');
    if ($post_objects) : ?>
        <?php foreach ($post_objects as $post) : // variable must be called $post (IMPORTANT) 
        ?>
            <?php setup_postdata($post); ?>

            <?php get_template_part('template-parts/section', "person") ?>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
        ?>
    <?php endif; ?>

</div>


<?php
get_footer();
