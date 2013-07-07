<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<!--CSS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
		<link rel ="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
		<link rel ="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css">
		<link rel ="stylesheet" href="<?php echo get_stylesheet_uri();?>">
		
		
		
	</head>
	<body <?php body_class(); ?>>
		<!-- nav -->
		<div class="row">
			<?php get_template_part('nav'); ?> 
		</div>
		<!-- /nav -->
	
		<!-- wrapper -->
		<div class="row">
			<!-- header -->
			<div class = "large-12 small-12 columns header" role="banner">
				<a href="<?php bloginfo('url'); ?>">
					<h1> <?php bloginfo('name');?> <h1>
					<h4> <?php bloginfo('description');?> </h4>
				</a>
			</div>
			<hr/>
			<?php if (is_front_page()){?>
				<div class="row">
					<?php get_template_part('banner'); ?> 
				</div>
			<?php }?>
			</header>
			<!-- /header -->