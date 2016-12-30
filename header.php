<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body>
	<div id="main">
		<div class="grid">
			<div class="grid__item palm-one-whole one-fifth">
				<?php get_sidebar(); ?>
			</div><div class="grid__item palm-one-whole four-fifths">

			<div id="header-bar"></div>
			<button class="hamburger hamburger--squeeze" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>

			<header id="header">
				<span id="header-content">
					<blockquote id="header-mission">
						"Every family living in health and hope within a supportive community."
					</blockquote>
				</span>

				<nav class="site-nav nav">
					<?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
					</nav>
			</header>