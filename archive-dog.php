<?php get_header(); ?>
    <div class="">
    <?php 
    $allDogs = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'dog'
      ));
        while(have_posts()) {
            the_post(); ?>
            <div class="">
                <div class="">
                  <h5 class=""><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                  <p><?php echo wp_trim_words(get_the_content(), 18); ?>  <a href="<?php the_permalink() ?>" class="">Learn more</a></p>
                </div>
              </div>
       <?php }
    ?>
    </div>

<?php get_footer(); ?>