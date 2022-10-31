<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = 'container';
?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php
	echo $container; ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<h1 class="text-center text-iky text-uppercase mt-4">BLOG</h1>

				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<a href="<?php
					the_permalink(); ?>">
						<h2 class="text-uppercase text-iky"><?php
							the_title(); ?></h2>
					</a>
					<div class="py-1 px-3 mb-2 bg-iky d-inline-block text-white">
						Posted by: <?php
						the_author_posts_link(); ?> on <?php
						the_time( 'd.m.Y' ); ?>
						in <?php
						echo get_the_category_list( ', ' ); ?>
					</div>
					<?php
					the_content(); ?>
					excerpt:
					<?php
					the_excerpt(); ?>
					<a href="<?php
					the_permalink(); ?>" class="btn btn-outline-iky mb-4">Continue reading &raquo;</a>

				<?php
				endwhile; ?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!--  #content -->

</div><!-- #index-wrapper -->
<?php
get_footer();
?>
