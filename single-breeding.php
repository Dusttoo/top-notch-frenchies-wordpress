<?php get_header(); 
while(have_posts()) {
    the_post(); ?>
<div class="container mx-auto p-10 m-10">
<div class="">
<?php returnTo('dog', 'Dogs') ?>
</div>
  <h1 class='text-4xl text-center font-bold p-4'><?php the_title(); ?></h1>
  <div class='flex-col items-center'>
    <img class="rounded-lg" src="<?php the_post_thumbnail_url('dogThumbnail') ?>"/>
    <?php
    the_content();
    $sireLink = get_permalink(get_field('sire'));
    $damLink = get_permalink(get_field('dam'));
    $sire=get_the_title(get_field('sire'));
    $dam=get_the_title(get_field('dam'));
    ?>
    <div class="p-4 text-center">
        <a class="text-orange-10 hover:text-black" href="<?php echo $sireLink ?>"><?php echo $sire ?></a>
        X
        <a class="text-orange-10 hover:text-black" href="<?php echo $damLink ?>"><?php echo $dam ?></a>
    </div>
  </div>
</div>
<?php } get_footer(); ?>

