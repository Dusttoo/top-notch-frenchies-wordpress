<?php get_header(); ?>
<section class=''>
  <div class='flex justify-center items-center p-6'>
    <div>
        <h1 class="sm:mt-8 text-2xl lg:text-4xl lg:text-5xl font-semibold"><?php the_title(); ?></h1>
    </div>

    <div class="p-6">
    <?php 
        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) { ?>
            <div class="">
                <p>
                <a class="" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title() ?></span>
                </p>
            </div>
        <?php }
    ?>
      
      <?php 
      $testArray = get_pages(array(
        'child_of' => get_the_ID()
      ));
      if ($theParent or $testArray) { ?>
      <div class="">
        <h2 class=""><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent);?></a></h2>
        <ul class="">
          <?php 
            if ($theParent) {
                $findChildrenOf = $theParent;
            } else {
                $findChildrenOf = get_the_ID();
            }
            wp_list_pages(array(
                'title_li' => NULL,
                'child_of' => $findChildrenOf,
                'sort_column' => 'menu_order'
            ));
          ?>
        </ul>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="p-6">
      <?php the_content() ?>
    </div>
</section>
<?php get_footer(); ?>

