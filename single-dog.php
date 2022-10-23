<?php 
    get_header(); 
    while(have_posts()) {
        the_post(); ?>
    <div class="">
    <div class="">
        <p>
            <a class="" href="<?php echo get_post_type_archive_link('dog'); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> 
            Dogs Home</a> 
            <span class="">
                <?php the_title() ?>
            </span>
        </p>
    </div>

        <div class=''>
        <?php 
        ?>
            <img src="<?php echo get_field('images')?>"/>
           <p> <?php echo get_field('gender')[0] ; ?> </p>
            <p> <?php echo get_field('description') ; ?> </p>

        </div>
    </div>
   <?php }
   get_footer();
   ?>