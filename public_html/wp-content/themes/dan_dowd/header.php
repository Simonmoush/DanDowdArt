<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Art, Sculpture, Assemblage, Design, Maine, Artist">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="stylesheet" href="<?= esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
		<?php wp_head(); ?>
	</head>
	<body>
		<!-- title and nav -->
		<div id="sidebar">
			<div id="sidebar-top">
				<h1 id="title">
					Dan Dowd Art
				</h1>
				<hr class="nav-divider">
				<ul id="nav">
					<li>Art</li>
					<li>Conservation</li>
					<li>World</li>
				</ul>
			</div>
			<div id="sidebar-bottom">
				<div id="sidebar-footer">
					<?php get_template_part("footer_content"); ?>
				</div>
			</div>
		</div>
		<!-- start of content -->
		<div id="content">
