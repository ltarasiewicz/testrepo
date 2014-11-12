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
	<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content fixed-margin container">
            <div class="row">
                <div class="col-sm-4">
                    <div id="stage-1">
                        <div id="stage-1-description">
                            <h1>1</h1>
                            <h3>Trelefel</h3>
                        </div>
                        <div id="stage-1-picture">
                            <img src="http://lorempixel.com/400/174/" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="stage-2">
                        <div id="stage-2-picture">
                            <img src="http://lorempixel.com/400/174/" />
                        </div>                        
                        <div id="stage-2-description">
                            <h1>2</h1>
                            <h3>Trelefel</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="stage-3">
                        <div id="stage-3-description">
                            <h1>3</h1>
                            <h3>Trelefel</h3>
                        </div>
                        <div id="stage-3-picture">
                            <img src="http://lorempixel.com/400/174/" />
                        </div>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div id="stage-4">
                        <div id="stage-4-description">
                            <h1>4</h1>
                            <h3>Trelefel</h3>
                            <p>Lorem ipsum </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                        <div id="stage-5-picture">
                            <img src="http://lorempixel.com/400/174/" />
                        </div>                    
                    <div id="stage-5">
                        <div id="stage-5-description">
                            <h1>5</h1>
                            <h3>Trelefel</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="stage-6">
                        <div id="stage-6-description">
                            <h1>6</h1>
                            <h3>Trelefel</h3>
                        </div>
                    </div>
                </div>                
            </div>            
		

	</div><!-- .entry-content -->	
</article><!-- #post-## -->
</div>