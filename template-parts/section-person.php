<div class="flex items-top items-center space-x-4 text-center bg-white shadow-lg rounded-2xl  p-4 ">
    <div class="rounded-lg overflow-hidden flex-none w-24 h-36 md:h-48 md:w-40  shadow-md">
        <img class="object-cover h-full w-full" src="<?php the_post_thumbnail_url(); ?>">
    </div>
    <div class="mx-auto w-full">
        <h3 class="font-medium leading-tight pb-1"><?php the_title(); ?></h3>

        <?php if (get_field('aufgabe')) : ?>
            <p class="font-light">
                <?php the_field('aufgabe'); ?>
            </p>
        <?php endif; ?>
        <?php if (get_field('mailadresse')) : ?>

            <a class="hover:text-blue text-black mt-4 block" href="mailto:#">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current w-4 h-4 mb-0.5 md:w-8 md:h-8 stroke-1 inline-block  " viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <polyline points="3 7 12 13 21 7" />
                </svg>
                <?php the_field('mailadresse'); ?>
            </a>

        <?php endif; ?>
    </div>
</div>