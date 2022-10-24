<?php get_header(); ?>
<div class="container mx-auto p-10 m-10">
<div class="">
<?php returnTo('dog', 'Dogs') ?>
</div>
  <h1 class='text-4xl text-center font-bold p-4'><?php the_title(); ?></h1>
  <div class='grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 place-items-center'>
    
    <?php 
    $allAvailable = new WP_Query(array(
        'post_type' => 'litter',
        'posts_per_page' => -1,
      ));
        while($allAvailable->have_posts()) {
            $allAvailable->the_post(); 
            DogTile();

        }
    ?>
  </div>
</div>

<?php get_footer(); ?>