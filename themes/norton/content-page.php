<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sparkling
 */
?>

<div class="post-inner-content">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header page-header">
                        <h1 class="entry-title"><?php //the_title(); ?></h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                        <?php the_content(); ?>
                </div><!-- .entry-content -->	

        </article><!-- #post-## -->
    </div><!-- .top-section -->    
</div>