<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php

$navArgs = array(
	'theme_location'  => 'primary',
	'menu'            => 'primary',
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id'    => 'navbar-collapse',
	'menu_class'      => 'nav navbar-nav pull-right',
	'echo'            => true,
	'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
	'depth'           => 0,
	'walker'          => new wp_bootstrap_navwalker()
);

?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adam Smith</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
	<?php //wp_head(); ?>
</head>

<nav class="navbar navbar-inverse" role="navigation">
		<div class="col-md-6 col-md-offset-3">
			<div id="logo">Adam Smith</div>
				<?php wp_nav_menu( $navArgs ); ?>
		</div>
</nav>
<body>