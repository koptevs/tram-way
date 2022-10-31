<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = 'container';
//$container = get_theme_mod( 'understrap_container_type' );
?>

<?php
//get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper footer-wrapper" id="wrapper-footer">

	<div class="<?php
	echo esc_attr( $container ); ?>">

		<div class="row">
			<div class="col-12 col-md-4 ">
				<h3 class="text-center text-uppercase">Col 1</h3>

			</div>

			<div class="col-12 col-md-4 ">
				<h3 class="text-center text-uppercase">Col 2</h3>

			</div>
			<div class="col-12 col-md-4">
				<h3 class="text-center text-uppercase">Col 3</h3>

			</div>

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php
wp_footer(); ?>

</body>

</html>

