<?php

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

get_header(); ?>
</div>
<div id="content" class="site-content container-fluid">
    <div class="row">
        <div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">
			<div class="post-inner-content">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-content">
                                                    
							<?php get_template_part( 'home', 'page' ); ?>
     
						</div><!-- .entry-content -->
                  
					</article><!-- #post-## -->
				<?php endwhile; // end of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
    </div>

<?php
	get_footer();
}
?>