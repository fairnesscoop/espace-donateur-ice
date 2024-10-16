<?php
	
	$ts_charity_theme_color = get_theme_mod('ts_charity_theme_color');

	$ts_charity_custom_css = '';

	$ts_charity_custom_css .='a.button, .topbar, #footer input[type="submit"],  #slider .carousel-caption .more-btn a, #slider .carousel-caption .more-btn, #sidebar h3, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current,.woocommerce button.button, .woocommerce button.button.alt, .woocommerce a.button,.woocommerce a.button.alt, .footer-bor-two, #footer .tagcloud a:hover, .content-bttn .second-border a, .content-bttn .second-border, .content-bttn .second-border:hover,#menu-sidebar input[type="submit"],.tags p a:hover,.meta-nav:hover,#comments a.comment-reply-link, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce a.button:hover, .post-categories li a, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .wp-block-button__link, #sidebar .widget_block h2, #sidebar #block-2 button[type="submit"], .page-links .post-page-numbers.current, .page-links a:hover, #sidebar .widget_block.widget_tag_cloud a:hover, .page-box-single .wp-block-tag-cloud a:hover, #footer .widget_block.widget_tag_cloud a:hover{';
		$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_theme_color).';';
	$ts_charity_custom_css .='}';

	$ts_charity_custom_css .='input[type="submit"], .social-media i:hover, .woocommerce-message::before, .woocommerce #respond input#submit .woocommerce input.button,.woocommerce #respond input#submit.alt,  .woocommerce input.button.alt, .causes-box:hover h4,.causes-box:hover i,.our-services .page-box:hover h4 a, #slider .inner_carousel h2 a, h1.entry-title, #footer li a:hover,#slider .inner_carousel h1 a,.primary-navigation a:focus,.metabox a:hover,.tags i,#sidebar ul li a:hover, .causes-box:hover h3 a, .causes-box:hover h3, .causes-box:hover i, .our-services .page-box:hover h3 a, .primary-navigation ul li a:focus{';
		$ts_charity_custom_css .='color: '.esc_attr($ts_charity_theme_color).';';
	$ts_charity_custom_css .='}';

	$ts_charity_custom_css .='.primary-navigation ul ul{';
		$ts_charity_custom_css .='border-top-color: '.esc_attr($ts_charity_theme_color).'!important;';
	$ts_charity_custom_css .='}';

	$ts_charity_custom_css .='.search-box span, #footer input[type="search"], .footer-bor-two,.primary-navigation ul ul,.tags p a:hover, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, #sidebar .widget_block.widget_tag_cloud a:hover, .page-box-single .wp-block-tag-cloud a:hover, #footer .widget_block.widget_tag_cloud a:hover, #sidebar .tagcloud a:hover, #footer .tagcloud a:hover{';
		$ts_charity_custom_css .='border-color: '.esc_attr($ts_charity_theme_color).';';
	$ts_charity_custom_css .='}';

	$ts_charity_custom_css .='nav.woocommerce-MyAccount-navigation ul li, .blogbutton-small:hover,  #comments input[type="submit"].submit, .bradcrumbs a, .bradcrumbs span{';
		$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_theme_color).'!important;';
	$ts_charity_custom_css .='}';

	$ts_charity_custom_css .='td.product-name a, a.shipping-calculator-button, .woocommerce-info a:hover, .woocommerce-privacy-policy-text a{';
		$ts_charity_custom_css .='color: '.esc_attr($ts_charity_theme_color).' !important;';
	$ts_charity_custom_css .='}';
	

	// media
	$ts_charity_custom_css .='@media screen and (max-width:1000px) {';
	if($ts_charity_theme_color){
	$ts_charity_custom_css .='#contact-info, #menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul ul ul{
	background-image: linear-gradient(-90deg, #000 0%, '.esc_attr($ts_charity_theme_color).' 120%);
		}';
	}
	$ts_charity_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$ts_charity_theme_lay = get_theme_mod( 'ts_charity_theme_options','Default');
    if($ts_charity_theme_lay == 'Default'){
		$ts_charity_custom_css .='body{';
			$ts_charity_custom_css .='max-width: 100%;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_theme_lay == 'Container'){
		$ts_charity_custom_css .='body{';
			$ts_charity_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$ts_charity_custom_css .='}';
		$ts_charity_custom_css .='.serach_outer{';
			$ts_charity_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_theme_lay == 'Box Container'){
		$ts_charity_custom_css .='body{';
			$ts_charity_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$ts_charity_custom_css .='}';
		$ts_charity_custom_css .='.serach_outer{';
			$ts_charity_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$ts_charity_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$ts_charity_theme_lay = get_theme_mod( 'ts_charity_slider_content_alignment','Left');
    if($ts_charity_theme_lay == 'Left'){
		$ts_charity_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p,#slider .carousel-caption .more-btn{';
			$ts_charity_custom_css .='text-align:left; left:15%; right:15%;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_theme_lay == 'Center'){
		$ts_charity_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p,#slider .carousel-caption .more-btn{';
			$ts_charity_custom_css .='text-align:center; left:20%; right:20%;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_theme_lay == 'Right'){
		$ts_charity_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p,#slider .carousel-caption .more-btn{';
			$ts_charity_custom_css .='text-align:right; left:15%; right:15%;';
		$ts_charity_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$ts_charity_theme_lay = get_theme_mod( 'ts_charity_slider_image_opacity','0.6');
	if($ts_charity_theme_lay == '0'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0';
		$ts_charity_custom_css .='}';
		}else if($ts_charity_theme_lay == '0.1'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0.1';
		$ts_charity_custom_css .='}';
		}else if($ts_charity_theme_lay == '0.2'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0.2';
		$ts_charity_custom_css .='}';
		}else if($ts_charity_theme_lay == '0.3'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0.3';
		$ts_charity_custom_css .='}';
		}else if($ts_charity_theme_lay == '0.4'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0.4';
		$ts_charity_custom_css .='}';
		}else if($ts_charity_theme_lay == '0.5'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0.5';
		$ts_charity_custom_css .='}';
		}else if($ts_charity_theme_lay == '0.6'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0.6';
		$ts_charity_custom_css .='}';
		}else if($ts_charity_theme_lay == '0.7'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0.7';
		$ts_charity_custom_css .='}';
		}else if($ts_charity_theme_lay == '0.8'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0.8';
		$ts_charity_custom_css .='}';
		}else if($ts_charity_theme_lay == '0.9'){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:0.9';
		$ts_charity_custom_css .='}';
	}

	/*------------------------------ Button Settings option-----------------------*/
	$ts_charity_button_padding_top_bottom = get_theme_mod('ts_charity_button_padding_top_bottom');
	$ts_charity_button_padding_left_right = get_theme_mod('ts_charity_button_padding_left_right');
	$ts_charity_custom_css .='.content-bttn .second-border a, #slider .carousel-caption .more-btn a, #comments .form-submit input[type="submit"]{';
		$ts_charity_custom_css .='padding-top: '.esc_attr($ts_charity_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($ts_charity_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($ts_charity_button_padding_left_right).'px !important; padding-right: '.esc_attr($ts_charity_button_padding_left_right).'px !important; display:inline-block;';
	$ts_charity_custom_css .='}';

	$ts_charity_button_border_radius = get_theme_mod('ts_charity_button_border_radius');
	$ts_charity_custom_css .='.content-bttn .second-border a, .content-bttn .second-border, #slider .carousel-caption .more-btn a,#slider .carousel-caption .more-btn, #comments .form-submit input[type="submit"]{';
		$ts_charity_custom_css .='border-radius: '.esc_attr($ts_charity_button_border_radius).'px;';
	$ts_charity_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/
	$ts_charity_stickyheader = get_theme_mod( 'ts_charity_responsive_sticky_header',false);
	if($ts_charity_stickyheader == true && get_theme_mod( 'ts_charity_sticky_header', false) == false){
    	$ts_charity_custom_css .='.fixed-header{';
			$ts_charity_custom_css .='position:static;';
		$ts_charity_custom_css .='} ';
	}
    if($ts_charity_stickyheader == true){
    	$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='.fixed-header{';
			$ts_charity_custom_css .='position:fixed;';
		$ts_charity_custom_css .='} }';
	}else if($ts_charity_stickyheader == false){
		$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='.fixed-header{';
			$ts_charity_custom_css .='position:static;';
		$ts_charity_custom_css .='} }';
	}

	$ts_charity_slider = get_theme_mod( 'ts_charity_responsive_slider',true);
	if($ts_charity_slider == true && get_theme_mod( 'ts_charity_slider_hide_show', false) == false){
    	$ts_charity_custom_css .='#slider{';
			$ts_charity_custom_css .='display:none;';
		$ts_charity_custom_css .='} ';
	}
    if($ts_charity_slider == true){
    	$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='#slider{';
			$ts_charity_custom_css .='display:block;';
		$ts_charity_custom_css .='} }';
	}else if($ts_charity_slider == false){
		$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='#slider{';
			$ts_charity_custom_css .='display:none;';
		$ts_charity_custom_css .='} }';
	}

	$ts_charity_scroll = get_theme_mod( 'ts_charity_responsive_scroll',true);
	if($ts_charity_scroll == true && get_theme_mod( 'ts_charity_enable_disable_scroll', true) == false){
    	$ts_charity_custom_css .='#scroll-top{';
			$ts_charity_custom_css .='display:none !important;';
		$ts_charity_custom_css .='} ';
	}
    if($ts_charity_scroll == true){
    	$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='#scroll-top{';
			$ts_charity_custom_css .='visibility: visible !important;';
		$ts_charity_custom_css .='} }';
	}else if($ts_charity_scroll == false){
		$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='#scroll-top{';
			$ts_charity_custom_css .='visibility: hidden !important;;';
		$ts_charity_custom_css .='} }';
	}

	$ts_charity_sidebar = get_theme_mod( 'ts_charity_responsive_sidebar',true);
    if($ts_charity_sidebar == true){
    	$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='#sidebar{';
			$ts_charity_custom_css .='display:block;';
		$ts_charity_custom_css .='} }';
	}else if($ts_charity_sidebar == false){
		$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='#sidebar{';
			$ts_charity_custom_css .='display:none;';
		$ts_charity_custom_css .='} }';
	}

	$ts_charity_loader = get_theme_mod( 'ts_charity_responsive_preloader', true);
	if($ts_charity_loader == true && get_theme_mod( 'ts_charity_preloader_option', true) == false){
    	$ts_charity_custom_css .='#loader-wrapper{';
			$ts_charity_custom_css .='display:none;';
		$ts_charity_custom_css .='} ';
	}
    if($ts_charity_loader == true){
    	$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='#loader-wrapper{';
			$ts_charity_custom_css .='display:block;';
		$ts_charity_custom_css .='} }';
	}else if($ts_charity_loader == false){
		$ts_charity_custom_css .='@media screen and (max-width:575px) {';
		$ts_charity_custom_css .='#loader-wrapper{';
			$ts_charity_custom_css .='display:none;';
		$ts_charity_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$ts_charity_theme_lay = get_theme_mod( 'ts_charity_background_skin_mode','Transparent Background');
    if($ts_charity_theme_lay == 'With Background'){
		$ts_charity_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .causes-box, .noresult-content{';
			$ts_charity_custom_css .='background-color: #fff; padding:10px;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_theme_lay == 'Transparent Background'){
		$ts_charity_custom_css .='.page-box-single{';
			$ts_charity_custom_css .='background-color: transparent;';
		$ts_charity_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$ts_charity_top_bottom_product_button_padding = get_theme_mod('ts_charity_top_bottom_product_button_padding', 14.5);
	$ts_charity_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$ts_charity_custom_css .='padding-top: '.esc_attr($ts_charity_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($ts_charity_top_bottom_product_button_padding).'px;';
	$ts_charity_custom_css .='}';

	$ts_charity_left_right_product_button_padding = get_theme_mod('ts_charity_left_right_product_button_padding', 14.5);
	$ts_charity_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$ts_charity_custom_css .='padding-left: '.esc_attr($ts_charity_left_right_product_button_padding).'px; padding-right: '.esc_attr($ts_charity_left_right_product_button_padding).'px;';
	$ts_charity_custom_css .='}';

	$ts_charity_product_button_border_radius = get_theme_mod('ts_charity_product_button_border_radius', 0);
	$ts_charity_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$ts_charity_custom_css .='border-radius: '.esc_attr($ts_charity_product_button_border_radius).'px;';
	$ts_charity_custom_css .='}';

	$ts_charity_show_related_products = get_theme_mod('ts_charity_show_related_products',true);
	if($ts_charity_show_related_products == false){
		$ts_charity_custom_css .='.related.products{';
			$ts_charity_custom_css .='display: none;';
		$ts_charity_custom_css .='}';
	}

	$ts_charity_show_wooproducts_border = get_theme_mod('ts_charity_show_wooproducts_border', true);
	if($ts_charity_show_wooproducts_border == false){
		$ts_charity_custom_css .='.products li{';
			$ts_charity_custom_css .='border: none;';
		$ts_charity_custom_css .='}';
	}

	$ts_charity_top_bottom_wooproducts_padding = get_theme_mod('ts_charity_top_bottom_wooproducts_padding',10);
	$ts_charity_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ts_charity_custom_css .='padding-top: '.esc_attr($ts_charity_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($ts_charity_top_bottom_wooproducts_padding).'px !important;';
	$ts_charity_custom_css .='}';

	$ts_charity_left_right_wooproducts_padding = get_theme_mod('ts_charity_left_right_wooproducts_padding',10);
	$ts_charity_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ts_charity_custom_css .='padding-left: '.esc_attr($ts_charity_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($ts_charity_left_right_wooproducts_padding).'px !important;';
	$ts_charity_custom_css .='}';

	$ts_charity_wooproducts_border_radius = get_theme_mod('ts_charity_wooproducts_border_radius',0);
	$ts_charity_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ts_charity_custom_css .='border-radius: '.esc_attr($ts_charity_wooproducts_border_radius).'px;';
	$ts_charity_custom_css .='}';

	$ts_charity_wooproducts_box_shadow = get_theme_mod('ts_charity_wooproducts_box_shadow',0);
	$ts_charity_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ts_charity_custom_css .='box-shadow: '.esc_attr($ts_charity_wooproducts_box_shadow).'px '.esc_attr($ts_charity_wooproducts_box_shadow).'px '.esc_attr($ts_charity_wooproducts_box_shadow).'px #eee;';
	$ts_charity_custom_css .='}';

	/*-------------- Footer Text -------------------*/

	$ts_charity_footer_heading = get_theme_mod( 'ts_charity_footer_heading','Left');
    if($ts_charity_footer_heading == 'Left'){
		$ts_charity_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$ts_charity_custom_css .='text-align: left;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_footer_heading == 'Center'){
		$ts_charity_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$ts_charity_custom_css .='text-align: center;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_footer_heading == 'Right'){
		$ts_charity_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$ts_charity_custom_css .='text-align: right;';
		$ts_charity_custom_css .='}';
	}

	$ts_charity_footer_content = get_theme_mod( 'ts_charity_footer_content','Left');
    if($ts_charity_footer_content == 'Left'){
		$ts_charity_custom_css .='#footer .widget{';
		$ts_charity_custom_css .='text-align: left;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_footer_content == 'Center'){
		$ts_charity_custom_css .='#footer .widget{';
			$ts_charity_custom_css .='text-align: center;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_footer_content == 'Right'){
		$ts_charity_custom_css .='#footer .widget{';
			$ts_charity_custom_css .='text-align: right;';
		$ts_charity_custom_css .='}';
	}

	// Footer Heading Font Size
	$ts_charity_footer_font_size = get_theme_mod('ts_charity_footer_font_size',24);
	$ts_charity_custom_css .='#footer h3{';
		$ts_charity_custom_css .='font-size: '.esc_attr($ts_charity_footer_font_size).'px;';
	$ts_charity_custom_css .='}';

	// Footer Heading Text Transform
	$ts_charity_theme_lay = get_theme_mod( 'ts_charity_footer_text_tranform','Uppercase');
    if($ts_charity_theme_lay == 'Uppercase'){
		$ts_charity_custom_css .='#footer h3{';
			$ts_charity_custom_css .='text-transform: uppercase;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_theme_lay == 'Lowercase'){
		$ts_charity_custom_css .='#footer h3{';
			$ts_charity_custom_css .='text-transform: lowercase;';
		$ts_charity_custom_css .='}';
	}
	else if($ts_charity_theme_lay == 'Capitalize'){
		$ts_charity_custom_css .='#footer h3{';
			$ts_charity_custom_css .='text-transform: capitalize;';
		$ts_charity_custom_css .='}';
	}
	
	$ts_charity_copyright_content_align = get_theme_mod('ts_charity_copyright_content_align');
	if($ts_charity_copyright_content_align != false){
		$ts_charity_custom_css .='.footer-bor-two{';
			$ts_charity_custom_css .='text-align: '.esc_attr($ts_charity_copyright_content_align).';';
		$ts_charity_custom_css .='}';
	}

	$ts_charity_footer_content_font_size = get_theme_mod('ts_charity_footer_content_font_size', 16);
	$ts_charity_custom_css .='.copyright p{';
		$ts_charity_custom_css .='font-size: '.esc_attr($ts_charity_footer_content_font_size).'px !important;';
	$ts_charity_custom_css .='}';

	$ts_charity_copyright_padding = get_theme_mod('ts_charity_copyright_padding', 15);
	$ts_charity_custom_css .='.footer-bor-two{';
		$ts_charity_custom_css .='padding-top: '.esc_attr($ts_charity_copyright_padding).'px; padding-bottom: '.esc_attr($ts_charity_copyright_padding).'px;';
	$ts_charity_custom_css .='}';

	/*------ copyright text color -------*/
	$ts_charity_footer_text_color = get_theme_mod('ts_charity_footer_text_color');
	if($ts_charity_footer_text_color != false){
		$ts_charity_custom_css .='.footer-bor-two p, .footer-bor-two p a{';
			$ts_charity_custom_css .='color: '.esc_attr($ts_charity_footer_text_color).'!important;';
		$ts_charity_custom_css .='}';
	}

	/*------ copyright background css -------*/
	$ts_charity_footer_text_bg_color = get_theme_mod('ts_charity_footer_text_bg_color');
	if($ts_charity_footer_text_bg_color != false){
		$ts_charity_custom_css .='.footer-bor-two{';
			$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_footer_text_bg_color).';';
			$ts_charity_custom_css .='border-color: '.esc_attr($ts_charity_footer_text_bg_color).';';
		$ts_charity_custom_css .='}';
	}

	$ts_charity_footer_widget_bg_color = get_theme_mod('ts_charity_footer_widget_bg_color');
	$ts_charity_custom_css .='#footer{';
		$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_footer_widget_bg_color).';';
	$ts_charity_custom_css .='}';

	$ts_charity_footer_widget_bg_image = get_theme_mod('ts_charity_footer_widget_bg_image');
	if($ts_charity_footer_widget_bg_image != false){
		$ts_charity_custom_css .='#footer{';
			$ts_charity_custom_css .='background: url('.esc_attr($ts_charity_footer_widget_bg_image).'); background-size: cover;';
		$ts_charity_custom_css .='}';
	}

	// scroll to top bg color
	$ts_charity_back_to_top_bg_color = get_theme_mod('ts_charity_back_to_top_bg_color');
	$ts_charity_custom_css .='#scroll-top{';
		$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_back_to_top_bg_color).';';
		$ts_charity_custom_css .='border-color: '.esc_attr($ts_charity_back_to_top_bg_color).';';
	$ts_charity_custom_css .='}';

	// scroll to top bg hover color
	$ts_charity_back_to_top_bg_hover_color = get_theme_mod('ts_charity_back_to_top_bg_hover_color');
	$ts_charity_custom_css .='#scroll-top:hover{';
		$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_back_to_top_bg_hover_color).';';
		$ts_charity_custom_css .='border-color: '.esc_attr($ts_charity_back_to_top_bg_hover_color).';';
	$ts_charity_custom_css .='}';

	// scroll to top
	$ts_charity_scroll_font_size_icon = get_theme_mod('ts_charity_scroll_font_size_icon', 22);
	$ts_charity_custom_css .='#scroll-top i{';
		$ts_charity_custom_css .='font-size: '.esc_attr($ts_charity_scroll_font_size_icon).'px;';
	$ts_charity_custom_css .='}';

	// Slider Height 
	$ts_charity_slider_image_height = get_theme_mod('ts_charity_slider_image_height');
	$ts_charity_custom_css .='#slider img{';
		$ts_charity_custom_css .='height: '.esc_attr($ts_charity_slider_image_height).'px;';
	$ts_charity_custom_css .='}';

	// button font size
	$ts_charity_button_font_size = get_theme_mod('ts_charity_button_font_size');
	$ts_charity_custom_css .='.page-box .new-text .content-bttn a{';
		$ts_charity_custom_css .='font-size: '.esc_attr($ts_charity_button_font_size).'px;';
	$ts_charity_custom_css .='}';

	// font weight
	$ts_charity_btn_font_weight = get_theme_mod('ts_charity_btn_font_weight');{
	$ts_charity_custom_css .='.page-box .new-text .content-bttn a{';
	$ts_charity_custom_css .='font-weight: '.esc_attr($ts_charity_btn_font_weight).';';
	$ts_charity_custom_css .='}';
	}

	// Button Text Transform
	$ts_charity_theme_lay = get_theme_mod( 'ts_charity_button_text_transform','Uppercase');
    if($ts_charity_theme_lay == 'Uppercase'){
		$ts_charity_custom_css .='.page-box .new-text .content-bttn a{';
			$ts_charity_custom_css .='text-transform: uppercase;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_theme_lay == 'Lowercase'){
		$ts_charity_custom_css .='.page-box .new-text .content-bttn a{';
			$ts_charity_custom_css .='text-transform: lowercase;';
		$ts_charity_custom_css .='}';
	}
	else if($ts_charity_theme_lay == 'Capitalize'){
		$ts_charity_custom_css .='.page-box .new-text .content-bttn a{';
			$ts_charity_custom_css .='text-transform: capitalize;';
		$ts_charity_custom_css .='}';
	}

	// Display Blog Post 
	$ts_charity_display_blog_page_post = get_theme_mod( 'ts_charity_display_blog_page_post','In Box');
    if($ts_charity_display_blog_page_post == 'In Box'){
		$ts_charity_custom_css .='.our-services .page-box{';
			$ts_charity_custom_css .='border: solid 1px #000; margin:25px 0;';
		$ts_charity_custom_css .='}';
	}

	$ts_charity_pagination_alignment = get_theme_mod( 'ts_charity_pagination_alignment','Left');
    if($ts_charity_pagination_alignment == 'Left'){
		$ts_charity_custom_css .='.pagination, .nav-links{';
		$ts_charity_custom_css .='float: left;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_pagination_alignment == 'Center'){
		$ts_charity_custom_css .='.pagination, .nav-links{';
			$ts_charity_custom_css .='justify-content: center; float: none;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_pagination_alignment == 'Right'){
		$ts_charity_custom_css .='.pagination, .nav-links{';
			$ts_charity_custom_css .='float: right;';
		$ts_charity_custom_css .='}';
	}

	//slider button bg color
	$ts_charity_slider_btn_bg_color = get_theme_mod('ts_charity_slider_btn_bg_color');
	$ts_charity_custom_css .='#slider .carousel-caption .more-btn, #slider .carousel-caption .more-btn a{';
		$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_slider_btn_bg_color).';';
	$ts_charity_custom_css .='}';

	// slider overlay
	$ts_charity_slider_overlay = get_theme_mod('ts_charity_slider_overlay', true);
	if($ts_charity_slider_overlay == false){
		$ts_charity_custom_css .='#slider img{';
			$ts_charity_custom_css .='opacity:1;';
		$ts_charity_custom_css .='}';
	} 
	$ts_charity_slider_image_overlay_color = get_theme_mod('ts_charity_slider_image_overlay_color', true);
	if($ts_charity_slider_overlay != false){
		$ts_charity_custom_css .='#slider{';
			$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_slider_image_overlay_color).';';
		$ts_charity_custom_css .='}';
	}

	// site title and tagline font size option
	$ts_charity_site_title_size_option = get_theme_mod('ts_charity_site_title_size_option', 25);{
	$ts_charity_custom_css .='#header .logo h1, .logo p.site-title a{';
	$ts_charity_custom_css .='font-size: '.esc_attr($ts_charity_site_title_size_option).'px;';
		$ts_charity_custom_css .='}';
	}

	$ts_charity_site_tagline_size_option = get_theme_mod('ts_charity_site_tagline_size_option', 12);{
	$ts_charity_custom_css .='#header .logo p{';
	$ts_charity_custom_css .='font-size: '.esc_attr($ts_charity_site_tagline_size_option).'px;';
		$ts_charity_custom_css .='}';
	}

	// woocommerce product sale settings
	$ts_charity_border_radius_product_sale = get_theme_mod('ts_charity_border_radius_product_sale',50);
	$ts_charity_custom_css .='.woocommerce span.onsale {';
		$ts_charity_custom_css .='border-radius: '.esc_attr($ts_charity_border_radius_product_sale).'%;';
	$ts_charity_custom_css .='}';

	$ts_charity_align_product_sale = get_theme_mod('ts_charity_align_product_sale', 'Right');
	if($ts_charity_align_product_sale == 'Right' ){
		$ts_charity_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ts_charity_custom_css .=' left:auto; right:0;';
		$ts_charity_custom_css .='}';
	}elseif($ts_charity_align_product_sale == 'Left' ){
		$ts_charity_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ts_charity_custom_css .=' left:0; right:auto;';
		$ts_charity_custom_css .='}';
	}

	$ts_charity_product_sale_font_size = get_theme_mod('ts_charity_product_sale_font_size',14);
	$ts_charity_custom_css .='.woocommerce span.onsale{';
		$ts_charity_custom_css .='font-size: '.esc_attr($ts_charity_product_sale_font_size).'px;';
	$ts_charity_custom_css .='}';

	// product sale padding top /bottom
	$ts_charity_sale_padding_top = get_theme_mod('ts_charity_sale_padding_top', '');
	$ts_charity_custom_css .='.woocommerce ul.products li.product .onsale{';
	$ts_charity_custom_css .='padding-top: '.esc_attr($ts_charity_sale_padding_top).'px; padding-bottom: '.esc_attr($ts_charity_sale_padding_top).'px !important;';
	$ts_charity_custom_css .='}';

	// product sale padding left/right
	$ts_charity_sale_padding_left = get_theme_mod('ts_charity_sale_padding_left', '');
	$ts_charity_custom_css .='.woocommerce ul.products li.product .onsale{';
	$ts_charity_custom_css .='padding-left: '.esc_attr($ts_charity_sale_padding_left).'px; padding-right: '.esc_attr($ts_charity_sale_padding_left).'px;';
	$ts_charity_custom_css .='}';

	// preloader background image
	$ts_charity_preloader_bg_image = get_theme_mod('ts_charity_preloader_bg_image');
	if($ts_charity_preloader_bg_image != false){
		$ts_charity_custom_css .='#loader-wrapper .loader-section, #loader-wrapper{';
			$ts_charity_custom_css .='background: url('.esc_attr($ts_charity_preloader_bg_image).'); background-size: cover;';
		$ts_charity_custom_css .='}';
	}

	// preloader background option
	$ts_charity_loader_background_color_first = get_theme_mod('ts_charity_loader_background_color_first');
	$ts_charity_custom_css .='#loader-wrapper .loader-section, #loader-wrapper{';
		$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_loader_background_color_first).';';
	$ts_charity_custom_css .='} ';

	// breadcrumb color
	$ts_charity_breadcrumb_color = get_theme_mod('ts_charity_breadcrumb_color');
	$ts_charity_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$ts_charity_custom_css .='color: '.esc_attr($ts_charity_breadcrumb_color).';';
	$ts_charity_custom_css .='} ';

	// breadcrumb bg color
	$ts_charity_breadcrumb_bg_color = get_theme_mod('ts_charity_breadcrumb_bg_color');
	$ts_charity_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$ts_charity_custom_css .='background-color: '.esc_attr($ts_charity_breadcrumb_bg_color).';';
	$ts_charity_custom_css .='} ';

	// fixed header padding option
	$ts_charity_sticky_header_padding_settings = get_theme_mod('ts_charity_sticky_header_padding_settings', 0);
	$ts_charity_custom_css .='.fixed-header{';
		$ts_charity_custom_css .='padding: '.esc_attr($ts_charity_sticky_header_padding_settings).'px;';
	$ts_charity_custom_css .='}';

	// woocommerce Product Navigation
	$ts_charity_products_navigation = get_theme_mod('ts_charity_products_navigation', 'Yes');
	if($ts_charity_products_navigation == 'No'){
		$ts_charity_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$ts_charity_custom_css .='display: none;';
		$ts_charity_custom_css .='}';
	}

	// featured image setting
	$ts_charity_featured_img_border_radius = get_theme_mod('ts_charity_featured_img_border_radius', 0);
	$ts_charity_custom_css .='.our-services img{';
		$ts_charity_custom_css .='border-radius: '.esc_attr($ts_charity_featured_img_border_radius).'px;';
	$ts_charity_custom_css .='}';

	$ts_charity_featured_img_box_shadow = get_theme_mod('ts_charity_featured_img_box_shadow',0);
	$ts_charity_custom_css .='.our-services img{';
		$ts_charity_custom_css .='box-shadow: '.esc_attr($ts_charity_featured_img_box_shadow).'px '.esc_attr($ts_charity_featured_img_box_shadow).'px '.esc_attr($ts_charity_featured_img_box_shadow).'px #ccc;';
	$ts_charity_custom_css .='}';

	//First Cap (Blog Post)
	$ts_charity_show_first_caps = get_theme_mod('ts_charity_show_first_caps', 'false');
	if($ts_charity_show_first_caps == 'true' ){
	$ts_charity_custom_css .='.page-box .entry-content p:nth-of-type(1)::first-letter{';
	$ts_charity_custom_css .=' font-size: 55px; font-weight: 600;';
	$ts_charity_custom_css .=' margin-right: 6px;';
	$ts_charity_custom_css .=' line-height: 1;';
	$ts_charity_custom_css .='}';
	}elseif($ts_charity_show_first_caps == 'false' ){
	$ts_charity_custom_css .='.page-box .entry-content p:nth-of-type(1)::first-letter {';
	$ts_charity_custom_css .='display: none;';
	$ts_charity_custom_css .='}';
	}

	//First Cap (Single Post)
	$ts_charity_single_post_first_caps = get_theme_mod('ts_charity_single_post_first_caps', 'false');
	if($ts_charity_single_post_first_caps == 'true' ){
	$ts_charity_custom_css .='.page-box-single .new-text .entry-content p:nth-of-type(1)::first-letter{';
	$ts_charity_custom_css .=' font-size: 55px; font-weight: 600;';
	$ts_charity_custom_css .=' margin-right: 6px;';
	$ts_charity_custom_css .=' line-height: 1;';
	$ts_charity_custom_css .='}';
	}elseif($ts_charity_single_post_first_caps == 'false' ){
	$ts_charity_custom_css .='.page-box-single .new-text .entry-content p:nth-of-type(1)::first-letter {';
	$ts_charity_custom_css .='display: none;';
	$ts_charity_custom_css .='}';
	}

	// slider top and bottom padding
	$ts_charity_top_bottom_slider_content_space = get_theme_mod('ts_charity_top_bottom_slider_content_space');
	$ts_charity_left_right_slider_content_space = get_theme_mod('ts_charity_left_right_slider_content_space');
	$ts_charity_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
	$ts_charity_custom_css .='top: '.esc_attr($ts_charity_top_bottom_slider_content_space).'%; bottom: '.esc_attr($ts_charity_top_bottom_slider_content_space).'%;left: '.esc_attr($ts_charity_left_right_slider_content_space).'%;right: '.esc_attr($ts_charity_left_right_slider_content_space).'%;';
	$ts_charity_custom_css .='}';

	// Topbar padding top bottom
	$ts_charity_custom_css .='@media screen and (min-width:1000px) {';
	$ts_charity_topbar_top_bottom_spacing = get_theme_mod('ts_charity_topbar_top_bottom_spacing');
	$ts_charity_custom_css .='.topbar{';
	$ts_charity_custom_css .='padding-top: '.esc_attr($ts_charity_topbar_top_bottom_spacing).'px; padding-bottom: '.esc_attr($ts_charity_topbar_top_bottom_spacing).'px;';
		$ts_charity_custom_css .='} }';

	// Menu Text Transform
	$ts_charity_theme_lay = get_theme_mod( 'ts_charity_text_tranform_menu','Uppercase');
    if($ts_charity_theme_lay == 'Uppercase'){
		$ts_charity_custom_css .='.primary-navigation a{';
			$ts_charity_custom_css .='text-transform: uppercase;';
		$ts_charity_custom_css .='}';
	}else if($ts_charity_theme_lay == 'Lowercase'){
		$ts_charity_custom_css .='.primary-navigation a{';
			$ts_charity_custom_css .='text-transform: lowercase;';
		$ts_charity_custom_css .='}';
	}
	else if($ts_charity_theme_lay == 'Capitalize'){
		$ts_charity_custom_css .='.primary-navigation a{';
			$ts_charity_custom_css .='text-transform: capitalize;';
		$ts_charity_custom_css .='}';
	}

	// menu font size
	$ts_charity_menus_font_size = get_theme_mod('ts_charity_menus_font_size',12);
	$ts_charity_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
		$ts_charity_custom_css .='font-size: '.esc_attr($ts_charity_menus_font_size).'px;';
	$ts_charity_custom_css .='}';	

	// font weight
	$ts_charity_menu_weight = get_theme_mod('ts_charity_menu_weight');{
		$ts_charity_custom_css .='.primary-navigation a{';
			$ts_charity_custom_css .='font-weight: '.esc_attr($ts_charity_menu_weight).';';
		$ts_charity_custom_css .='}';
	}

	// menu padding
	$ts_charity_menus_padding = get_theme_mod('ts_charity_menus_padding');
	$ts_charity_custom_css .='.primary-navigation ul li{';
		$ts_charity_custom_css .='padding: '.esc_attr($ts_charity_menus_padding).'px;';
	$ts_charity_custom_css .='}';

	// Menu Color Option
	$ts_charity_menu_color_settings = get_theme_mod('ts_charity_menu_color_settings');
	$ts_charity_custom_css .='.primary-navigation ul li a{';
		$ts_charity_custom_css .='color: '.esc_attr($ts_charity_menu_color_settings).';';
	$ts_charity_custom_css .='} ';

	// Menu Hover Color Option
	$ts_charity_menu_hover_color_settings = get_theme_mod('ts_charity_menu_hover_color_settings');
	$ts_charity_custom_css .='.primary-navigation ul li a:hover {';
		$ts_charity_custom_css .='color: '.esc_attr($ts_charity_menu_hover_color_settings).';';
	$ts_charity_custom_css .='} ';

	// Submenu Color Option
	$ts_charity_submenu_color_settings = get_theme_mod('ts_charity_submenu_color_settings');
	$ts_charity_custom_css .='.primary-navigation ul.sub-menu li a, .primary-navigation ul.children li a {';
		$ts_charity_custom_css .='color: '.esc_attr($ts_charity_submenu_color_settings).';';
	$ts_charity_custom_css .='} ';

	// Submenu Hover Color Option
	$ts_charity_submenu_hover_color_settings = get_theme_mod('ts_charity_submenu_hover_color_settings');
	$ts_charity_custom_css .='.primary-navigation ul.sub-menu li a:hover, .primary-navigation ul.children li a:hover{';
	$ts_charity_custom_css .='color: '.esc_attr($ts_charity_submenu_hover_color_settings).';';
	$ts_charity_custom_css .='} ';

	// site tagline color
	$ts_charity_site_tagline_color = get_theme_mod('ts_charity_site_tagline_color');
	$ts_charity_custom_css .='.logo p {';
		$ts_charity_custom_css .='color: '.esc_attr($ts_charity_site_tagline_color).' !important;';
	$ts_charity_custom_css .='}';

	// site title color
	$ts_charity_site_title_color = get_theme_mod('ts_charity_site_title_color');
	$ts_charity_custom_css .='.site-title a{';
		$ts_charity_custom_css .='color: '.esc_attr($ts_charity_site_title_color).' !important;';
	$ts_charity_custom_css .='}';

	// site top-bottom logo padding 
	$ts_charity_logo_padding_top = get_theme_mod('ts_charity_logo_padding_top', '');
	$ts_charity_custom_css .='.logo{';
	$ts_charity_custom_css .='padding-top: '.esc_attr($ts_charity_logo_padding_top).'px; padding-bottom: '.esc_attr($ts_charity_logo_padding_top).'px;';
	$ts_charity_custom_css .='}';

	// site left-right logo padding 
	$ts_charity_logo_padding_left = get_theme_mod('ts_charity_logo_padding_left', '');
	$ts_charity_custom_css .='.logo{';
	$ts_charity_custom_css .='padding-left: '.esc_attr($ts_charity_logo_padding_left).'px; padding-right: '.esc_attr($ts_charity_logo_padding_left).'px;';
	$ts_charity_custom_css .='}';

	// site top-bottom logo margin 
	$ts_charity_logo_margin_top = get_theme_mod('ts_charity_logo_margin_top', '');
	$ts_charity_custom_css .='.logo{';
	$ts_charity_custom_css .='margin-top: '.esc_attr($ts_charity_logo_margin_top).'px; margin-bottom: '.esc_attr($ts_charity_logo_margin_top).'px;';
	$ts_charity_custom_css .='}';

	// site left-right logo margin
	$ts_charity_logo_margin_left = get_theme_mod('ts_charity_logo_margin_left', '');
	$ts_charity_custom_css .='.logo{';
	$ts_charity_custom_css .='margin-left: '.esc_attr($ts_charity_logo_margin_left).'px; margin-right: '.esc_attr($ts_charity_logo_margin_left).'px;';
	$ts_charity_custom_css .='}';

	// toggle button color 
	$ts_charity_taggle_menu_bg_color_settings = get_theme_mod('ts_charity_taggle_menu_bg_color_settings', '');
	$ts_charity_custom_css .='.toggle-menu i {';
	$ts_charity_custom_css .='background-color:'.esc_attr($ts_charity_taggle_menu_bg_color_settings).'';
	$ts_charity_custom_css .='}';

	// featured image setting
	$ts_charity_single_post_img_border_radius = get_theme_mod('ts_charity_single_post_img_border_radius', 0);
	$ts_charity_custom_css .='.page-box-single .feature-box img{';
		$ts_charity_custom_css .='border-radius: '.esc_attr($ts_charity_single_post_img_border_radius).'px;';
	$ts_charity_custom_css .='}';

	$ts_charity_single_post_img_box_shadow = get_theme_mod('ts_charity_single_post_img_box_shadow',0);
	$ts_charity_custom_css .='.page-box-single .feature-box img{';
		$ts_charity_custom_css .='box-shadow: '.esc_attr($ts_charity_single_post_img_box_shadow).'px '.esc_attr($ts_charity_single_post_img_box_shadow).'px '.esc_attr($ts_charity_single_post_img_box_shadow).'px #ccc;';
	$ts_charity_custom_css .='}';

	/*----Comment title text----*/
	$ts_charity_title_comment_form = get_theme_mod('
		ts_charity_title_comment_form', 'Leave a Reply');
	if($ts_charity_title_comment_form == ''){
	$ts_charity_custom_css .='#comments h2#reply-title {';
	$ts_charity_custom_css .='display: none;';
	$ts_charity_custom_css .='}';
	}

	/*----Comment button text----*/
	$ts_charity_comment_form_button_content = get_theme_mod('ts_charity_comment_form_button_content', 'Post Comment');
	if($ts_charity_comment_form_button_content == ''){
	$ts_charity_custom_css .='#comments p.form-submit {';
	$ts_charity_custom_css .='display: none;';
	$ts_charity_custom_css .='}';
	}

	/*---- Comment form ----*/
	$ts_charity_comment_width = get_theme_mod('ts_charity_comment_width', '100');
	$ts_charity_custom_css .='#comments textarea{';
	$ts_charity_custom_css .=' width:'.esc_attr($ts_charity_comment_width).'%;';
	$ts_charity_custom_css .='}';









		
