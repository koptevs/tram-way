<?php
/**
 * Hero setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );

?>

<section id="hero" class="d-flex align-items-center">

	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
				<h1>Better Solutions For Your Business</h1>
				<h2>We are team of talented designers making websites with Bootstrap</h2>
				<div class="d-flex justify-content-center justify-content-lg-start">
					<a href="#about" class="btn-get-started scrollto">Get Started</a>
					<a href="https://youtu.be/6WFUv7-dmhE" class="glightbox btn-watch-video">
						<!--							<i class="bi bi-play-circle"></i>-->
						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-circle"
						     viewBox="0 0 16 16">
							<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
							<path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
						</svg>
						<span>Watch Video</span></a>
				</div> <!-- .col -->
			</div> <!-- .row -->
			<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
<!--				<img src="--><?php //echo get_template_directory_uri() . '/img/hero-img.png' ?><!--" class="img-fluid animated" alt="Hero image">-->
				<img src="<?php echo get_theme_file_uri('/img/hero-img.png') ?> "class="img-fluid animated" alt="Hero image">

			</div>
		</div>
	</div>

</section>
