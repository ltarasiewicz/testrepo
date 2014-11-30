<?php
/**
 * The template used for displaying custom post type (project) content 
 * 
 * @package sparkling
 */
?>

<?php
/*
 * Make first letter of the category name upper case;
 */
$postID = get_the_ID();
$postCategory = get_the_category($postID);  
$postCategoryArray = explode(' ', $postCategory[0]->name);

if ( count($postCategoryArray) > 1 ) {
    array_walk($postCategoryArray, function(&$item) {
        $item = ucfirst($item);
    });
}
$categoryName = implode(' ', $postCategoryArray);

?>

<div class="post-inner-content pull-up">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="top-section">
	<header class="entry-header page-header">
            <div id="projectSliders">
                <div class="row no-gutter">                              
                    <div class="col-sm-3">
                        <?php projectSecondarySlider(); ?>
                    </div>
                    <div class="col-sm-9 main-project-slider">
                        <?php projectMainSlider(); ?>
                        <h1 class="main-heading">More <?php echo $categoryName;  ?> Projects</h1>
                    </div>                                
                </div>
            </div> 
	</header><!-- .entry-header -->

	<div class="entry-content">    
                <?php 
                $currentCategory = get_the_category();                
                    $query = new WP_Query( array( 'post_type' => 'project', 'cat' => $currentCategory[0]->cat_ID) );
                    if ($query->have_posts()) :
                        $thumbnails = [];
                        $i = 0;
                        while ($query->have_posts()) : $query->the_post();
                            if ( (function_exists( 'has_post_thumbnail' )) && ( has_post_thumbnail() ) ) :
                              $thumbnails[$i] = get_the_post_thumbnail($post->ID, 'full');
                            endif;
                            $permalinks[$i] = get_permalink();
                            $homestylesPosts[$i] = get_post();
                            $i++;                         
                        endwhile;                        
                    endif;                
                    
                    $lists = array_chunk($thumbnails, 2);
                    $x = 0;  
                                foreach ($lists as $items) {
                                    echo '<div class="row row-margin single-project-row">';  
                                        echo '<div class="col-9-sm col-sm-offset-3" >';
                                            foreach ($items as $item) {                                                                                                              
                                                echo '<div class="col-sm-6">';
                                                    echo '<div class="picture-tile-group">';
                                                        echo '<div class="homestyle-tile project-tile">';
                                                            
                                                                echo '<div class="project-single-picture-tile">' . $item . '</div>';
                                                                echo '<h3 class="on-mobile">' . $homestylesPosts[$x]->post_title . '</h4>';
                                                                echo '<div class="static-overlay-on-mobile"></div>';
                                                                echo '<a href="' . $permalinks[$x] . '">' .
                                                                        
                                                                    '<h4>' . $homestylesPosts[$x]->post_title . '</h4>' . 
                                                                    '<h5>' . types_render_field( 'project-slider-caption', array('id' => $post->ID) ) . '</h5>' . 
                                                                    '<div class="picture-tiles-overlay"></div>' . 
                                                                        
                                                                    '</a>';
                                                        echo '</div>';
                                                    echo '</div>';     
                                                echo '</div>';   
                                                $x++;
                                            }  
                                        echo '</div>';    
                                    echo '</div>'; 
                                }         
                ?>
	</div><!-- .entry-content -->
    </div><!-- .top-section -->    
</article><!-- #post-## -->
</div>
