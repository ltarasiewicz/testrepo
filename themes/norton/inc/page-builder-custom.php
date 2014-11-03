<?php

function homePage_panels_row_styles($styles) {
	$styles['homePage'] = __('Home Page', 'sparkling');
	return $styles;
}
add_filter('siteorigin_panels_row_styles', 'homePage_panels_row_styles');

function myPages_panels_row_styles($styles) {
	$styles['myPages'] = __('My Pages', 'sparkling');
	return $styles;
}
add_filter('siteorigin_panels_row_styles', 'myPages_panels_row_styles');

function myTestimonials_panels_row_styles($styles) {
	$styles['myTestimonials'] = __('Testimonials', 'sparkling');
	return $styles;
}
add_filter('siteorigin_panels_row_styles', 'myTestimonials_panels_row_styles');

function myAwards_panels_row_styles($styles) {
	$styles['myAwards'] = __('Awards', 'sparkling');
	return $styles;
}
add_filter('siteorigin_panels_row_styles', 'myAwards_panels_row_styles');