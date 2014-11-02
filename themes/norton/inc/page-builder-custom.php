<?php

function homePage_panels_row_styles($styles) {
	$styles['homePage'] = __('Home Page', 'sparkling');
	return $styles;
}
add_filter('siteorigin_panels_row_styles', 'homePage_panels_row_styles');