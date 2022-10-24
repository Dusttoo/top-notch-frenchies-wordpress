<?php 
    get_header(); 
    while(have_posts()) {
        the_post(); 
        returnTo('dog', 'Dogs')
        ?>
    
    <div class='p-10 flex-col'>
        <div class='p-8'>
        <section class="overflow-hidden text-gray-700 ">
        <div class="container px-5 py-2 mx-auto lg:pt-12 lg:px-32">
            <div class="flex flex-wrap -m-1 md:-m-2">
            <?php 
                $images = get_field('images');
                foreach($images as $image) { ?>
                <div class="flex flex-wrap w-1/3">
                    <div class="w-full p-1 md:p-2">
                        <img 
                        alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                        src="<?php echo $image['sizes']['dogThumbnail']; ?>"/>
                    </div>
                </div>
                <?php }
            ?>
            </div>
        </div>
        </section>
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


