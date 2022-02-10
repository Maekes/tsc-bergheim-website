<a id="post-<?php the_ID(); ?>" class="bg-white rounded-lg shadow overflow-hidden simple-scaling " href="<?php the_permalink(); ?>">
    <div class="flex-shrink-0 h-40 self-stretch w-full bg-cover bg-center " style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    </div>
    <div class="px-5 py-2">
        <span class="block text-2xl leading-tight font-medium text-blue "><?php the_title(); ?></span>
        <p class="text-xs text-gray-500 mb-2"><?php echo get_the_date(); ?></p>
        <div class="text-sm"> <?php the_excerpt(); ?></div>
    </div>
</a>