<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

// $navbar_type = 'collapse';
$navbar_type  = 'offcanvas';
//$navbar_fixed = true;
 $navbar_fixed = false;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<!--<body -->
<body <?php body_class(); ?>>

	<?php
	// if (!$navbar_fixed) :
	?>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</a>
	<?php
	// endif;
	?>
	<?php
	// do_action( 'wp_body_open' );
	?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<?php if (is_front_page()) : ?>
			<header id="wrapper-navbar" class="<?php echo $navbar_fixed ? 'fixed-top' : ''; ?>">
			<?php else : ?>
				<header id="wrapper-navbar" class="<?php echo $navbar_fixed ? 'fixed-top header-inner' : 'header-inner'; ?>">
				<?php endif; ?>
				<!--                    <header id="wrapper-navbar">-->
				<a class="skip-link sr-only sr-only-focusable" href="#content">
					<?php
					esc_html_e(
						'Skip to content',
						'tramway'
					);
					?>
				</a>
				<?php
				 get_template_part( 'global-templates/navbar', $navbar_type );
				?>


				</header><!-- #wrapper-navbar end -->

				<?php if (!$navbar_fixed) : ?>
					<div style="margin-top: -72px;"></div>
				<?php endif; ?>

				<?php if (!is_front_page()) : ?>
					<div style="margin-top: 72px;"></div>
				<?php endif; ?>

