<?php
/**
 * The template used for displaying page content in generic-page.php
 *
 * @package sparkling
 */
?>
<?php
    $quotes = get_post_meta($post->ID, 'wpcf-quote-1', false);
    $reviewers = get_post_meta($post->ID, 'wpcf-reviewer-1', false);
    $reviews = get_post_meta($post->ID, 'wpcf-review-1', false);
    $counter = count($reviewers);
    for ($i=0; $i<$counter; $i++) {
        $combined[$i]['quote'] = $quotes[$i];
        $combined[$i]['reviewer'] = $reviewers[$i];
        $combined[$i]['review'] = $reviews[$i];
    }
?>

<div class="post-inner-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content fixed-margin container reduced-padding">
            <header class="entry-header page-header">
                <?php get_template_part('partials/intro', 'text'); ?>
            </header>  
                <div id="testimonials-content">
                    <h1><?php the_title(); ?></h1>
                    <?php foreach ($combined as $testimonial) : ?>                                        
                        <div class='row'> 
                            <div class="testimonial">
                                <div class="col-sm-4">
                                    <div class="quote">
                                        <?php 
                                           echo $testimonial['quote'];
                                        ?>
                                    </div>
                                </div>   
                                <div class="col-sm-8">
                                    <div class="review">
                                        <h3><?php echo $testimonial['reviewer']; ?></h3>
                                        <p><?php echo $testimonial['review']; ?></p>
                                    </div>
                                </div>   
                            </div>    
                        </div>  
                    <?php endforeach; ?>   
                </div>    
        </div><!-- .entry-content -->	
    </div><!-- .top-section -->
    </article><!-- #post-## -->
</div><!-- .post-inner-content -->