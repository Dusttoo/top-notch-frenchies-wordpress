<?php get_header(); ?>
<div class="container mx-auto p-10 m-10">
  <h1 class='text-4xl text-center font-bold p-4'>Dogs</h1>
  <div class='grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-2 place-items-center'>
  <a href="<?php echo site_url('/males') ?>">Males</a>
  <a href="<?php echo site_url('/females') ?>">Females</a>
  <a href="<?php echo site_url('/productions') ?>">Productions</a>
  <a href="<?php echo site_url('/retired') ?>">Retired</a>
  </div>
</div>

<?php get_footer(); ?>