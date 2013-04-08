<?php get_header(); ?>
	
<div class = "large-9 small-12 columns">
	<!-- Section -->
	<section>
	
		<h1><?php the_title(); ?></h1>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>		
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php the_content(); ?>
			
			<?php comments_template( '', true ); // Remove if you don't want comments ?>
			
			<br class="clear">
			
			<?php edit_post_link(); ?>
			
		</article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /Section -->
</div>

<div class = "large-3 small-12 columns">
	<?php get_sidebar(); ?> <!--Sidebar got to bottom on mobile-->
</div>
<?php get_footer(); ?>