<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar about-page">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
			$services_title = get_field('services_title');
			$services_text = get_field('services_text');
			$box_1_title = get_field('box_1_title');
			$box_1_text = get_field('box_1_text');
			$box_1_photo = get_field('box_1_photo');
			$box_2_title = get_field('box_2_title');
			$box_2_text = get_field('box_2_text');
			$box_2_photo = get_field('box_2_photo');
			$box_3_title = get_field('box_3_title');
			$box_3_text = get_field('box_3_text');
			$box_3_photo = get_field('box_3_photo');
			$box_4_title = get_field('box_4_title');
			$box_4_text = get_field('box_4_text');
			$box_4_photo = get_field('box_4_photo');
			$contact_text = get_field('contact_text');
			$contact_button_text = get_field('contact_button_text');
			?>

			<header>
				<div class="about-header">
					<h2>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile. </h2>
				</div>
			</header>

			<div class="about-articles">
				<article class="about-services">
					<h4><?php echo $services_title; ?></h4>
					<p><?php echo $services_text; ?></p>
				</article>

			<div class="about-strategy">
					<article class="about clearfix box-1">
						<aside class="about-sidebar">
							<h2><?php echo $box_1_title; ?></h2>
							<p><?php echo $box_1_text; ?></p>
						</aside>
						<div class="about-images">
								<?php echo wp_get_attachment_image( $box_1_photo );
								?>
							</a>
						</div>
					</article>

					<article class="about clearfix box-2">
						<aside class="about-sidebar">
							<h2><?php echo $box_2_title; ?></h2>
							<p><?php echo $box_2_text; ?></p>
						</aside>
						<div class="about-images">
								<?php echo wp_get_attachment_image( $box_2_photo );
								?>
							</a>
						</div>
					</article>

					<article class="about clearfix box-3">
						<aside class="about-sidebar">
							<h2><?php echo $box_3_title; ?></h2>
							<p><?php echo $box_3_text; ?></p>
						</aside>
						<div class="about-images">
								<?php echo wp_get_attachment_image( $box_3_photo );
								?>
							</a>
						</div>
					</article>

					<article class="about clearfix box-4">
						<aside class="about-sidebar">
							<h2><?php echo $box_4_title; ?></h2>
							<p><?php echo $box_4_text; ?></p>
						</aside>
						<div class="about-images">
								<?php echo wp_get_attachment_image( $box_4_photo );
								?>
							</a>
						</div>
					</article>
				</div>
			</div>

			<div class="about-contact">
				<h4><?php echo $contact_text; ?></h4>
				<button class="button" type="button" name="button"><?php echo $contact_button_text; ?></button>
			</div>

				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
