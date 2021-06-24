<?php

/**
 * The template for displaying Home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fpsBaseTailwind
 */

get_header(); ?>

<!-- Hero Header -->
<?php while (have_posts()) : the_post(); ?>

    <div class="content-area top-bar md:mt-[113px]">
        <div class="container m-auto ">
            <!-- Three columns -->
            <div class="flex content-center justify-center h-12 mb-0 mb-2">
                <h1 class="flex items-center text-yellow-700 foo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, unde.</h1>

                <button class="px-2 blue_button">Test</button>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap items-center justify-center p-24">
        <div class="relative flex-shrink-0 max-w-xs m-6 overflow-hidden bg-orange-300 rounded-lg shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative flex items-center justify-center px-10 pt-10">
                <div class="absolute bottom-0 left-0 block w-48 h-48 ml-3 -mb-24" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
            </div>
            <div class="relative px-6 pb-6 mt-6 text-white">
                <span class="block -mb-1 opacity-75">Indoor</span>
                <div class="flex justify-between">
                    <span class="block text-xl font-semibold">Peace Lily</span>
                    <span class="flex items-center block px-3 py-2 text-xs font-bold leading-none text-orange-500 bg-white rounded-full">$36.00</span>
                </div>
            </div>
        </div>
        <div class="relative flex-shrink-0 max-w-xs m-6 overflow-hidden bg-teal-500 rounded-lg shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative flex items-center justify-center px-10 pt-10">
                <div class="absolute bottom-0 left-0 block w-48 h-48 ml-3 -mb-24" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
            </div>
            <div class="relative px-6 pb-6 mt-6 text-white">
                <span class="block -mb-1 opacity-75">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block text-xl font-semibold">Monstera</span>
                    <span class="flex items-center block px-3 py-2 text-xs font-bold leading-none text-teal-500 bg-white rounded-full">$45.00</span>
                </div>
            </div>
        </div>
        <div class="relative flex-shrink-0 max-w-xs m-6 overflow-hidden bg-purple-500 rounded-lg shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div class="relative flex items-center justify-center px-10 pt-10">
                <div class="absolute bottom-0 left-0 block w-48 h-48 ml-3 -mb-24" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
            </div>
            <div class="relative px-6 pb-6 mt-6 text-dark-1">
                <span class="block -mb-1">Outdoor</span>
                <div class="flex justify-between">
                    <span class="block text-xl font-semibold">Oak Tree</span>
                    <span class="flex items-center block px-3 py-2 text-xs font-bold leading-none bg-white rounded-full">$68.50</span>
                </div>
            </div>
        </div>

    </div>

    <div class="container m-auto max-w-4x " id="hola">
        <section class="flex flex-wrap items-start items-center justify-between m-auto">
            <article class="w-full px-4 m-auto mb-10 shadow-lg lg:w-1/3 md:w-1/2">
                <img class="object-cover w-full" src="https://placeimg.com/640/480/any" alt="">
                <div class="flex items-center justify-start p-2 header__item">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-500 rounded-full">
                        <img class="object-cover w-16 w-full h-16 rounded-full" src="https://placeimg.com/640/480/people" alt="">
                    </div>
                    <h4 class="flex-1 px-4 title--4">Mario Germán</h4>
                </div>
                <p class="p-3 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est illum tempora iusto blanditiis dolores veritatis commodi doloremque. Perspiciatis, earum dolores.</p>
            </article>

            <article class="w-full px-4 m-auto mb-10 shadow-lg lg:w-1/3 md:w-1/2">
                <img class="object-cover w-full" src="https://placeimg.com/640/480/any" alt="">
                <div class="flex items-center justify-start p-2 header__item">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-500 rounded-full">
                        <img class="object-cover w-16 w-full h-16 rounded-full" src="https://placeimg.com/640/480/people" alt="">
                    </div>
                    <h4 class="flex-1 px-4 title--4">2Mario Germán</h4>
                </div>
                <p class="p-3 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est illum tempora iusto blanditiis dolores veritatis commodi doloremque. Perspiciatis, earum dolores.</p>
            </article>

            <article class="w-full px-4 m-auto mb-10 shadow-lg lg:w-1/3 md:w-1/2">
                <img class="object-cover w-full" src="https://placeimg.com/640/480/any" alt="">
                <div class="flex items-center justify-start p-2 header__item">
                    <div class="flex items-center justify-center w-16 h-16 bg-gray-500 rounded-full">
                        <img class="object-cover w-16 w-full h-16 rounded-full" src="https://placeimg.com/640/480/people" alt="">
                    </div>
                    <h4 class="flex-1 px-4 title--4">3Mario Germán</h4>
                </div>
                <p class="p-3 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est illum tempora iusto blanditiis dolores veritatis commodi doloremque. Perspiciatis, earum dolores.</p>
            </article>


        </section>
    </div>

    <div class="container pt-5 mx-auto bg-gray-400">
        <h1 class="mt-5 mb-10 text-4xl text-center text-red-500">Probando Slick</h1>
        <div class="flex justify-center">
            <div class="w-96">
                <div class="slickDemo">
                    <div>
                        <img src="https://loremflickr.com/640/360">
                    </div>
                    <div>
                        <img src="https://loremflickr.com/640/360">
                    </div>
                    <div>
                        <img src="https://loremflickr.com/640/360">
                    </div>
                    <div>
                        <img src="https://loremflickr.com/640/360">
                    </div>
                    <div>
                        <img src="https://loremflickr.com/640/360">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto prose-sm">
        <h3>This is my title</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sit, officiis doloribus nostrum labore eligendi doloremque ducimus enim cupiditate quasi soluta, natus non esse sequi, sapiente adipisci obcaecati. Temporibus, aperiam.</p>
        <ul>
            <li>Hello</li>
            <li>Hello</li>
            <li>Hello</li>
            <li>Hello</li>
            <li>Hello</li>
        </ul>
    </div>

<?php endwhile; ?>
<!-- End Hero Header -->

<?php
get_footer();
