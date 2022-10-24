<?php get_header(); ?>
<div class="container mx-auto p-10 m-10">
  <?php DogPageHeader(); ?>
  <div class='grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 place-items-center'>
    <?php 
    $allDogs = new WP_Query(array(
        'post_type' => 'dog',
        'posts_per_page' => -1,
      ));
      while($allDogs->have_posts()) {
          $allDogs->the_post(); 
          if(get_field('gender')[0] == 'Male') {
            DogTile();
          };
      }
    ?>
  </div>
</div>
<?php get_footer(); ?>