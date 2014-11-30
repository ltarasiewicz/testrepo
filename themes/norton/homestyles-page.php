<?php
/**
 * The template used for displaying page content in page-homestyles.php
 *
 * @package sparkling
 */
?>

<div class="post-inner-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
        <div class="entry-content fixed-margin container reduced-padding">
            <header class="entry-header page-header">
                <div class="row">                
                    <div class="col-md-offset-4 col-md-8">
                        <div class="intro-block">
                            <p><?php echo the_content(); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4 marginalized">
                        <h1><?php the_title(); ?></h1>
                    </div>                
                </div>            
            </header><!-- .entry-header -->                   
                <?php
                    $query = new WP_Query( array( 'post_type' => 'home-style' ) );
                    if ($query->have_posts()) :
                        $thumbnails = [];
                        $i = 0;
                        while ($query->have_posts()) : $query->the_post();
                            if ( (function_exists( 'has_post_thumbnail' )) && ( has_post_thumbnail() ) ) :
                              $thumbnails[$i] = get_the_post_thumbnail( $post->ID, 'full');
                            endif;
                            $permalinks[$i] = get_permalink();
                            $homestylesPosts[$i] = get_post();
                            $i++;                         
                        endwhile;
                    endif;                

                    $lists = array_chunk($thumbnails, 3);
                    $x = 0;  
                        foreach ($lists as $items) {
                            echo '<div class="row row-margin">';
                                foreach ($items as $item) {                                                                                                              
                                    echo '<div class="col-md-4">';
                                        echo '<div class="picture-tile-group">';
                                            echo '<div class="homestyle-tile">';
                                                echo '<div class="homestyles-page-picture-tile">' . $item . '</div>';
                                                echo '<a href="' . $permalinks[$x] . '">' 
                                                        . '<h6>' . $homestylesPosts[$x]->post_title . '</h6>' .
                                                        '<div class="picture-tiles-overlay"></div>' . 
                                                        '</a>';
                                            echo '</div>';
                                        echo '</div>';      
                                    echo '</div>';   
                                    $x++;
                                }                                                                                         
                            echo '</div>'; 
                        }        
                ?>
        </div><!-- .entry-content -->	
    </div> <!-- .top-section -->
    </article><!-- #post-## -->
</div>