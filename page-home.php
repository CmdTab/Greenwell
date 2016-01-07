<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress Start
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="full-section">
		<div class="wrap">
			<div class="home-banner">
				<?php 
					$image = get_field('home_image');

					if( !empty($image) ): ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
				<?php the_content(); ?>
				<!--<a href = "/contact" class="btn">Contact Us</a>-->
			</div><!--home-banner-->
			<?php /*<hr />
			<?php if( have_rows('new_gallery_item') ): ?>
			<div class="home-gallery">
				<h2>Gallery</h2>
				<div id="carousel-home" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php $i = 0; while ( have_rows('new_gallery_item') ) : the_row(); ?>
						<li data-target="#carousel-home" data-slide-to="<?php echo $i; ?>" <?php if($i == 0) { echo "class='active'";} ?>></li>
						<?php $i++; endwhile; ?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php $j = 0; while ( have_rows('new_gallery_item') ) : the_row(); ?>
						<div class="item<?php if($j == 0) { echo " active";} ?>">
							<?php if(get_sub_field('gallery_link')): ?>
								<a href = "<?php the_sub_field('gallery_link'); ?>">
							<?php endif; ?>
							<?php 
								$image = get_sub_field('gallery_image');
								if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
							<?php if(get_sub_field('gallery_link')): ?>
									<span>More of this home</span>
								</a>
							<?php endif; ?>
						</div>
						<?php $j++; endwhile; ?>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
						<svg class="icon icon-left"><use xlink:href="#icon-left"></use></svg>
						<span class="assistive-text">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
						<svg class="icon icon-right"><use xlink:href="#icon-right"></use></svg>
						<span class="assistive-text">Next</span>
					</a>
				</div><!--carousel-->
			</div><!--home-gallery-->
			<?php endif; ?>
			*/?>
		</div><!--wrap-->
	</div><!-- #primary -->
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
