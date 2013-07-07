<div class="orbit-container">
  <ul data-orbit="" class="orbit-slides-container">
	<?php 
        
        // Featured 4 posts loop
        // The Query
              query_posts( array('category_name' => 'featured' ));
                while (have_posts()) : the_post(); //Start Loop
        ?>                         
					<li>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img src = "<?php echo $image[0];  ?>" alt=""/>
						<div class="orbit-caption"><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read More </a></div>
					</li>
                
                <?php endwhile; // End the loop?>
	</ul>
	  <?php wp_reset_query(); ?>
</div>
      