<nav class="top-bar" role = "navigation">
	<ul class="title-area">
	<!-- Title Area -->
		<li class="name">
			<h1 class="show-for-medium-down"><a href="#"><?php bloginfo('title');?></a></h1>
		</li>
		<li class="toggle-topbar menu-icon">
			<a href="#">
				<span></span>
			</a>
		</li>
	</ul>
	<section class="top-bar-section">
	<!--Left Nav Section-->
	<ul class="left">			
		<?php wp_nav_menu( array(
			'menu' => 'header-menu',
			'menu_class'=>'nav-bar',
			'depth'=>'0',))
		?>
	</ul>
	<!-- Right Nav Section -->
		<ul class="right">
			<li class = "has-form">
			      <?php get_template_part('searchform'); ?>
			</li>
		</ul>
	</section>
</nav>

