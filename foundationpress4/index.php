<?php get_header(); ?>
	
	<div class = "large-9 small-12 columns">
		<!-- Section -->
		<section>
		
			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
			<?php get_template_part('loop'); ?>
			<!-- Pagination -->
			<div class="pagination">
				<?php html5wp_pagination(); ?>
			</div>
			<!-- /Pagination -->
		
		</section>
		<!-- /Section -->
	</div>

<div class = "large-3 small-12 columns">
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>