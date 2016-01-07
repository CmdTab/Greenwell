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
			<?php if( have_rows('grid') ): ?>

				<ul class="gallery-grid three-list group">

				<?php while( have_rows('grid') ): the_row(); 

					// vars
					$name = get_sub_field('gallery_name');
					$picture = get_sub_field('gallery_picture');
					$link = get_sub_field('gallery_link');

					?>

					<li>
						<a href="<?php echo $link; ?>">
							<img src="<?php echo $picture['url']; ?>" alt="..." />
							<h2><?php echo $name; ?></h2>
						</a>
					</li>

				<?php endwhile; ?>

				</ul>

			<?php endif; ?>
			
		</div><!--wrap-->
	</div><!-- #primary -->

<?php get_footer(); ?>
