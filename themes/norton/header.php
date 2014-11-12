<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- favicon -->

<?php if ( of_get_option( 'custom_favicon' ) ) { ?>
<link rel="icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" />
<?php } ?>

<!--[if IE]><?php if ( of_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <div class="row no-gutter">
                            <div class="site-navigation-inner col-sm-12">
                                <div class="navbar-header">
                                    <button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                        <?php if( get_header_image() != '' ) : ?>

                                                <div id="logo">
                                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
                                                </div><!-- end of #logo -->

                                        <?php endif; // header image was removed ?>

                                        <?php if( !get_header_image() ) : ?>

                                                <div id="logo" class="clearfix">
                                                    <span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                                                </div><!-- end of #logo -->

                                        <?php endif; // header image was removed (again) ?>
                                </div>
					<?php sparkling_header_menu(); ?>
                            </div>
                        </div>
		  </div><!--/.container-fluid -->
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content container-fluid no-overflow">

			<div class="top-section">                            
                            <div id="sliders">
                            
                                    
                                    <div class="row no-gutter">                              
                                        <div class="col-sm-9">
                                            <?php 
                                                if ( is_front_page() ) {
                                                    sparkling_featured_slider(); 
                                                }                                                                                      
                                            ?>
                                            <?php //sparkling_call_for_action(); ?>
                                        </div>
                                        <div class="col-sm-3">                                            
                                            <?php 
                                                if ( is_front_page() ) {
                                                    rotatingLeader_featured_slider(); 
                                                }                                            
                                            ?>
                                        </div>                                
                                    </div>
                                    
                            
                            </div>   

		<div class="container-fluid main-content-area">
			<div class="row no-gutter">
				<div id="content" class="main-content-inner col-sm-12 col-md-12 <?php echo of_get_option( 'site_layout' ); ?>">