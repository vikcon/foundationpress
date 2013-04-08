<!--Dynamic Sidebar - 2 -->
	<div class = "large-12 small-12 columns">

		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
		</div>
	</div>

<!--Footer nav -->
	<div class = "large-12 small-12 columns">
	
	</div>

<!-- Footer -->
			<footer class="large-12 small-12 columns">
				
				<!-- Copyright -->
				<p class="copyright">
					&copy; <?php echo date("Y"); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?> 
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//vikconconsulting.com/fp" title="FoundationPress">FoundationPress 4.1</a>.
				</p>
				<!-- /Copyright -->
				
			</footer>
			<!-- /Footer -->
		
		</div>
		<!-- /Wrapper -->
		
		<!-- Footer JS Scripts -->
		<script>
			document.write('<script src=' +
			('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
			'.js><\/script>')
		</script>
		<!--Foundation JS in functions.php-->
		<?php wp_footer(); ?>
		
		<!-- Analytics -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)})(document,'script');
		</script>
	
	</body>
</html>