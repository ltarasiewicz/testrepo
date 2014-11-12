<?php
/**
 * The template used for displaying page content in page-homestyles.php
 *
 * @package sparkling
 */
?>

<?php the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?>

<div class="post-inner-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content fixed-margin container">
            <header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->
            <div class="row">
                <div class="col-sm-4">
                    <div id="stage-1">
                        <div id="stage-1-description" style='background-image: 
                             url("<?php echo types_render_field( 'stage-1-background-image', 
                                     array( 'output' => 'raw', 
                                            'width' => '400', 
                                            'height' => '400') ); ?>");'>
                            <h1>1</h1>
                            <div class="stages-content-area">
                                <h3><?php echo types_render_field( 'stage-1-title', array( ) ); ?></h3>
                                <p> <?php echo types_render_field( 'stage-1-description', array( ) ); ?> </p>
                            </div>    
                        </div>
                        <div class="overlay"></div>
                        <div id="stage-1-picture">
                            <?php echo types_render_field( 'stage-1-picture', array( 'width' => '400', 'proportional' => true ) ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="stage-2">
                        <div id="stage-2-picture">
                            <?php echo types_render_field( 'stage-2-picture', array( 'width' => '400', 'proportional' => true ) ); ?>
                        </div>                        
                        <div id="stage-2-description">
                            <h1>2</h1>
                            <div class="stages-content-area">
                                <h3><?php echo types_render_field( 'stage-2-title', array( ) ); ?></h3>
                                <p> <?php echo types_render_field( 'stage-2-description', array( ) ); ?> </p>
                            </div> 
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="stage-3">
                        <div id="stage-3-description" style='background-image: 
                             url("<?php echo types_render_field( 'stage-3-background-image', 
                                     array( 'output' => 'raw', 
                                            'width' => '400', 
                                            'height' => '400') ); ?>");'>
                            <h1>3</h1>
                            <div class="stages-content-area">
                                <h3><?php echo types_render_field( 'stage-3-title', array( ) ); ?></h3>
                                <p> <?php echo types_render_field( 'stage-3-description', array( ) ); ?> </p>
                            </div> 
                        </div>
                        <div class="overlay"></div>
                        <div id="stage-3-picture">
                            <?php echo types_render_field( 'stage-3-picture', array( 'width' => '400', 'proportional' => true ) ); ?>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div id="stage-4">
                        <div id="stage-4-description" style='background-image: 
                             url("<?php echo types_render_field( 'stage-4-background-image', 
                                     array( 'output' => 'raw', 
                                            'width' => '400', 
                                            'height' => '400') ); ?>");'>
                            <h1>4</h1>
                            <div class="stages-content-area">
                                <h3><?php echo types_render_field( 'stage-4-title', array( ) ); ?></h3>
                                <p> <?php echo types_render_field( 'stage-4-description', array( ) ); ?> </p>
                            </div> 
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-sm-4">                  
                    <div id="stage-5">
                        <div id="stage-5-picture">
                            <?php echo types_render_field( 'stage-5-picture', array( 'width' => '400', 'proportional' => true ) ); ?>
                        </div>                          
                        <div id="stage-5-description" style='background-image: 
                             url("<?php echo types_render_field( 'stage-5-background-image', 
                                     array( 'output' => 'raw', 
                                            'width' => '400', 
                                            'height' => '400') ); ?>");'>
                            <h1>5</h1>
                            <div class="stages-content-area">
                                <h3><?php echo types_render_field( 'stage-5-title', array( ) ); ?></h3>
                                <p> <?php echo types_render_field( 'stage-5-description', array( ) ); ?> </p>
                            </div> 
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="stage-6">
                        <div id="stage-6-description" style='background-image: 
                             url("<?php echo types_render_field( 'stage-6-background-image', 
                                     array( 'output' => 'raw', 
                                            'width' => '400', 
                                            'height' => '400') ); ?>");'>
                            <h1>6</h1>
                            <div class="stages-content-area">
                                <h3><?php echo types_render_field( 'stage-6-title', array( ) ); ?></h3>
                                <p> <?php echo types_render_field( 'stage-6-description', array( ) ); ?> </p>
                            </div> 
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>                
            </div>            
		

	</div><!-- .entry-content -->	
</article><!-- #post-## -->
</div>