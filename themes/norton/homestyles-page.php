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
		<h1 class="entry-title"><?php //the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
                
            <div class="panel-grid">
                <div class="panel-row-style-myPages panel-row-style" id="homestylesPage">
                    <div class="panel-grid-cell">&nbsp;</div>
                    <div class="panel-grid-cell">
                        <div class="panel widget widget_black-studio-tinymce panel-first-child panel-last-child">
                            <div class="textwidget">
                                <p>Our designer homes whether they are contemporary, classical and modern or French provincial will reflect each client's individual style.</p>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            
            <div class="panel-grid">
                <div class="panel-row-style-myPages panel-row-style">                  
                    <div class="panel-grid-cell">
                        <div class="panel widget widget_text panel-first-child panel-last-child">
                            <h3 class="widget-title">Homestyles</h3>
                            <div class="textwidget"></div>
                        </div>
                    </div>
                    <div class="panel-grid-cell">&nbsp;</div>
                </div>                
            </div>
                
                <?php
                    $query = new WP_Query( array( 'post_type' => 'home-style' ) );
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
                    
                    $lists = array_chunk($thumbnails, 3);
                    $x = 0;  
                                foreach ($lists as $items) {
                                    echo '<div class="panel-grid">';
                                        echo '<div class="panel-row-style-myHomestyles panel-row-style">';                     
                                                foreach ($items as $item) {                                                                                                              
                                                    echo '<div class="panel-grid-cell">';
                                                        echo '<div class="homestyle-tile">';
                                                            echo $item;  
                                                            echo '<a href="' . $permalinks[$x] . '">' . $homestylesPosts[$x]->post_title . '</a>';
                                                        echo '</div>';    
                                                    echo '</div>';   
                                                    $x++;
                                                }                                                                                         
                                        echo '</div>'; 
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