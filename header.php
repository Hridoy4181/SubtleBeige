<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
	<div id="page">

		<div id="header" style = "background: url(<?php header_image(); ?>) no-repeat 0 0 / 100% 100%;">
			<div class="title"><?php bloginfo( 'name' ); ?></div>
			<div class="subText"><?php bloginfo( 'description' ); ?></div>
		</div>

		<div id="bar">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'mainmenu',
					)
				);
				?>
		</div>
