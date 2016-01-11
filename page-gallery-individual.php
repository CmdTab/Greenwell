<?php
/**
 * Template Name: Individual
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
			<div class="individual-header">
				<div class="gallery-navigation">
					<?php
					$defaults = array(
						'menu'            => 'gallery',
						'menu_class'      => 'menu',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
					);

					wp_nav_menu( $defaults );

					?>
				</div>
			</div>
			<?php if( have_rows('new_gallery_item') ): ?>
			<div class="home-gallery">
				<div id="carousel-home" class="carousel slide" data-ride="carousel">

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php $j = 0; while ( have_rows('new_gallery_item') ) : the_row(); ?>
						<div class="item<?php if($j == 0) { echo " active";} ?>" data-slide-number="<?php echo $j; ?>">
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
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
							<svg class="icon icon-angle-left"><use xlink:href="#icon-angle-left"></use></svg>
							<span class="assistive-text">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
							<svg class="icon icon-angle-right"><use xlink:href="#icon-angle-right"></use></svg>
							<span class="assistive-text">Next</span>
						</a>
					</div>

					<!-- Indicators -->
					
					<!-- <ol class="carousel-indicators">
						<?php // $i = 0; while ( have_rows('new_gallery_item') ) : the_row(); ?>
						<li data-target="#carousel-home" data-slide-to="<?php // echo $i; ?>" <?php // if($i == 0) { echo "class='active'";} ?>>
							<img src="http://placehold.it/500x500" />
						</li>
						<?php // $i++; endwhile; ?>
					</ol> -->

					<ol class="carousel-indicators group">
						<?php $i = 0; while ( have_rows('new_gallery_item') ) : the_row(); ?>
						<li class="<?php if($i == 0){echo 'active';} ?>" data-target="#carousel-home" data-slide-to="<?php echo $i; ?>">

								<?php 
									$thumbimage = get_sub_field('gallery_image');
									if( !empty($thumbimage) ):

									$size = 'thumbnail';
									$thumb = $thumbimage['sizes'][ $size ];
									$width = $thumbimage['sizes'][ $size . '-width' ];
									$height = $thumbimage['sizes'][ $size . '-height' ];
								?>

									<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

								<?php
									else:
									$mainImage = get_sub_field('gallery_image');
								?>

									<img src="<?php echo $mainImage['url']; ?>" alt="<?php echo $mainImage['alt']; ?>" />

							<?php endif; ?>
						</li>
						<?php $i++; endwhile; ?>
					</ol>
				</div><!--carousel-->
			</div><!--home-gallery-->
			<?php endif; ?>
			<div class="individual-content">
				<h2><?php the_title(); ?></h2>
				<p>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; // end of the loop. ?>
				</p>
			</div>
			<div class="gallery-navigation mobile">
				<?php
				$defaults = array(
					'menu'            => 'gallery',
					'menu_class'      => 'menu',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
				);

				wp_nav_menu( $defaults );

				?>
			</div>
		</div><!--wrap-->
	</div><!-- #primary -->

<?php get_footer(); ?>
