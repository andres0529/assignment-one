<?php
	/**
	 * The Header
	 * This is the template that displays all the <head> sections
	 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<!-- Add our custom css file -->
	<link rel="stylesheet" href="<?php echo esc_url( home_url('wp-content/themes/assignmentOne/assets/css/style-assignmentOne.css')); ?>">
	<!-- Add our custom font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
	<script src="/wp-content/themes/assignmentOne/assets/js/script.js" defer></script>
</head>
<body <?php body_class(); ?>>
	<header>
		<div>
			<a href="<?php echo esc_url( home_url() ); ?>">
				<img src="<?php echo esc_url( home_url( 'wp-content/uploads/2023/02/logo.png' ) ); ?>" alt="header logo">
			</a>
		</div>
		<nav>
			<?php
				wp_nav_menu( array(
					'menu' => 'main',
					'theme_location' => '',
					'depth' => 2,
					'fallback_cb' => false
				));
			?>
		</nav>
	</header>