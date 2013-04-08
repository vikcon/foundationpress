



    <?php 
        // Featured 4 posts loop
        // The Query
              query_posts( array('category_name' => 'featured' ));
                while (have_posts()) : the_post(); //Start Loop ?>
                <ul data-orbit>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <li>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <img src = "<?php echo $image[0];  ?>" alt="testing"/>
                                    <div class="orbit-caption"><?php echo substr(get_the_excerpt(), 0,100); ?> <a href="<?php the_permalink(); ?>">Read More </a></div>
                                </li>
                        </article>	
                </ul>
                <?php endwhile; // End the loop?>
        
        <?php wp_reset_query();
        
        ?>