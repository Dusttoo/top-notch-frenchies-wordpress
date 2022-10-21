<?php 
    get_header(); 
    while(have_posts()) {
        the_post(); ?>
    
    <div class="sm:container w-full h-full sm:px-4 mx-auto mb-12 text-center">
        <h1 class="sm:mt-8 text-2xl lg:text-4xl lg:text-5xl font-semibold"><?php the_title() ?></h1>
        <p> <?php the_content() ?> </p>
    </div>

<?php } get_footer(); ?>

