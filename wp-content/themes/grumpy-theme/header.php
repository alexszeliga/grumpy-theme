<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>
        <!-- TODO: fix this jawn; should be set in theme
		    <link href="<?php // echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		    <link href="<?php // echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
        -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header class="header clear" role="banner">
                    <p>TODO: Build a header</p>
					<!-- nav -->
					<nav class="nav" role="navigation">
						<p>TODO: Build a nav</p>
					</nav>
					<!-- /nav -->
			</header>
			<!-- /header -->