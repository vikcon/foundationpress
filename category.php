<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	
		<h2><?php _e( 'Categories for', 'html5blank' ); the_category(); ?></h2>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>