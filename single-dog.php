<?php 
    get_header(); 
    while(have_posts()) {
        the_post(); ?>


    <div class='p-10 flex-col'>
        <img class="h-56 rounded-lg" src="<?php echo get_field('images') ?>"/>
        <div class='p-8'>
            <h1 class='text-center text-3xl'><?php the_title(); ?></h1>
            <p class='text-center'><?php the_content() ?></p>
        </div>
        <div class='flex items-center justify-center'>
            <div>
                <a href="<?php echo get_field('pedigree_link') ?>" target="_blank" rel="noreferrer">Pedigree</a>
            </div>
        </div>
    </div>

   <?php }
   get_footer();
   ?>