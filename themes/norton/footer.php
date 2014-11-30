<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

	<div id="footer-area">
		<div class="container-fluid footer-inner">
			<div class="row no-gutter">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container-fluid">
				<div class="row no-gutter">
					<?php //sparkling_social(); ?>
<!--					<nav role="navigation" class="col-md-6">
						<?php //sparkling_footer_links(); ?>
                                                
					</nav>-->
                                        <div class="col-sm-9">
                                            <ul>
                                                <li>Copyright &copy; Norton Builders <?php echo date('Y');  ?></li>
                                                <li><img src="<?php echo esc_url( home_url( '/' )) ?>wp-content/uploads/2014/11/footer-logo-1.jpg"/></li> 
                                                <li><img src="<?php echo esc_url( home_url( '/' )) ?>wp-content/uploads/2014/11/footer-logo-2.jpg"/></li> 
                                            </ul>
                                            
                                        </div>
					<div class="copyright col-sm-3">
						<?php echo '<p>' . of_get_option( 'custom_footer_text', 'sparkling' ) . '</p>'; ?>
						<?php //sparkling_footer_info(); ?>
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>