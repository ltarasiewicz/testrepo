<?php
/**
 * The template used for displaying custom post type (home-style) content 
 * 
 * @package sparkling
 */
?>

<?php
    $currentId = get_the_ID();
    $intoductoryText = get_post_meta($currentId, 'wpcf-homestyles-intoductory-text', true);
?>

<div class="post-inner-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<h1 class="entry-title"><?php //the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content fixed-margin container">
            
            <div class="row">                
                <div class="col-md-offset-4 col-md-8">
                    <div class="intro-block">
                        <p><?php echo $intoductoryText; ?></p>
                        
                    </div>                  
                </div>
                <div class="col-md-4 marginalized">
                    <h3><?php the_title(); ?></h3>
                </div>                 
            </div>
            
                <?php //the_content(); ?>
                <?php 
                $currentCategory = get_the_category();
                    $query = new WP_Query( array( 'post_type' => 'project', 'category__in' => $currentCategory[0]->cat_ID) );
                    if ($query->have_posts()) :
                        $thumbnails = [];
                        $i = 0;
                        while ($query->have_posts()) : $query->the_post();
                            if ( (function_exists( 'has_post_thumbnail' )) && ( has_post_thumbnail() ) ) :
                              $thumbnails[$i] = get_the_post_thumbnail($post->ID, 'full-size');
                            endif;
                            $permalinks[$i] = get_permalink();
                            $homestylesPosts[$i] = get_post();
                            $i++;                         
                        endwhile;                        
                    endif;    
                    
                    if( isset($thumbnails) ) {
                    
                        $lists = array_chunk($thumbnails, 2);
                        $x = 0;  
                            foreach ($lists as $items) {
                                echo '<div class="row row-margin">';                                                           
                                    foreach ($items as $item) {                                                                                                              
                                        echo '<div class="col-md-6">';
                                            echo '<div class="homestyle-tile">';
                                                echo $item;  
                                                echo '<a href="' . $permalinks[$x] . '">' . $homestylesPosts[$x]->post_title . '</a>';
                                            echo '</div>';    
                                        echo '</div>';   
                                        $x++;
                                    }                                                                                                                             
                                echo '</div>'; 
                            }    
                    } else {
                        echo 'There are no projects available.';
                    }       
                ?>
	</div><!-- .entry-content -->	
</article><!-- #post-## -->
</div>
