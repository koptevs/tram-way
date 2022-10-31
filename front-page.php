<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = 'container';
?>

<?php
if ( is_front_page() ) : ?>
	<?php
	get_template_part( 'global-templates/hero' ); ?>
<?php
endif; ?>

	<div class="wrapper" id="index-wrapper">

		<!--		<div class="--><?php
		//		echo esc_attr( $container ); ?><!--" id="content" tabindex="-1">-->
		<!---->
		<!--			<div class="row">-->

		<main class="site-main" id="main">

			<div class="d-flex align-items-center justify-content-center"
				 style="height: 200px; background-color: #ffca68; color: #000000;">
				<p class="fw-bold fs-1">SECTION</p>
			</div>
			<div class="d-flex align-items-center justify-content-center"
				 style="height: 200px; background-color: #006778; color: #fff5f5;">
				<p class="fw-bold fs-1">SECTION</p>
			</div>
			<div class="d-flex align-items-center justify-content-center"
				 style="height: 200px; background-color: #bc4c4c; color: #ffffff;">
				<p class="fw-bold fs-1">SECTION</p>
			</div>

		</main><!-- #main -->

		<!-- The pagination component -->
		<!--                -->
		<?php
		// understrap_pagination();
		?>

		<!-- Do the right sidebar check -->
		<!--                -->
		<?php
		// get_template_part( 'global-templates/right-sidebar-check' );
		?>

		<!--			</div><!-- .row -->-->
		<!---->
		<!--		</div><!-- #content -->-->

	</div><!-- #index-wrapper -->

<?php
get_footer();
