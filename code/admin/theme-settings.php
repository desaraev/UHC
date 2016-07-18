<?php
add_action('init','of_options');

if (!function_exists('of_options')) 
{
		
	function of_options()
	{

		/*
		*	Theme Shortname
		*/
		$themename = "theme";
		$shortname = "theme";

		/*
		*	Populate the options array
		*/
		global $tt_options;
		
		$tt_options = get_option('of_options');

		/*
		*	Access the WordPress Pages via an Array
		*/
		$tt_pages = array();
		
		$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
		
		foreach ($tt_pages_obj as $tt_page) 
		{
			$tt_pages[$tt_page->ID] = $tt_page->post_name; 
		}
		
		$tt_pages_tmp = array_unshift($tt_pages, "Select a page:" ); 


		/*
		*	Access the WordPress Categories via an Array
		*/
		$tt_categories = array();  
		
		$tt_categories_obj = get_categories('hide_empty=0');
		
		foreach ($tt_categories_obj as $tt_cat) 
		{
			$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;
		}
		
		$categories_tmp = array_unshift($tt_categories, "Select a category:");


		/*
		*	Sample Array for demo purposes
		*/
		$sample_array = array("1","2","3","4","5");


		/*
		*	Sample Advanced Array - The actual value differs from what the user sees
		*/
		$sample_advanced_array = array("image" => "The Image","post" => "The Post"); 


		/*
		*	Folder Paths for "type" => "images"
		*/
		$sampleurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';




/*-----------------------------------------------------------------------------------*/
/* Create The Custom Theme Options Panel
/*-----------------------------------------------------------------------------------*/
$options = array(); // do not delete this line - sky will fall



/* Option Page - Header Options */
$options[] = array( "name" => __('Header','framework'),
			"type" => "heading");
			

$options[] = array( "name" => __('Logo','framework'),
			"desc" => __('Upload logo for your Website.','framework'),
			"id" => $shortname."_sitelogo",
			"std" => "",
			"type" => "upload");
			
			
$options[] = array( "name" => __('Favicon','framework'),
			"desc" => __('Upload a 16px by 16px PNG image that will represent your website favicon.','framework'),
			"id" => $shortname."_favicon",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Main Menu Background Color','framework'),
			"desc" => __('Choose a Background Color for Main Menu. Base Theme Color is #46a1b4. This will also be applied to appointment widget and scroll top button.','framework'),
			"id" => $shortname."_nav_bg_color",
			"std" => "#46a1b4",
			"type" => "color");

$options[] = array( "name" => __('Main Menu Text Color','framework'),
			"desc" => __('Choose a Text Color for Menu. Base Theme Color is #ffffff. This will also be applied to appointment widget.','framework'),
			"id" => $shortname."_nav_text_color",
			"std" => "#ffffff",
			"type" => "color");			

$options[] = array( "name" => __('Main Menu Text Shadow Color','framework'),
			"desc" => __('Choose a Text Shadow Color for Menu. Base Theme Shadow Color is #20606D. This will also be applied to appointment widget.','framework'),
			"id" => $shortname."_nav_text_shadow_color",
			"std" => "#20606D",
			"type" => "color");	

$options[] = array( "name" => __('Main Menu Item Right-Border Color','framework'),
			"desc" => __('Choose a Border Color for Menu Item. Base Theme Color is #54AEC2','framework'),
			"id" => $shortname."_nav_border_color",
			"std" => "#54AEC2",
			"type" => "color");			

$options[] = array( "name" => __('Main Menu Item Hover Background Color','framework'),
			"desc" => __('Choose a Hover Background Color for Top Menu. Base Theme Color is #377F8F','framework'),
			"id" => $shortname."_nav_hover_color",
			"std" => "#377F8F",
			"type" => "color");

$options[] = array( "name" => __('Sub Menu Item Hover Background Color','framework'),
			"desc" => __('Choose a Hover Background Color for Sub Menu of Top Menu. Base Theme Color is #2C6774','framework'),
			"id" => $shortname."_sub_nav_hover_color",
			"std" => "#2C6774",
			"type" => "color");	
																		   
$options[] = array( "name" => __('Tracking Code','framework'),
			"desc" => __('Paste Google Analytics (or other) tracking code here.','framework'),
			"id" => $shortname."_google_analytics",
			"std" => "",
			"type" => "textarea");


/* Option Page - Styling */

$options[] = array( "name" => __('Styling','framework'),
			"type" => "heading");

$options[] = array( "name" => __('Body Background','framework'),
			"desc" => "",
			"id" => $shortname."_background_callout",
			"std" => "This theme uses WordPress standard way to change background image or background color of body. Please visit <strong>Appearance >> Background</strong> page to change body background. ",
			"type" => "info");															

$options[] = array( "name" => __('Body Text Color','framework'),
			"desc" => __('Choose a Body Text Color. Base Theme Color is #808080','framework'),
			"id" => $shortname."_body_text_color",
			"std" => "#808080",
			"type" => "color");

$options[] = array( "name" => __('Headings Color','framework'),
			"desc" => __('Choose a Color for h1, h2, h3, h4, h5 and h6 tags. Base Theme Color is #6a6a75','framework'),
			"id" => $shortname."_body_headings_color",
			"std" => "#6a6a75",
			"type" => "color");

$options[] = array( "name" => __('Highlight Color','framework'),
			"desc" => __('Choose a color for highligted items and text throug-out the theme. Base Theme Color is #F56734','framework'),
			"id" => $shortname."_highlight_color",
			"std" => "#F56734",
			"type" => "color");

$options[] = array( "name" => __('Selection Background Color','framework'),
			"desc" => __('Choose a Background Selection Color. Base Theme Color is #3E96A9','framework'),
			"id" => $shortname."_selection_bg_color",
			"std" => "#3E96A9",
			"type" => "color");

$options[] = array( "name" => __('Link Color','framework'),
			"desc" => __('Choose a Link Color. Base Theme Color is #4c595c','framework'),
			"id" => $shortname."_link_color",
			"std" => "#4c595c",
			"type" => "color");

$options[] = array( "name" => __('Link Hover Color','framework'),
			"desc" => __('Choose a Link Hover Color. Base Theme Color is #f56734','framework'),
			"id" => $shortname."_link_hover_color",
			"std" => "#f56734",
			"type" => "color");			

$options[] = array( "name" => __('Buttons Background Color','framework'),
			"desc" => __('Choose Buttons Background Color. Base Theme Color is #f56734','framework'),
			"id" => $shortname."_button_bg_color",
			"std" => "#f56734",
			"type" => "color");

$options[] = array( "name" => __('Buttons Text Color','framework'),
			"desc" => __('Choose Buttons Text Color. Base Theme Color is #ffffff','framework'),
			"id" => $shortname."_button_text_color",
			"std" => "#ffffff",
			"type" => "color");

$options[] = array( "name" => __('Buttons Text Shadow Color','framework'),
			"desc" => __('Choose Buttons Text Shadow Color. Base Theme Color is #AE421B','framework'),
			"id" => $shortname."_button_text_shadow_color",
			"std" => "#AE421B",
			"type" => "color");			

$options[] = array( "name" => __('Slider Navigation Background Color','framework'),
			"desc" => __('Choose a Background Color for Slider Navigation. Base Theme Color is #f15a23','framework'),
			"id" => $shortname."_slider_nav_bg_color",
			"std" => "#f15a23",
			"type" => "color");

$options[] = array( "name" => __('Slider Navigation Hover Background Color','framework'),
			"desc" => __('Choose a Background Hover Color for Slider Navigation. Base Theme Color is #ec490d','framework'),
			"id" => $shortname."_slider_nav_bg_hover_color",
			"std" => "#ec490d",
			"type" => "color");	

$options[] = array( "name" => __('Slider Navigation Item Border Color','framework'),
			"desc" => __('Choose a Border Color for Slider Navigation Item. Base Theme Color is #FD7B4D','framework'),
			"id" => $shortname."_slider_nav_border_color",
			"std" => "#FD7B4D",
			"type" => "color");	

$options[] = array( "name" => __('Slider Navigation Title Color','framework'),
			"desc" => __('Choose a Color for Slider Navigation Title. Base Theme Color is #ffffff','framework'),
			"id" => $shortname."_slider_nav_text_color",
			"std" => "#ffffff",
			"type" => "color");								

$options[] = array( "name" => __('Slider Navigation Title Shadow Color','framework'),
			"desc" => __('Choose a Color for Slider Navigation Title Shadow. Base Theme Shadow Color is #BE4214','framework'),
			"id" => $shortname."_slider_nav_text_shadow_color",
			"std" => "#BE4214",
			"type" => "color");	

$options[] = array( "name" => __('Slider Navigation Sub-Title Color','framework'),
			"desc" => __('Choose a Color for Slider Navigation Sub-Title. Base Theme Color is #FAD7CB','framework'),
			"id" => $shortname."_slider_nav_sub_title_color",
			"std" => "#FAD7CB",
			"type" => "color");	

$options[] = array( "name" => __('Sidebar Widget Title Color','framework'),
			"desc" => __('Choose a Sidebar Widget Title Color. Base Theme Color is #56adc0','framework'),
			"id" => $shortname."_widget_title_color",
			"std" => "#56adc0",
			"type" => "color");	

$options[] = array( "name" => __('Quick CSS','framework'),
			"desc" => __('Just want to do some quick CSS changes? Enter them here, they will be applied to the theme. If you need to change major portions of the theme please use the custom.css file.','framework'),
			"id" => $shortname."_quick_css",
			"std" => "",
			"type" => "textarea");
			
			
/* Option Page - Social Navigation */
$options[] = array( "name" => __('Social Navigation','framework'),
			"type" => "heading");

$options[] = array( "name" => __('Do you want to show social navigation ?','framework'),
			"desc" => __('Yes','framework'),
			"id" => $shortname."_show_social_menu",
			"std" => "",
			"type" => "checkbox");

$options[] = array( "name" => __('Facebook','framework'),
			"desc" => __('Provide Facebook link to display its icon in top navigation.','framework'),
			"id" => $shortname."_facebook_link",
			"std" => "",
			"type" => "text");
			
$options[] = array( "name" => __('Twitter','framework'),
			"desc" => __('Provide Twitter link to display its icon in top navigation.','framework'),
			"id" => $shortname."_twitter_link",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Skype','framework'),
			"desc" => __('Provide Skype link to display its icon in top navigation.','framework'),
			"id" => $shortname."_skype_link",
			"std" => "",
			"type" => "text");			
			
$options[] = array( "name" => __('Flickr','framework'),
			"desc" => __('Provide Flickr link to display its icon in top navigation.','framework'),
			"id" => $shortname."_flickr_link",
			"std" => "",
			"type" => "text");			
			
$options[] = array( "name" => __('Google','framework'),
			"desc" => __('Provide Google link to display its icon in top navigation.','framework'),
			"id" => $shortname."_google_link",
			"std" => "",
			"type" => "text");			
			
$options[] = array( "name" => __('LinkedIn','framework'),
			"desc" => __('Provide LinkedIn link to display its icon in top navigation.','framework'),
			"id" => $shortname."_linkedin_link",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Pinterest','framework'),
            "desc" => __('Provide Pinterest link to display its icon in top navigation.','framework'),
            "id" => $shortname."_pin_link",
            "std" => "",
            "type" => "text");

$options[] = array( "name" => __('YouTube','framework'),
            "desc" => __('Provide YouTube link to display its icon in top navigation.','framework'),
            "id" => $shortname."_youtube_link",
            "std" => "",
            "type" => "text");

$options[] = array( "name" => __('RSS','framework'),
			"desc" => __('Provide RSS link to display its icon in top navigation.','framework'),
			"id" => $shortname."_rss_link",
			"std" => "",
			"type" => "text");			

$options[] = array( "name" => __('Phone','framework'),
			"desc" => __('Provide Phone number to display it in top navigation.','framework'),
			"id" => $shortname."_phone_link",
			"std" => "",
			"type" => "text");



/* Option Page - Gallery */
$options[] = array( "name" => __('Home - Slider','framework'),"type" => "heading");

$options[] = array( "name" => __('About Sliders','framework'),
            "desc" => "",
            "id" => $shortname."_about_sliders",
            "std" => "This theme provides two sliders. <br><br> Default slider is Flex slider and you can add its slides from <strong>Slides</strong> section below doctors section. <br><br> Second slider is Revolution Slider and to use it you need to install Revolution slider plugin that comes with this theme. After that you will have a <strong>Revolution Slider</strong> settings menu item on left side. So, you can add your slider from there and provide its alias in text field given below.",
            "type" => "info");

$options[] = array( "name" => __('Choose the slider that you want to use on homepage?','framework'),
            "desc" => __('','framework'),
            "id" => $shortname."_home_slider",
            "std" => "flex",
            "type" => "radio",
            "options" => array(
                'flex' => __('Flex Slider - Default','framework'),
                'revolution' => __('Revolution Slider','framework')
            ));

$options[] = array( "name" => __('Provide Revolution Slider Alias','framework'),
            "desc" => __("If you want to use Revolution Slider then provide its alias.",'framework'),
            "id" => $shortname."_revolution_alias",
            "std" => "",
            "type" => "text");



/* Option Page - Slogan */
$options[] = array( "name" => __('Home - Slogan','framework'),
			"type" => "heading");	

$options[] = array( "name" => __('Do you want to display Slogan on Homepage and Services Page ?','framework'),
			"desc" => __('Yes','framework'),
			"id" => $shortname."_show_slogan",
			"std" => "true",
			"type" => "checkbox");

$options[] = array( "name" => __('Slogan Text','framework'),
			"desc" => __("Main slogan text.",'framework'),
			"id" => $shortname."_slogan_text",
			"std" => __("We are proud of our organization.", "framework"),
			"type" => "text");

$options[] = array( "name" => __('Slogan Text Color','framework'),
			"desc" => __('Choose a Slogan Text Color. Base Theme Color is #3e96a9','framework'),
			"id" => $shortname."_slogan_text_color",
			"std" => "#3e96a9",
			"type" => "color");				

$options[] = array( "name" => __('Slogan Sub Text','framework'),
			"desc" => __("Sub slogan text that will appear below main slogan text.",'framework'),
			"id" => $shortname."_slogan_sub_text",
			"std" => __("", "framework"),
			"type" => "text");

$options[] = array( "name" => __('Slogan Sub Text Color','framework'),
			"desc" => __('Choose a Slogan Sub Text Color. Base Theme Color is #819093','framework'),
			"id" => $shortname."_slogan_sub_text_color",
			"std" => "#819093",
			"type" => "color");

/* Option Page - Services List */
$options[] = array( "name" => __('Home - Services List','framework'),
    "type" => "heading");

$options[] = array( "name" => __('Do you want to display Serivces List with Icons on Homepage and Services Page ?','framework'),
    "desc" => __('Yes','framework'),
    "id" => $shortname."_show_services",
    "std" => "true",
    "type" => "checkbox");

// First
$options[] = array( "name" => __('1st Service Image','framework'),
    "desc" => __('Upload an image of size (112px by 112px) for simple OR (112px by 224px) for hover effect.','framework'),
    "id" => $shortname."_first_service_img",
    "std" => "",
    "type" => "upload");

$options[] = array( "name" => __('1st Service Heading','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_first_heading",
    "std" => __("Cardiothoracic Surgery", "framework"),
    "type" => "text");

$options[] = array( "name" => __('1st Service Text','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_first_text",
    "std" => __("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.", "framework"),
    "type" => "text");

$options[] = array( "name" => __('1st Service Link','framework'),
    "desc" => __("This link will be applied on heading and image.",'framework'),
    "id" => $shortname."_first_link",
    "std" => __("", "framework"),
    "type" => "text");

// Second
$options[] = array( "name" => __('2nd Service Image','framework'),
    "desc" => __('Upload an image of size (112px by 112px) for simple OR (112px by 224px) for hover effect.','framework'),
    "id" => $shortname."_second_service_img",
    "std" => "",
    "type" => "upload");

$options[] = array( "name" => __('2nd Service Heading','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_second_heading",
    "std" => __("Cardiothoracic Surgery", "framework"),
    "type" => "text");

$options[] = array( "name" => __('2nd Service Text','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_second_text",
    "std" => __("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.", "framework"),
    "type" => "text");

$options[] = array( "name" => __('2nd Service Link','framework'),
    "desc" => __("This link will be applied on heading and image.",'framework'),
    "id" => $shortname."_second_link",
    "std" => __("", "framework"),
    "type" => "text");

// Third
$options[] = array( "name" => __('3rd Service Image','framework'),
    "desc" => __('Upload an image of size (112px by 112px) for simple OR (112px by 224px) for hover effect.','framework'),
    "id" => $shortname."_third_service_img",
    "std" => "",
    "type" => "upload");

$options[] = array( "name" => __('3rd Service Heading','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_third_heading",
    "std" => __("Cardiothoracic Surgery", "framework"),
    "type" => "text");

$options[] = array( "name" => __('3rd Service Text','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_third_text",
    "std" => __("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.", "framework"),
    "type" => "text");

$options[] = array( "name" => __('3rd Service Link','framework'),
    "desc" => __("This link will be applied on heading and image.",'framework'),
    "id" => $shortname."_third_link",
    "std" => __("", "framework"),
    "type" => "text");


// Fourth
$options[] = array( "name" => __('4th Service Image','framework'),
    "desc" => __('Upload an image of size (112px by 112px) for simple OR (112px by 224px) for hover effect.','framework'),
    "id" => $shortname."_fourth_service_img",
    "std" => "",
    "type" => "upload");

$options[] = array( "name" => __('4th Service Heading','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_fourth_heading",
    "std" => __("Cardiothoracic Surgery", "framework"),
    "type" => "text");

$options[] = array( "name" => __('4th Service Text','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_fourth_text",
    "std" => __("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.", "framework"),
    "type" => "text");

$options[] = array( "name" => __('4th Service Link','framework'),
    "desc" => __("This link will be applied on heading and image.",'framework'),
    "id" => $shortname."_fourth_link",
    "std" => __("", "framework"),
    "type" => "text");

// Fifth
$options[] = array( "name" => __('5th Service Image','framework'),
    "desc" => __('Upload an image of size (112px by 112px) for simple OR (112px by 224px) for hover effect.','framework'),
    "id" => $shortname."_fifth_service_img",
    "std" => "",
    "type" => "upload");

$options[] = array( "name" => __('5th Service Heading','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_fifth_heading",
    "std" => __("Cardiothoracic Surgery", "framework"),
    "type" => "text");

$options[] = array( "name" => __('5th Service Text','framework'),
    "desc" => __("",'framework'),
    "id" => $shortname."_fifth_text",
    "std" => __("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.", "framework"),
    "type" => "text");

$options[] = array( "name" => __('5th Service Link','framework'),
    "desc" => __("This link will be applied on heading and image.",'framework'),
    "id" => $shortname."_fifth_link",
    "std" => __("", "framework"),
    "type" => "text");


/* Option Page - Doctors */
$options[] = array( "name" => __('Home - Doctors','framework'),
			"type" => "heading");	

$options[] = array( "name" => __('Do you want to display Doctors section on Homepage ?','framework'),
			"desc" => __('Yes','framework'),
			"id" => $shortname."_show_doctors",
			"std" => "true",
			"type" => "checkbox");

$options[] = array( "name" => __('Doctors Heading','framework'),
			"desc" => __("",'framework'),
			"id" => $shortname."_doctors_heading",
			"std" => __("Meet Our Doctors", "framework"),
			"type" => "text");

$options[] = array( "name" => __('Doctors Text','framework'),
			"desc" => __("This text will appear below main heading in Doctors section.",'framework'),
			"id" => $shortname."_doctors_sub_text",
			"std" => __("", "framework"),
			"type" => "text");

$options[] = array( "name" => __('Number of Doctors to display on Homepage','framework'),
            "desc" => __('Choose the number of doctors to display on Homepage.','framework'),
            "id" => $shortname."_docs_number_on_home",
            "std" => "3",
            "type" => "select",
            "options" => array(3,6,9));

$options[] = array( "name" => __('Do you want to replace doctor contents with doctor intro text ?','framework'),
            "desc" => __('Yes','framework'),
            "id" => $shortname."_show_intro_txt",
            "std" => "true",
            "type" => "checkbox");

$options[] = array( "name" => __('More Doctors Button Title','framework'),
            "desc" => __("Provide More Doctors Button Title.",'framework'),
            "id" => $shortname."_more_doctors_title",
            "std" => __("More Doctors", "framework"),
            "type" => "text");

$options[] = array( "name" => __('More Doctors Link','framework'),
			"desc" => __("This link will be applied on More Doctors button below doctors section on homepage.",'framework'),
			"id" => $shortname."_more_doctors_link",
			"std" => __("", "framework"),
			"type" => "text");		


/* Option Page - Testimonials */
$options[] = array( "name" => __('Home - Testimonials','framework'),
			"type" => "heading");	

$options[] = array( "name" => __('Do you want to display Testimonials section on Homepage ?','framework'),
			"desc" => __('Yes','framework'),
			"id" => $shortname."_show_testimonials",
			"std" => "true",
			"type" => "checkbox");

$options[] = array( "name" => __('Testimonials Heading','framework'),
			"desc" => __("",'framework'),
			"id" => $shortname."_testimonials_heading",
			"std" => __("What our patients say", "framework"),
			"type" => "text");

$options[] = array( "name" => __('Testimonials Text','framework'),
			"desc" => __("This text will appear below main heading in Testimonials section.",'framework'),
			"id" => $shortname."_testimonials_sub_text",
			"std" => __("", "framework"),
			"type" => "text");

/* Option Page - Blog */
$options[] = array( "name" => __('Blog','framework'),
            "type" => "heading");

$options[] = array( "name" => __('Blog Title','framework'),
            "desc" => __("You can wrap the words in &lt;span&gt;&lt;/span&gt; tag to high-light them.",'framework'),
            "id" => $shortname."_blog_title",
            "std" => __("Blog <span>Section</span>", "framework"),
            "type" => "text");

$options[] = array( "name" => __('Text Below Title','framework'),
            "desc" => __("This text will appear below main blog title.",'framework'),
            "id" => $shortname."_blog_text",
            "std" => __("", "framework"),
            "type" => "textarea");

$options[] = array( "name" => __('Do you want to open blog post image in lightbox ?','framework'),
            "desc" => __('Yes','framework'),
            "id" => $shortname."_use_lightbox",
            "std" => "true",
            "type" => "checkbox");

        /* Option Page - Services */
$options[] = array( "name" => __('Service Detail Page','framework'),
			"type" => "heading");		

$options[] = array( "name" => __('Service Detail Page Title','framework'),
			"desc" => __("This title will appear on Individual Service Detail Page. You can wrap the words in &lt;span&gt;&lt;/span&gt; tag to high-light them.",'framework'),
			"id" => $shortname."_service_title",
			"std" => __("Our <span>Services</span>", "framework"),
			"type" => "text");

$options[] = array( "name" => __('Text Below Title','framework'),
			"desc" => __("This text will appear below Service title.",'framework'),
			"id" => $shortname."_service_text",
			"std" => __("", "framework"),
			"type" => "textarea");



/* Option Page - Services Templates */
$options[] = array( "name" => __('Services Templates','framework'),"type" => "heading");

$options[] = array( "name" => __('Number of Services to display on One Column Services Template','framework'),
            "desc" => '',
            "id" => $shortname."_one_col_services_number",
            "std" => "3",
            "type" => "select",
            "options" => array(1,2,3,4,5,6,7,8,9,10));


$options[] = array( "name" => __('Number of Services to display on Three Columns Services Template','framework'),
            "desc" => '',
            "id" => $shortname."_three_col_services_number",
            "std" => "3",
            "type" => "select",
            "options" => array(3,6,9,12,15,18,21,24,27));

$options[] = array( "name" => __('Number of Services to display on Four Columns Services Template','framework'),
            "desc" => '',
            "id" => $shortname."_four_col_services_number",
            "std" => "4",
            "type" => "select",
            "options" => array(4,8,12,16,20,24,28));


/* Option Page - Doctors Templates */
$options[] = array( "name" => __('Doctors Templates','framework'),"type" => "heading");

$options[] = array( "name" => __('Number of Doctors to display on Two Columns Doctors Template','framework'),
            "desc" => '',
            "id" => $shortname."_two_col_doc_number",
            "std" => "4",
            "type" => "select",
            "options" => array(2,4,6,8,10));

$options[] = array( "name" => __('Number of Doctors to display on Four Columns Doctors Template','framework'),
            "desc" => '',
            "id" => $shortname."_four_col_doc_number",
            "std" => "4",
            "type" => "select",
            "options" => array(4,8,12,16,20));



/* Option Page - Gallery */
$options[] = array( "name" => __('Gallery','framework'),
			"type" => "heading");		

$options[] = array( "name" => __('Gallery Item Detail Page Title','framework'),
			"desc" => __("This title will appear on Individual Gallery Item Detail Page. You can wrap the words in &lt;span&gt;&lt;/span&gt; tag to high-light them.",'framework'),
			"id" => $shortname."_gallery_title",
			"std" => __("Our <span>Gallery</span>", "framework"),
			"type" => "text");

$options[] = array( "name" => __('Text Below Title','framework'),
			"desc" => __("This text will appear below Gallery title.",'framework'),
			"id" => $shortname."_gallery_text",
			"std" => __("", "framework"),
			"type" => "textarea");

$options[] = array( "name" => __('Default Gallery Layout','framework'),
            "desc" => __('Choose the default Gallery layout for Gallery Item Type Pages.','framework'),
            "id" => $shortname."_gallery_layout",
            "std" => "4-columns",
            "type" => "radio",
            "options" => array(
                '2-columns' => __('2 Columns','framework'),
                '3-columns' => __('3 Columns','framework'),
                '4-columns' => __('4 Columns','framework')
            ));

$options[] = array( "name" => __('Do you want to enable Image Slider on Gallery Item Detail Page ?','framework'),
            "desc" => __("Yes",'framework'),
            "id" => $shortname."_enable_slider",
            "type" => "checkbox");



/* Option Page - Contact */
$options[] = array( "name" => __('Contact','framework'),
			"type" => "heading");

$options[] = array( "name" => __('Do you want to show Google Map on contact page template?','framework'),
			"desc" => __("Yes",'framework'),
			"id" => $shortname."_gmap_show",
			"type" => "checkbox");

$options[] = array( "name" => __('Google Map Latitude','framework'),
			"desc" => __("Enter Google Map Latitude",'framework'),
			"id" => $shortname."_gmap_lati",
			"std" => "48.857976",
			"type" => "text");
			
$options[] = array( "name" => __('Google Map Longitude','framework'),
			"desc" => __("Enter Google Map Longitude",'framework'),
			"id" => $shortname."_gmap_longi",
			"std" => "2.29497",
			"type" => "text");

$options[] = array( "name" => __('Address for Google Map','framework'),
            "desc" => __('If you do not want to use Latitude and Longitude options then provide the google map address of your location.','framework'),
            "id" => $shortname."_google_address",
            "std" => "",
            "type" => "textarea");

$options[] = array( "name" => __('Google Map Zoom','framework'),
			"desc" => __("Enter Google Map Zoom Level. Example: 17",'framework'),
			"id" => $shortname."_gmap_zoom",
			"std" => "17",
			"type" => "text");

$options[] = array( "name" => __('Address','framework'),
			"desc" => __("This address will appear above contact form section.",'framework'),
			"id" => $shortname."_postal_address",
			"std" => __("", "framework"),
			"type" => "textarea");
			
$options[] = array( "name" => __('Contact Form Heading','framework'),
			"desc" => __("Enter heading for your contact form.",'framework'),
			"id" => $shortname."_contact_form_heading",
			"std" => __("Contact Us", "framework"),
			"type" => "text");

$options[] = array( "name" => __('Contact Form Text Below Heading','framework'),
			"desc" => __("Enter text that will appear below heading and above contact form.",'framework'),
			"id" => $shortname."_contact_form_text",
			"std" => __("Fill out the form below to send us a message and we will get back to you ASAP.", "framework"),
			"type" => "text");			

$options[] = array( "name" => __('Contact Email','framework'),
			"desc" => __("Enter target email address that will receive messages from contact form.",'framework'),
			"id" => $shortname."_contact_address",
			"std" => "",
			"type" => "text");			

			

/* Option Page - Footer */
$options[] = array( "name" => __('Footer','framework'),
			"type" => "heading");

$options[] = array( "name" => __('Do you want to show Twitter tweet above footer ?','framework'),
			"desc" => __("Yes",'framework'),
			"id" => $shortname."_show_twitter",
			"std" => "true",
			"type" => "checkbox");

$options[] = array( "name" => __('Twitter Username','framework'),
			"desc" => __("Provide Twitter Username to Show tweets in footer.",'framework'),
			"id" => $shortname."_twitter_username",
			"std" => "960Development",
			"type" => "text");

$options[] = array( "name" => __('Twitter Background Color','framework'),
			"desc" => __('Choose Twitter Background Color. Base Theme Color is #4099ac','framework'),
			"id" => $shortname."_twitter_bg_color",
			"std" => "#4099ac",
			"type" => "color");

$options[] = array( "name" => __('Footer Logo','framework'),
			"desc" => __('Upload the small logo of your website for footer area.','framework'),
			"id" => $shortname."_footer_logo",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('About Text','framework'),
			"desc" => __("Short text information about your organization.",'framework'),
			"id" => $shortname."_about_text",
			"std" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis adipiscing id nulla vel lorem dapibus fringilla eget non felis, porttitor lectus.",
			"type" => "textarea");

$options[] = array( "name" => __('Read More Link','framework'),
			"desc" => __("Provide Target URL for Read More button in footer.",'framework'),
			"id" => $shortname."_footer_read_more",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Footer Background Color','framework'),
			"desc" => __('Choose a Background Color for Footer. Base Theme Color is #2B2E2F','framework'),
			"id" => $shortname."_footer_bg_color",
			"std" => "#2B2E2F",
			"type" => "color");

$options[] = array( "name" => __('Footer Text Color','framework'),
			"desc" => __('Choose a Text Color for Footer. Base Theme Color is #808080','framework'),
			"id" => $shortname."_footer_text_color",
			"std" => "#808080",
			"type" => "color");	

$options[] = array( "name" => __('Footer Link Color','framework'),
			"desc" => __('Choose a Link Color for Footer. Base Theme Color is #CDCDCD','framework'),
			"id" => $shortname."_footer_link_color",
			"std" => "#CDCDCD",
			"type" => "color");

$options[] = array( "name" => __('Footer Link Hover Color','framework'),
			"desc" => __('Choose a Link Hover Color for Footer. Base Theme Color is #48A2B6','framework'),
			"id" => $shortname."_footer_hover_color",
			"std" => "#48A2B6",
			"type" => "color");	
			
$options[] = array( "name" => __('Copyright Text','framework'),
			"desc" => __("Enter Footer Copyright Text here. For bold text wrap your text in span tag. <br /> &lt; span &gt;Your Text &lt; /span &gt;",'framework'),
			"id" => $shortname."_copyright_text",
			"std" => "&copy; 2012",
			"type" => "textarea");

$options[] = array( "name" => __('Footer Right Side Text','framework'),
			"desc" => __("Enter text that will appear on the right side of footer.",'framework'),
			"id" => $shortname."_footer_author_text",
			"std" => "",
			"type" => "textarea");


update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}

?>
