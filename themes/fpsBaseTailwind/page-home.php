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

	<div class="content-area top-bar">
		<div class="container m-auto ">
			<!-- Three columns -->
			<div class="flex mb-2 h-12 content-center justify-center mb-0">
				<h1 class="flex items-center rotate-90 foo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, unde.</h1>

				<button class="blue_button px-2">Test</button>
			</div>
		</div>
	</div>

	<div class="p-24 flex flex-wrap items-center justify-center">
		<div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-300 rounded-lg max-w-xs shadow-lg">
			<svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
				<rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
				<rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
			</svg>
			<div class="relative pt-10 px-10 flex items-center justify-center">
				<div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
				<img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
			</div>
			<div class="relative text-white px-6 pb-6 mt-6">
				<span class="block opacity-75 -mb-1">Indoor</span>
				<div class="flex justify-between">
					<span class="block font-semibold text-xl">Peace Lily</span>
					<span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
				</div>
			</div>
		</div>
		<div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg">
			<svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
				<rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
				<rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
			</svg>
			<div class="relative pt-10 px-10 flex items-center justify-center">
				<div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
				<img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
			</div>
			<div class="relative text-white px-6 pb-6 mt-6">
				<span class="block opacity-75 -mb-1">Outdoor</span>
				<div class="flex justify-between">
					<span class="block font-semibold text-xl">Monstera</span>
					<span class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
				</div>
			</div>
		</div>
		<div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg">
			<svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
				<rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
				<rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
			</svg>
			<div class="relative pt-10 px-10 flex items-center justify-center">
				<div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
				<img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
			</div>
			<div class="relative text-white px-6 pb-6 mt-6">
				<span class="block opacity-75 -mb-1">Outdoor</span>
				<div class="flex justify-between">
					<span class="block font-semibold text-xl">Oak Tree</span>
					<span class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
				</div>
			</div>
		</div>

	</div>

	<div class="container m-auto max-w-4x">
		<section class="flex items-start flex-wrap justify-between items-center m-auto">
			<article class="lg:w-1/3 md:w-1/2 w-full px-4 mb-10 m-auto shadow-lg">
				<img class="object-cover w-full" src="https://placeimg.com/640/480/any" alt="">
				<div class="header__item flex justify-start items-center p-2">
					<div class="bg-gray-500 rounded-full h-16 w-16 flex items-center justify-center">
						<img class="object-cover w-full h-16 w-16 rounded-full" src="https://placeimg.com/640/480/people" alt="">
					</div>
					<h4 class="title--4 flex-1 px-4">Mario Germán</h4>
				</div>
				<p class="p-3 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est illum tempora iusto blanditiis dolores veritatis commodi doloremque. Perspiciatis, earum dolores.</p>
			</article>

			<article class="lg:w-1/3 md:w-1/2 w-full px-4 mb-10 m-auto shadow-lg">
				<img class="object-cover w-full" src="https://placeimg.com/640/480/any" alt="">
				<div class="header__item flex justify-start items-center p-2">
					<div class="bg-gray-500 rounded-full h-16 w-16 flex items-center justify-center">
						<img class="object-cover w-full h-16 w-16 rounded-full" src="https://placeimg.com/640/480/people" alt="">
					</div>
					<h4 class="title--4 flex-1 px-4">2Mario Germán</h4>
				</div>
				<p class="p-3 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est illum tempora iusto blanditiis dolores veritatis commodi doloremque. Perspiciatis, earum dolores.</p>
			</article>

			<article class="lg:w-1/3 md:w-1/2 w-full px-4 mb-10 m-auto shadow-lg">
				<img class="object-cover w-full" src="https://placeimg.com/640/480/any" alt="">
				<div class="header__item flex justify-start items-center p-2">
					<div class="bg-gray-500 rounded-full h-16 w-16 flex items-center justify-center">
						<img class="object-cover w-full h-16 w-16 rounded-full" src="https://placeimg.com/640/480/people" alt="">
					</div>
					<h4 class="title--4 flex-1 px-4">3Mario Germán</h4>
				</div>
				<p class="p-3 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est illum tempora iusto blanditiis dolores veritatis commodi doloremque. Perspiciatis, earum dolores.</p>
			</article>


		</section>
	</div>

<?php endwhile; ?>
<!-- End Hero Header -->

<?php
get_footer();
