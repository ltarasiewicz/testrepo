<?php
/**
 * The template used for displaying page content in page-process.php
 *
 * @package sparkling
 */
?>

<div class="post-inner-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content fixed-margin container reduced-padding">
            <header class="entry-header page-header">
                <?php get_template_part('partials/intro', 'text'); ?>
                <div class='row'>
                    <div class="col-md-4 marginalized">
                        <h1><?php the_title(); ?></h1>
                    </div>   
                </div>                 
            </header>   
            <div id="process-page-content">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="stage">
                            <div class="stage-description" style='background-image: 
                                 url("<?php echo types_render_field( 'stage-1-background-image', 
                                         array( 'output' => 'raw', 
                                                'width' => 400, 
                                                'height' => 400,
                                                'proportional' => false) ); ?>");'>
                                <h2>1</h2>
                                <h3 class="small-number">Number 1</h3>
                                <div class="stages-content-area">
                                    <h3><?php echo types_render_field( 'stage-1-title', array( ) ); ?></h3>
                                    <p> <?php echo types_render_field( 'stage-1-description', array( ) ); ?> </p>
                                </div>    
                            </div>
                            <div class="overlay"></div>
                            <div id="stage-1-picture">
                                <?php echo types_render_field( 'stage-1-picture', array( 'width' => 400, 'height' => 166, 'proportional' => false ) ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="stage">
                            <div id="stage-2-picture">
                                <?php echo types_render_field( 'stage-2-picture', array( 'width' => 400, 'height' => 166, 'proportional' => false ) ); ?>
                            </div>                        
                            <div class="stage-description">
                                <h2>2</h2>
                                <h3 class="small-number">Number 2</h3>
                                <div class="stages-content-area">
                                    <h3><?php echo types_render_field( 'stage-2-title', array( ) ); ?></h3>
                                    <p> <?php echo types_render_field( 'stage-2-description', array( ) ); ?> </p>
                                </div> 
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="stage">
                            <div class="stage-description" style='background-image: 
                                 url("<?php echo types_render_field( 'stage-3-background-image', 
                                         array( 'output' => 'raw', 
                                                'width' => 400, 
                                                'height' => 400,
                                                'proportional' => false) ); ?>");'>
                                <h2>3</h2>
                                <h3 class="small-number">Number 3</h3>
                                <div class="stages-content-area">
                                    <h3><?php echo types_render_field( 'stage-3-title', array( ) ); ?></h3>
                                    <p> <?php echo types_render_field( 'stage-3-description', array( ) ); ?> </p>
                                </div> 
                            </div>
                            <div class="overlay"></div>
                            <div id="stage-3-picture">
                                <?php echo types_render_field( 'stage-3-picture', array( 'width' => 400, 'height' => 166, 'proportional' => false ) ); ?>
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="stage">
                            <div class="stage-description" style='background-image: 
                                 url("<?php echo types_render_field( 'stage-4-background-image', 
                                         array( 'output' => 'raw', 
                                                'width' => 400, 
                                                'height' => 400,
                                                'proportional' => false) ); ?>");'>
                                <h2>4</h2>
                                <h3 class="small-number">Number 4</h3>
                                <div class="stages-content-area">
                                    <h3><?php echo types_render_field( 'stage-4-title', array( ) ); ?></h3>
                                    <p> <?php echo types_render_field( 'stage-4-description', array( ) ); ?> </p>
                                </div> 
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">                  
                        <div class="stage">
                            <div id="stage-5-picture">
                                <?php echo types_render_field( 'stage-5-picture', array( 'width' => 400, 'height' => 166, 'proportional' => false ) ); ?>
                            </div>                          
                            <div class="stage-description" style='background-image: 
                                 url("<?php echo types_render_field( 'stage-5-background-image', 
                                         array( 'output' => 'raw', 
                                                'width' => 400, 
                                                'height' => 400,
                                                'proportional' => false) ); ?>");'>
                                <h2>5</h2>
                                <h3 class="small-number">Number 5</h3>
                                <div class="stages-content-area">
                                    <h3><?php echo types_render_field( 'stage-5-title', array( ) ); ?></h3>
                                    <p> <?php echo types_render_field( 'stage-5-description', array( ) ); ?> </p>
                                </div> 
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="stage">
                            <div class="stage-description" style='background-image: 
                                 url("<?php echo types_render_field( 'stage-6-background-image', 
                                         array( 'output' => 'raw', 
                                                'width' => 400, 
                                                'height' => 400,
                                                'proportional' => false) ); ?>");'>
                                <h2>6</h2>
                                <h3 class="small-number">Number 6</h3>
                                <div class="stages-content-area">
                                    <h3><?php echo types_render_field( 'stage-6-title', array( ) ); ?></h3>
                                    <p> <?php echo types_render_field( 'stage-6-description', array( ) ); ?> </p>
                                </div> 
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>                
                </div>   
            </div>    
        </div><!-- .entry-content -->	
    </div><!-- .top-section -->
    </article><!-- #post-## -->
</div><!-- .post-inner-content -->