<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<div>
            <header class="py-8 bg-orange-10">
                <div class="container px-4 mx-auto">
                    <nav class="relative">
                        <div class="flex justify-between items-center">
                            <a class="text-lg font-medium" href="/">
                                <img class="w-1/4" src="https://i.imgur.com/YJIGdZU.png" alt="texas top notch frenchies logo" />
                            </a>
                            <div class="">
                                <button class="navbar-burger flex items-center p-3 rounded" >
                                    <FontAwesomeIcon class="text-3xl p-2 rounded text-white hover:text-orange-10 hover:bg-white" icon={faBars} />
                                </button>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- <div class="navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
                    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                    <nav class="relative flex flex-col py-6 px-6 w-full h-full bg-white border-r overflow-y-auto">
                        <div class="flex items-center mb-8">
                            <button class="navbar-close">
                                <svg class="h-6 w-6 text-gray-500 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div> -->
                        <div>
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'headerMenuLocation',
                            ));
                        ?>
                        </div>
                        <!-- <div class="mt-auto">
                            <p class="mt-6 mb-4 text-sm text-center text-gray-500">
                                <span>© 2022 All rights reserved.</span>
                            </p>
                        </div> -->
                    </nav>
                </div>
            </header>
        </div>

