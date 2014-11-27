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
                    <div class="col-sm-4">
                        <h1><?php the_title(); ?></h1>
                    </div>   
                    <div class='col-sm-8'>
                         <div class='awards-heading'>
                             <h2>Awards</h2>
                         </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="award-images">
                                    <?php echo types_render_field('award-logo-1', array());  ?>
                                    <?php echo types_render_field('award-logo-2', array());  ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="award-images">
                                    <?php echo types_render_field('award-logo-3', array());  ?>
                                    <?php echo types_render_field('award-logo-4', array());  ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="award-images">
                                    <?php echo types_render_field('award-logo-5', array());  ?>
                                    <?php echo types_render_field('award-logo-6', array());  ?>
                                </div>
                            </div>                            
                        </div>
                         <div class='awards-heading'>
                             <h2>Memberships</h2>
                         </div>    
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="award-images">
                                    <?php echo types_render_field('membership-logo-1', array());  ?>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="award-images">
                                    <?php echo types_render_field('membership-logo-2', array());  ?>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="award-images">
                                    <?php echo types_render_field('membership-logo-3', array());  ?>

                                </div>
                            </div>                            
                        </div>                        
                    </div>
                </div>  
        </div><!-- .entry-content -->	
    </div><!-- .top-section -->
    </article><!-- #post-## -->
</div><!-- .post-inner-content -->