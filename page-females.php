<?php get_header(); ?>
<div class="container mx-auto p-10 m-10">
  <h1 class='text-4xl text-center font-bold p-4'><?php the_title(); ?></h1>
  <div class='grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 place-items-center'>
    
    <?php 
    $allDogs = new WP_Query(array(
        'post_type' => 'dog',
        'posts_per_page' => -1,
      ));
        while($allDogs->have_posts()) {
            $allDogs->the_post(); 
            if(get_field('gender')[0] == 'Female') {
        ?>
        <a class='' href="<?php the_permalink() ?>">
          <div class='container bg-tan rounded border-solid border-4 border-orange-10 h-auto lg:w-64 sm:w-56 p-4 m-4 grid-cols-1 place-items-center hover:cursor-pointer hover:border-transparent'>
          <!-- <img src="<?php echo get_field('images') ?>"></img> -->
            <div class='rounded h-96 lg:w-56 bg-center bg-no-repeat bg-cover' style="background-image: url(<?php echo get_field('images') ?>)">
            </div>
            <h2 class="text-center text-xl font-bold p-2"><?php the_title(); ?></h2>
          </div>
        </a>
      <?php 
            };
        }
    ?>
  </div>
</div>

<?php get_footer(); ?>