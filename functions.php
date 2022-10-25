<?php 
    function returnTo($page, $pageTitle) { ?>
        <div class="">
            <p>
                <a class="" href="<?php echo get_post_type_archive_link($page); ?>">
                <i class="fa fa-home" aria-hidden="true"></i> 
                <?php echo 'Back to ' . $pageTitle . ' -- ' ?></a> 
                <span class="">
                    <?php the_title() ?>
                </span>
            </p>
        </div>
    <?php }

    function DogPageHeader() {
        ?>
        <div class="">
        <?php returnTo('dog', 'Dogs') ?>
        </div>
        <h1 class='text-4xl text-center font-bold p-4'><?php the_title(); ?></h1>
    <?php }

    function DogTile() { ?>
    <a class='' href="<?php the_permalink() ?>">
        <div class='container bg-tan rounded border-solid border-4 border-orange-10 h-auto lg:w-64 sm:w-56 p-4 m-4 grid-cols-1 place-items-center hover:cursor-pointer hover:border-transparent'>
        <div class='rounded lg:w-56 bg-center bg-no-repeat bg-cover'>
        <img class='' src='<?php the_post_thumbnail_url('dogThumbnail') ?>'/>
        </div>
        <h2 class="text-center text-xl font-bold p-2"><?php the_title(); ?></h2>
        </div>
    </a>
    <?php }

    function topnotch_files() {
        wp_enqueue_script('main-topnotch-js', get_theme_file_uri('/build/index.js'), array('jquery'), 1.0, true);
        wp_enqueue_style('topnotch_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('topnotch_extra_styles', get_theme_file_uri('/build/index.css'));
        wp_enqueue_style('top_notch_tailwind_styles', get_stylesheet_uri());

        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    }
    add_action('wp_enqueue_scripts', 'topnotch_files');

    function topnotch_features() {
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
        register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
        register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('dogThumbnail', 260, 260, true);
        add_image_size('breedingThumbnail', 650, 650, true);

    }
    add_action('after_setup_theme', 'topnotch_features');
?>