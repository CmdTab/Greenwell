<?php
/**
 * Template Name: Gallery Grid
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress Start
 */

get_header(); ?>

	<div class="full-section">
		<div class="wrap">
			<ul class="gallery-grid three-list group">
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/gallery/exterior">
						<img src="<?php bloginfo('template_directory'); ?>/_i/exterior.jpg" />
						<h2>Exterior</h2>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/gallery/interior-details">
						<img src="<?php bloginfo('template_directory'); ?>/_i/interior.jpg" />
						<h2>Interior &amp; Details</h2>
					</a>
				</li>
				<li>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>/gallery/kitchens-bathrooms">
						<img src="<?php bloginfo('template_directory'); ?>/_i/bathroom.jpg" />
						<h2>Kitchens &amp; Bathrooms</h2>
					</a>
				</li>
			</ul><!--gallery-grid-->
		</div><!--wrap-->
	</div><!-- #primary -->

<?php get_footer(); ?>
