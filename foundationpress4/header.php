<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<meta name="viewport" content="width=device-width" />
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<link rel="dns-prefetch" href="//www.google-analytics.com">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!-- CSS + JavaScript -->
		<?php wp_head(); ?>
		
		<!--Foundation files added-->
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/custom.modernizr.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,500,400,700' rel='stylesheet' type='text/css'>

	</head>
	<body <?php body_class(); ?>>
	
		<!-- Wrapper -->
		<div class="row">
	
			<!-- Header -->
			<header class="large-12 small-12 columns">
				
					<!-- Logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
						</a>
					</div>
					<!-- /Logo -->
					
					<!-- Nav -->
					<div class="row">
						<?php include (TEMPLATEPATH . '/inc/nav.php'); ?>
					</div>
					
					<br class="clear">
			<?php if (is_front_page()){?>
				<div class="row">
					<?php include (TEMPLATEPATH . '/inc/banner.php'); ?>
				</div>
			<?php }?>
			
			</header>
			<!-- /Header -->