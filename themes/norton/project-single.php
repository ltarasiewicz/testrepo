<?php
/**
 * The template used for displaying custom post type (project) content 
 * 
 * @package sparkling
 */
?>

<div class="post-inner-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
            <div id="sliders">
                <div class="row no-gutter">                              
                    <div class="col-md-9">
                        
                    </div>
                    <div class="col-md-3">
                        
                    </div>                                
                </div>
            </div> 
	</header><!-- .entry-header -->

	<div class="entry-content fixed-margin container">
                       
                <?php //the_content(); ?>
                <?php 
                $currentCategory = get_the_category();                
                    $query = new WP_Query( array( 'post_type' => 'project', 'cat' => $currentCategory[0]->cat_ID) );
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
                ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sparkling' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'sparkling' ), '<footer class="entry-footer"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
</div>
