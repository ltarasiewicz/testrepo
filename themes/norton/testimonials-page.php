<?php
/**
 * The template used for displaying page content in generic-page.php
 *
 * @package sparkling
 */
?>

<div class="post-inner-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content fixed-margin container reduced-padding">
            <header class="entry-header page-header">
                <?php get_template_part('partials/intro', 'text'); ?>
            </header>  
                <div id="testimonials-content">
                    <div class='row'> 
                        <div class="testimonial">
                            <div class="col-sm-4">
                                <h1><?php the_title(); ?></h1>
                                <div class="quote">
                                    <?php echo types_render_field('quote-1', array()); ?>
                                </div>
                            </div>   
                            <div class="col-sm-8">
                                <div class="review">
                                    <h3><?php echo types_render_field('reviewer-1', array()); ?></h3>
                                    <p><?php echo types_render_field('review-1', array()); ?></p>
                                </div>
                            </div>   
                        </div>    
                    </div>  
                    <div class='row'> 
                        <div class='testimonial'>
                            <div class="col-sm-4">             
                                <div class="quote second">
                                    <?php echo types_render_field('quote-2', array()); ?>
                                </div>
                            </div>   
                            <div class="col-sm-8">
                                <div class="review">
                                    <h3><?php echo types_render_field('reviewer-2', array()); ?></h3>
                                    <p><?php echo types_render_field('review-2', array()); ?></p>
                                </div>    
                            </div>   
                        </div>
                    </div>     
                </div>    
        </div><!-- .entry-content -->	
    </div><!-- .top-section -->
    </article><!-- #post-## -->
</div><!-- .post-inner-content -->