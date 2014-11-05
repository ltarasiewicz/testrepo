<?php
/**
 * Template Name: Homestyles (auto-generate)
 *
 * This is the template that displays full width page without sidebar and 
 * autogenerates links to specific homestyle project page.
 *
 * @package sparkling
 */

get_header(); ?>
<div id="content" class="site-content">
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'homestyles', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>