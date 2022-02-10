<?php get_header(); ?>

<div class="mb-4 space-y-4 p-8 bg-white bg-opacity-90 rounded-2xl shadow-lg">

  <h1 class="mb-8 font-semibold hypens"><?php the_title();  ?></h1>

  <section class="space-y-4 mb-8">
    <?php the_content(); ?>
  </section>

</div>

<?php

get_footer();
