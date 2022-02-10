<?php get_header(); ?>

<section class='flex justify-between max-w-screen-xl mx-auto md:space-x-16 flex-col-reverse md:flex-row md:py-8'>
  <div class='space-y-4'>

    <h1 class='text-4xl lg:text-6xl font-bold tracking-tighter lg:leading-tight'>
      Tauchen ist mehr als nur den Kopf
      <span class='text-black'>
        unter Wasser zu stecken
      </span>
    </h1>
    <p class='text-lg font-normal text-gray-600 leading-relaxed'>
      Wir bringen Tauchanfängern und ausgebildeten
      Tauchern die Faszination des Tauchsports näher.
    </p>
    <div class='lg:flex space-y-4 space-x-0 lg:space-y-0 lg:space-x-4 w-full items-center'>
      <a href="/kontakt/" class='button-primary w-full text-center text-lg block'>
        Mitglied werden
      </a>
      <a href="/ueber-uns/" class='button-second w-full text-center text-lg block'>
        Über unseren Verein
      </a>
    </div>
  </div>

  <div class="max-w-sm lg:max-w-md mx-auto">
    <img class='drop-shadow-2xl mx-auto w-full mb-8 md:mb-0' src='https://tscbergheim.medienschaffer.de/wp-content/uploads/2021/12/startseite_bubble.png' alt='' />
  </div>
</section>



<section class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 my-16'>
  <?php $the_query = new WP_Query('posts_per_page=3'); ?>

  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <?php get_template_part('template-parts/section', "frontpage"); ?>

  <?php
  endwhile;
  wp_reset_postdata();
  ?>

</section>

<section class="mb-4 space-y-4 p-8 bg-white rounded-lg shadow">

  <?php the_content(); ?>


</section>

<?php

get_footer();
