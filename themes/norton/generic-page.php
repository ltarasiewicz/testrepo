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
                         <div class='first-text-widget'>
                             <p><?php  echo types_render_field('first-paragraph', array('output' => 'raw')); ?></p>
                         </div>
                    </div>
                </div>  
                <div class="row marginalized generic">
                    <div class='col-sm-8'>
                        <div class="large-image">
                            <?php echo types_render_field('large-image', array()); ?>
                        </div>
                    </div>
                        <div class='col-sm-4 col-xs-12'> 
                            <div class="row">
                                <div class="col-sm-12 col-xs-6 less-padding-right">
                                    <div class="small-image">
                                        <?php echo types_render_field('small-image-1', array('height' => 251, 'align' => 'right'));?>                      
                                    </div>
                                </div>
                                <div class="col-sm-12 col-xs-6 less-padding-left">
                                    <div class="small-image">
                                        <?php echo types_render_field('small-image-2', array('height' => 251, 'align' => 'right'));?>                      
                                    </div>
                                </div>                                
                            </div>
                        </div>                           
                </div>
                <div class="row">
                    <div class='col-sm-8 col-sm-offset-4'>
                         <div class='second-text-widget'>
                             <p><?php  echo types_render_field('second-paragraph', array('output' => 'raw')); ?></p>
                         </div>
                    </div>     
                </div>
        </div><!-- .entry-content -->	
    </div><!-- .top-section -->
    </article><!-- #post-## -->
</div><!-- .post-inner-content -->