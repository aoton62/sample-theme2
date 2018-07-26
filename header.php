<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<mate name="viewport" content="width=device-width,intial-scale=1">
<mate name="theme-color" content="#444444">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header>
		<h1>
			<a href="<?php home_url(); ?>">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					$format  = '<img';
					$format .= ' src="'    . $image[0] . '"';
					$format .= ' width="'  . $image[1] . '"';
					$format .= ' height="' . $image[2] . '"';
					$format .= ' alt="'    . get_bloginfo( 'name' ) . '">';
					echo $format;
				?>
			</a>
		</h1>
	</header>

	<nav>
		<?php
		 	wp_nav_menu(
				array(
					'theme_location' => 'primary2'
				)
			);
	 	?>
	</nav>