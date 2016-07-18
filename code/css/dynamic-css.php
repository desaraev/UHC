<?php

function generate_dynamic_css()
{
	//Navigation
	$theme_nav_bg_color = get_option('theme_nav_bg_color');
	$theme_nav_text_color = get_option('theme_nav_text_color');
	$theme_nav_text_shadow_color = get_option('theme_nav_text_shadow_color');
	$theme_nav_border_color = get_option('theme_nav_border_color');
	$theme_nav_hover_color = get_option('theme_nav_hover_color');
	$theme_sub_nav_hover_color = get_option('theme_sub_nav_hover_color');
	
	//Slider Navigation
	$theme_slider_nav_bg_color = get_option('theme_slider_nav_bg_color');
	$theme_slider_nav_bg_hover_color = get_option('theme_slider_nav_bg_hover_color');
	$theme_slider_nav_border_color = get_option('theme_slider_nav_border_color');
	$theme_slider_nav_text_color = get_option('theme_slider_nav_text_color');
	$theme_slider_nav_text_shadow_color = get_option('theme_slider_nav_text_shadow_color');
	$theme_slider_nav_sub_title_color = get_option('theme_slider_nav_sub_title_color');
	
	//Widget Title Color 
	$theme_widget_title_color = get_option('theme_widget_title_color');	
	
	//Body Text Color
	$theme_body_text_color = get_option('theme_body_text_color');
	$theme_body_headings_color = get_option('theme_body_headings_color');
	$theme_highlight_color = get_option('theme_highlight_color');
	
	//Selection Background Color
	$theme_selection_bg_color = get_option('theme_selection_bg_color');
	
	//Teme Link Color
	$theme_link_color = get_option('theme_link_color');
	$theme_link_hover_color = get_option('theme_link_hover_color');
	$theme_button_bg_color = get_option('theme_button_bg_color');
	$theme_button_text_color = get_option('theme_button_text_color');
	$theme_button_text_shadow_color = get_option('theme_button_text_shadow_color');
	
	//Slogan Text Color	
	$theme_slogan_text_color = get_option('theme_slogan_text_color');
	$theme_slogan_sub_text_color = get_option('theme_slogan_sub_text_color');	
	
	// Footer
	$theme_twitter_bg_color = get_option('theme_twitter_bg_color');
	$theme_footer_bg_color = get_option('theme_footer_bg_color');
	$theme_footer_text_color = get_option('theme_footer_text_color');
	$theme_footer_link_color = get_option('theme_footer_link_color');
	$theme_footer_hover_color = get_option('theme_footer_hover_color');
	
	$dynamic_css = array(
						
						//Navigation background color
						array(
							'elements'	=>	'#header .main-nav',
							'property'	=>	'background-color',
							'value'		=> 	$theme_nav_bg_color
						),
						//Navigation Background Color Applied to Scroll Top Button
						array(
							'elements'	=>	'a#scroll-top',
							'property'	=>	'background-color',
							'value'		=> 	$theme_nav_bg_color
						), 
						//Navigation Background Color Applied to Appointment Widget Header Background
						array(
							'elements'	=>	'.appointment .header',
							'property'	=>	'background-color',
							'value'		=> 	$theme_nav_bg_color
						),												
						//Navigation text color
						array(
							'elements'	=>	'#header .main-nav ul li a',
							'property'	=>	'color',
							'value'		=> 	$theme_nav_text_color
						),
						//Navigation text color Applied to Appointment Widget Header Text
						array(
							'elements'	=>	'.appointment .header h2, .appointment .header h3.number',
							'property'	=>	'color',
							'value'		=> 	$theme_nav_text_color
						),						
						//Navigation text shadow color
						array(
							'elements'	=>	'#header .main-nav ul li a',
							'property'	=>	'text-shadow',
							'value'		=> 	empty($theme_nav_text_shadow_color)?'':"1px 1px 0px " . $theme_nav_text_shadow_color
						),
						//Navigation text shadow color Applied to Appointment Widget Header Text
						array(
							'elements'	=>	'.appointment .header h2, .appointment .header h3.number',
							'property'	=>	'text-shadow',
							'value'		=> 	empty($theme_nav_text_shadow_color)?'':"1px 1px 0px " . $theme_nav_text_shadow_color							
						),						
						//Navigation border color
						array(
							'elements'	=>	'#wrapper #header .main-nav ul li,  #header .main-nav #topsearch #tsearch',
							'property'	=>	'border-color',
							'value'		=> 	$theme_nav_border_color
						),						
						//Navigation hover color
						array(
							'elements'	=>	'#header .main-nav > div > ul > li ul, #header .main-nav > div > ul > li:hover, #header .main-nav #topsearch #tsearch',
							'property'	=>	'background',
							'value'		=> 	$theme_nav_hover_color
						),						
						//Sub Navigation hover color
						array(
							'elements'	=>	'#header .main-nav ul li ul li:hover',
							'property'	=>	'background',
							'value'		=> 	$theme_sub_nav_hover_color
						),												
						
						
						
						//Slider Navigation Background
						array(
							'elements'	=>	'#slider-wrap .slide-nav',
							'property'	=>	'background-color',
							'value'		=> 	$theme_slider_nav_bg_color
							),						
						//Slider Navigation Background Hover
						array(
							'elements'	=>	'#slider-wrap .slide-nav li.flex-active, #slider-wrap .slide-nav li:hover',
							'property'	=>	'background-color',
							'value'		=> 	$theme_slider_nav_bg_hover_color
							),						
						//Slider Navigation Border Color
						array(
							'elements'	=>	'#slider-wrap .slide-nav li',
							'property'	=>	'border-right-color',
							'value'		=> 	$theme_slider_nav_border_color
							),
						//Slider Navigation Text Color
						array(
							'elements'	=>	'#slider-wrap .slide-nav li h4',
							'property'	=>	'color',
							'value'		=> 	$theme_slider_nav_text_color
							),
						//Slider Navigation Text Shadow Color
						array(
							'elements'	=>	'#slider-wrap .slide-nav li h4',
							'property'	=>	'text-shadow',
							'value'		=> 	empty($theme_slider_nav_text_shadow_color)?'':"1px 1px 0px " . $theme_slider_nav_text_shadow_color
							),
						//Slider Navigation Sub Title Color
						array(
							'elements'	=>	'#slider-wrap .slide-nav li p',
							'property'	=>	'color',
							'value'		=> 	$theme_slider_nav_sub_title_color
							),
						
												
												
						//Widget Title Text
						array(
							'elements'	=>	'.smart-head, #sidebar .widget h3.title',
							'property'	=>	'color',
							'value'		=> 	$theme_widget_title_color
							),
						
						
						
						//Body Text Color
						array(
							'elements'	=>	'body',
							'property'	=>	'color',
							'value'		=> 	$theme_body_text_color
							),
						//Heading Color
						array(
							'elements'	=>	'h1, h2, h3, h4, h5, h6, #content #filter-by li a, .gallery-item .item-title a',
							'property'	=>	'color',
							'value'		=> 	$theme_body_headings_color
							),						
						//Highlight Color
						array(
							'elements'	=>	'.page-head h1 span, .page-head h2 span, .tabs-nav li.active a, #container #content .tabs-nav li a:hover, #header .social-nav li.phone:hover span, .services .service:hover h4 a, #comments .comment .date a:hover time, #commentform span.required, .gallery-item .item-type-link a:hover, .colored',
							'property'	=>	'color',
							'value'		=> 	$theme_highlight_color
							),
						array(
							'elements'	=>	'#content #filter-by li a.active, #content #filter-by li a:hover, a#scroll-top:hover',
							'property'	=>	'background-color',
							'value'		=> 	$theme_highlight_color
							),						
						array(
							'elements'	=>	'#container #content .tabs-nav li.active a',
							'property'	=>	'border-top-color',
							'value'		=> 	$theme_highlight_color
							),
						
						
												
						//Selection Background Color
						array(
							'elements'	=>	'::-moz-selection',
							'property'	=>	'background',
							'value'		=> 	$theme_selection_bg_color
							),						
						//Selection Background Color  
						array(
							'elements'	=>	'::selection',
							'property'	=>	'background',
							'value'		=> 	$theme_selection_bg_color
							),
						 
						 												
						
						//Link Color
						array(
							'elements'	=>	'a',
							'property'	=>	'color',
							'value'		=> 	$theme_link_color
							),
						//Link Hover Color
						array(
							'elements'	=>	'a:hover, a:focus, #header .social-nav li.phone:hover span, .services .service:hover h4 a, #content .faq-unit:hover h4.faq-question, #content .faq-unit.active h4.faq-question, #comments .comment .date a:hover time, .gallery-item .item-title a:hover, .gallery-item .item-type-link a:hover, .post-meta span a:hover',
							'property'	=>	'color',
							'value'		=> 	$theme_link_hover_color
							),
						//Buttons Background Color
						array(
							'elements'	=>	'.readmore, .widget #searchform input[type="submit"], .widget #mc_signup #mc_signup_submit, #commentform input[type="submit"]',
							'property'	=>	'background-color',
							'value'		=> 	$theme_button_bg_color
							),
						
						
							
						//Buttons Text Color
						array(
							'elements'	=>	'.readmore, .widget #searchform input[type="submit"], .widget #mc_signup #mc_signup_submit, #commentform input[type="submit"], footer .footer-widget a.readmore, footer .footer-widget a.readmore:hover, .readmore:hover, .widget #searchform input[type="submit"]:hover, .widget #mc_signup #mc_signup_submit:hover, #commentform input[type="submit"]:hover',
							'property'	=>	'color',
							'value'		=> 	$theme_button_text_color
							),
						//Buttons Text Shadow Color
						array(
							'elements'	=>	'.readmore, .widget #searchform input[type="submit"], .widget #mc_signup #mc_signup_submit, #commentform input[type="submit"], footer .footer-widget a.readmore, footer .footer-widget a.readmore:hover, .readmore:hover, .widget #searchform input[type="submit"]:hover, .widget #mc_signup #mc_signup_submit:hover, #commentform input[type="submit"]:hover',
							'property'	=>	'text-shadow',
							'value'		=> 	empty($theme_button_text_shadow_color)?'':"1px 1px 0px " . $theme_button_text_shadow_color
							),
						
																		
						
						//Slogan Text Color Color
						array(
							'elements'	=>	'.slogan h2',
							'property'	=>	'color',
							'value'		=> 	$theme_slogan_text_color
							),						
						//Slogan Sub Text Color Color
						array(
							'elements'	=>	'.slogan h3',
							'property'	=>	'color',
							'value'		=> 	$theme_slogan_sub_text_color
							),
						
						
						
						//Twitter background color
						array(
							'elements'	=>	'#twitter_update_list',
							'property'	=>	'background-color',
							'value'		=> 	$theme_twitter_bg_color
							),							
						//Footer background color
						array(
							'elements'	=>	'#footer-wrap',
							'property'	=>	'background-color',
							'value'		=> 	$theme_footer_bg_color
							),						
						//Footer text color
						array(
							'elements'	=>	'#footer-wrap, #footer-wrap p',
							'property'	=>	'color',
							'value'		=> 	$theme_footer_text_color
							),						
						//Footer link color
						array(
							'elements'	=>	'footer .footer-widget a, footer .footer-widget span, .footer-widget .widget .sidebar-post .sidebar-post-text a',
							'property'	=>	'color',
							'value'		=> 	$theme_footer_link_color
							),						
						//Footer link color
						array(
							'elements'	=>	'footer .footer-widget a:hover, footer .footer-widget a:focus, footer .footer-widget a:active, .footer-widget .widget .sidebar-post .sidebar-post-text a:hover, .footer-widget .widget .sidebar-post .sidebar-post-text a:focus, .footer-widget .widget .sidebar-post .sidebar-post-text a:active',
							'property'	=>	'color',
							'value'		=> 	$theme_footer_hover_color
							),
						
					);
	
	
	$prop_count = count($dynamic_css);
	
	if($prop_count > 0)
	{
		echo "<style type='text/css' id='dynamic-css'>\n\n";
		foreach($dynamic_css as $css_unit )
		{
			if(!empty($css_unit['value']))
			{
				echo $css_unit['elements']."{\n";
				echo $css_unit['property'].":".$css_unit['value'].";\n";
				echo "}\n\n";
			}
		}
		echo '</style>';
	}
	
}

add_action('wp_head', 'generate_dynamic_css');

