<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('|'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>

		<div class="container">

			<div class="menu-wrap">
				<nav class="menu">
					<div class="menu-list">
						<a href="#services">Services</a>
						<a href="#contact">Contact Us</a>
						<a href="#services">Testimonials</a>
					</div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"></button>
			
			<div class="content-wrap">
				
				<div id="header" class="grid-full">
					<div class="row">
						<div class="column6 end">
							<span>
								<h1 class="fade-in"><?php bloginfo('name'); ?></h1>
								<a href="#services" class="splash-arrow fade-in">&nbsp;</a>
							</span>
						</div>
					</div>
				</div>
