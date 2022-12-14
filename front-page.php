<?php get_header(); ?>
<section class="relative md:pb-24 lg:pb-56 overflow-hidden bg-orange-10">

        <div class="relative pt-12 pb-32 md:pb-64 bg-white">

          <div class="sm:container w-full h-full sm:px-4 mx-auto mb-12 text-center">

            <h1 class="sm:mt-8 text-2xl lg:text-4xl lg:text-5xl font-semibold">Welcome to Texas Top Notch Frenchies</h2>

            <div class="md:hidden">
            <div class="flex p-4">
              <div class="w-3/5 px-4 mt-12">
                <img class="h-40 w-full rounded-lg object-cover" src="https://ttnf.s3.us-east-2.amazonaws.com/084.JPG" alt="" /></div>
              <div class="w-3/5 px-4 mt-12">
                <img class="h-40 w-full rounded-lg object-cover" src="https://ttnf.s3.us-east-2.amazonaws.com/067.JPG" alt="" /></div>
            </div>
          </div>

            <p class="sm:max-w-3xl sm:mx-auto mb-12 sm:text-xl text-gray-500 p-4">
            <?php 
            $allAvailable = new WP_Query(array(
              'post_type' => 'litter',
              'posts_per_page' => -1,
            ));
            if($allAvailable) { ?>
            <h2> Currently Available </h2>
            <div class='flex'>
            <?php
              while($allAvailable->have_posts()) {
                $allAvailable->the_post(); 
                DogTile();
    
            } ?>
            </div>
            <?php wp_reset_postdata();
            } else {
              $allBreedings = new WP_Query(array(
                'post_type' => 'breeding',
                'posts_per_page' => -1,
              ));
              if($allBreedings) { ?>
              <h2> Upcoming Breedings </h2>
              <div class='flex'>
              <?php
                while($allBreedings->have_posts()) {
                  $allBreedings->the_post(); 
                  DogTile();
              } 
              }
            } ?>
            </div>
            <?php wp_reset_postdata();
            the_content() 
            ?>
            </p>

          </div>
          <div class="hidden md:block absolute inset-x-0 mt-24 -mx-4">
            <div class="flex p-4">
              <div class="w-3/5 px-4">
                <img class="h-40 w-full rounded-lg object-cover" src="https://ttnf.s3.us-east-2.amazonaws.com/054.JPG" alt="" /></div>
              <div class="w-3/5 px-4 mt-12">
                <img class="h-40 w-full rounded-lg object-cover" src="https://ttnf.s3.us-east-2.amazonaws.com/037.JPG" alt="" /></div>
              <div class="w-1/5 flex-shrink-0 px-4">
                <img class="h-64 w-full rounded-lg object-cover" src="https://ttnf.s3.us-east-2.amazonaws.com/029.JPG" alt="" /></div>
              <div class="w-3/5 px-4 mt-12">
                <img class="h-40 w-full rounded-lg object-cover" src="https://ttnf.s3.us-east-2.amazonaws.com/009.JPG" alt="" /></div>
              <div class="w-3/5 px-4">
                <img class="h-40 w-full rounded-lg object-cover" src="https://ttnf.s3.us-east-2.amazonaws.com/026.JPG" alt="" /></div>
            </div>
          </div>

        </div>
      </section>
<?php get_footer() ?>

