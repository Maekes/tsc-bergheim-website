<?php get_header(); ?>
<div class="mx-auto mb-8 p-4 lg:p-8 bg-white bg-opacity-90 rounded-2xl shadow-lg">



    <h1><?php post_type_archive_title() ?></h1>

    <?php if (is_user_logged_in()) { ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 ">

            <?php
            global $wp;
            $s_array = array('posts_per_page' => -1);  // Change to how many posts you want to display 
            $new_query = array_merge($s_array, (array) $wp->query_vars);

            // The Query
            $the_query = new WP_Query($new_query);
            if ($the_query->have_posts()) : ?>

                <?php

                while ($the_query->have_posts()) :
                    $the_query->the_post();
                ?>

                    <?php get_template_part('template-parts/section', 'archive-default'); ?>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>

    <?php } else { ?>


        <p>Tut uns leid, aber dieser Inhalt ist nur für Mitglieder bestimmt.</p>

    <?php  } ?>
</div>
<?php

get_footer();
