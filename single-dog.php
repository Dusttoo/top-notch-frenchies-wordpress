<?php 
    get_header(); 
    while(have_posts()) {
        the_post(); ?>

    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
            <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('dog'); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> 
            All Dogs</a> 
            <span class="metabox__main">
                <?php the_title() ?>
            </span>
        </p>
    </div>
    <div class='p-10 flex-col'>
        <img class="h-56 rounded-lg" src="<?php the_post_thumbnail_url() ?>"/>
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