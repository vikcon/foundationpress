<?php get_header(); ?>
<div class = "large-9 small-12 columns">
	<!-- section -->
	<section role="main">
	
		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->
</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>