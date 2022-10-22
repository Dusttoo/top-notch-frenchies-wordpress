<?php get_header(); ?>
<div class="">
<?php 
    while(have_posts()) {
        the_post(); ?>
        <div class="">
            <h2 class=''><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>
            <div class="">
                <p>Posted by <?php the_author_posts_link() ?> on <?php the_time('n-j-y') ?> in <?php the_category(', ') ?> </p>
            </div>
            <div class=''>
                <?php the_excerpt() ?>
                <p><a class='btn btn--blue' href="<?php the_permalink() ?>">Continue Reading</a></p>
            </div>
        </div>
    <?php }
?>
</div>
<?php get_footer(); ?>