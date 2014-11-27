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
                <div class='row'>
                    <div class="contact-page">
                        <div class="col-sm-4">
                            <div class="contact-title-section">
                                <h1 class="contact-title"><?php the_title(); ?></h1>
                                <h2>Areas we service</h2>
                                <p><?php echo types_render_field('areas-of-service', array()); ?></p>
                            </div>
                        </div>   
                        <div class="col-sm-4">
                            <?php echo do_shortcode('[contact-form-7 id="208" title="Norton Builders Contact Form"]'); ?>
                        </div>   
                        <div class="col-sm-4">
                            <div class="contact-section">
                                <h2>Call Us</h2>
                                <p>Fax: <?php echo types_render_field('fax-number', array()); ?></p>
                                <p>Tel: <?php echo types_render_field('telephone-number', array()); ?></p>
                            </div>
                            <div class="contact-section">
                                <h2>Our Address</h2>
                                <p><?php echo types_render_field('address', array()); ?></p>
                            </div>
                                <h2>Email us</h2>
                                <h2 class="borderless smaller">Support</h2>
                                <p><?php echo types_render_field('email', array()); ?></p>
                        </div>                       
                    </div>
                </div>  
        </div><!-- .entry-content -->	
    </div><!-- .top-section -->
    </article><!-- #post-## -->
</div><!-- .post-inner-content -->