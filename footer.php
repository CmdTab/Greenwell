<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress Start
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap group">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				&copy; <?php bloginfo( 'name' ); ?>
			</a>
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container_class' => 'footer-nav') ); ?>
		</div><!-- wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39918676-5', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
