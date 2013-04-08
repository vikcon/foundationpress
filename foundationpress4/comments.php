<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h5><?php comments_number(); ?></h5>
	<p>
	<ul>
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	</ul>
	</p>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	
	<p><small><?php _e( 'Comments are closed here.', 'html5blank' ); ?></small></p>
	
<?php endif; ?>

<?php comment_form(); ?>

</div>