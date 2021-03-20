<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

	<!-- <div id="primary"> -->
		<!-- <main id="main" class="site-main" role="main"> -->
			<div class="btn-block">
					<a href="shop"><div class="btn">Перейти в каталог</div></a>
				</div>

			<div class="bg_image">
			<img class="owl-lazy"  src="/wp-content/uploads/banners/main_page_1.jpg">
		</div>
		<div class="aboutus">
			<p>Как приятно открыть флакон любимых духов и ощутить их волшебный запах. Еще лучше нанести этот чудесный аромат на тело или одежду и радовать им не только себя, но и окружающих людей. Ведь радостью всегда хочется поделиться, не так ли?</p>
		</div>
		<div class="btn-block">
			<a href="shop"><div class="btn">Перейти в каталог</div></a>
		</div>

<?php
do_action( 'storefront_sidebar' );
get_footer();
