<?php
session_start();
/*-----------------------------------------------------------------------------------*/
/*	Load Text Domain
/*-----------------------------------------------------------------------------------*/	
        load_theme_textdomain( 'framework' );
	
	

/*-----------------------------------------------------------------------------------*/
/*	Include Theme Options Framework
/*-----------------------------------------------------------------------------------*/	
		require_once(get_template_directory() . '/admin/admin-functions.php');
		require_once(get_template_directory() . '/admin/admin-interface.php');
		require_once(get_template_directory() . '/admin/theme-settings.php');


	
/*-----------------------------------------------------------------------------------*/
/*	Add Custom Background
/*-----------------------------------------------------------------------------------*/
		add_theme_support( 'custom-background' );



/*-----------------------------------------------------------------------------------*/
/*	Add Automatic Feed Links Support
/*-----------------------------------------------------------------------------------*/
		add_theme_support( 'automatic-feed-links' );



/*-----------------------------------------------------------------------------------*/
/*	REMOVE GENERATOR META TAG
/*-----------------------------------------------------------------------------------*/	
		remove_action('wp_head', 'wp_generator');



/*-----------------------------------------------------------------------------------*/
/*	Include Custom Post Type For Services
/*-----------------------------------------------------------------------------------*/	
        require_once ( get_template_directory() . '/include/service-post-type.php' );
        require_once ( get_template_directory() . '/include/doctor-post-type.php' );
        require_once ( get_template_directory() . '/include/slide-post-type.php' );
		require_once ( get_template_directory() . '/include/gallery-post-type.php' );
        require_once ( get_template_directory() . '/include/testimonials-post-type.php' );
		require_once ( get_template_directory() . '/include/faq-post-type.php' );



/*-----------------------------------------------------------------------------------*/
/*	Include Meta Boxes
/*-----------------------------------------------------------------------------------*/	
        require_once( get_template_directory() . '/include/meta-box.php');



/*-----------------------------------------------------------------------------------*/	
//	Widgets
/*-----------------------------------------------------------------------------------*/
        require_once( get_template_directory() . '/widgets/' . 'quick-contact.php');
		require_once( get_template_directory() . '/widgets/' . 'subscription-widget.php');
		require_once( get_template_directory() . '/widgets/' . 'appointment-widget.php');
		require_once( get_template_directory() . '/widgets/' . 'recent-posts-widget.php');
		require_once( get_template_directory() . '/widgets/' . 'footer-info-widget.php');
		require_once( get_template_directory() . '/widgets/' . 'location-widget.php');



/*-----------------------------------------------------------------------------------*/
//	Register Widgets
/*-----------------------------------------------------------------------------------*/
		add_action( 'widgets_init', 'register_theme_widgets' );
		
		function register_theme_widgets() {
				register_widget( 'Quick_Contact_Widget' );
				register_widget( 'Newsletter_Subscription_Widget' );
				register_widget( 'Appointment_Widget' );
				register_widget( 'Recent_Posts_With_Thumb' );
				register_widget( 'Footer_Information_Widget' );
				register_widget( 'Location_Widget' );
		}



/*-----------------------------------------------------------------------------------*/
//	Shortcodes
/*-----------------------------------------------------------------------------------*/
	    require_once( get_template_directory() . '/include/shortcodes/columns.php' );
		require_once( get_template_directory() . '/include/shortcodes/elements.php' );		


/*-----------------------------------------------------------------------------------*/
//	Dynamic CSS
/*-----------------------------------------------------------------------------------*/
	    require_once( get_template_directory() . '/css/dynamic-css.php' );


/*-----------------------------------------------------------------------------------*/
/*	Adding Default Thumbnail Sizes
/*-----------------------------------------------------------------------------------*/
		if( function_exists( 'add_theme_support' ) ) {
				add_theme_support( 'post-thumbnails' );
				add_image_size( 'sidebar-post-thumb', 52, 38, true); // For Sidebar Post Thumbnails
				
				// for services
				add_image_size( 'std-service-thumbnail', 637, 9999); // For Standard Post Thumbnails
				add_image_size( 'one-column-services', 424, 182, true); // For Once Column Services
				add_image_size( 'three-columns-services', 298, 160, true); // For Three Column Services
				add_image_size( 'four-columns-services', 214, 131, true); // For Three Column Services
				
				// for Doctors
				add_image_size( 'doctors-template', 970, 9999 );
				add_image_size( 'doctor-column', 214, 170, true);
				add_image_size( 'doctor-profile', 214, 9999 );
				add_image_size( 'doctor-team-thumb', 186, 148, true );
				
				// for Slider
				add_image_size( 'slider-img', 980, 445, true );
				add_image_size( 'slider-img-thumb', 154, 70, true );
				
				// for Testimonials
				add_image_size( 'testimonial-thumb', 80, 80, true );
				
				// for gallery
                add_image_size( 'gallery-slider', 637, 425, true); // For Gallery Slider
				add_image_size( 'gallery-4-columns', 215, 131, true);	// gor gallery 4 columns			
				// three-columns-services size is fine for gallery 3 columns
				add_image_size( 'gallery-2-columns', 466, 240, true);
					
		}  
				
	
		
/*-----------------------------------------------------------------------------------*/
/*	Enables Wigitized Sidebars
/*-----------------------------------------------------------------------------------*/
		if ( function_exists('register_sidebar') ){
				// Location: Blog Sidebar
				register_sidebar(array('name'=>'Blog Sidebar',
						'before_widget' => '<section class="widget">',
						'after_widget' => '</section>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>'
				));
				
				// Location: Home Sidebar
				register_sidebar(array('name'=>'Home Sidebar',
						'before_widget' => '<section class="widget">',
						'after_widget' => '</section>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>'
				));
				
				// Location: Page Sidebar
				register_sidebar(array('name'=>'Page Sidebar',
						'before_widget' => '<section class="widget">',
						'after_widget' => '</section>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>'
				));

                // Location: Service Sidebar
                register_sidebar(array('name'=>'Service Sidebar',
                    'before_widget' => '<section class="widget">',
                    'after_widget' => '</section>',
                    'before_title' => '<h3 class="title">',
                    'after_title' => '</h3>'
                ));

                // Location: Doctor Sidebar
                register_sidebar(array('name'=>'Doctor Sidebar',
                    'before_widget' => '<section class="widget">',
                    'after_widget' => '</section>',
                    'before_title' => '<h3 class="title">',
                    'after_title' => '</h3>'
                ));

				// Location: Contact Sidebar
				register_sidebar(array('name'=>'Contact Sidebar',
						'before_widget' => '<section class="widget">',
						'after_widget' => '</section>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>'
				));
				
				// Location: Footer First Column
				register_sidebar(array('name'=>'Footer First Column',
						'before_widget' => '<section class="widget">',
						'after_widget' => '</section>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>'
				));	
				
				// Location: Footer Second Column
				register_sidebar(array('name'=>'Footer Second Column',
						'before_widget' => '<section class="widget">',
						'after_widget' => '</section>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>'
				));
				
				// Location: Footer Third Column
				register_sidebar(array('name'=>'Footer Third Column',
						'before_widget' => '<section class="widget">',
						'after_widget' => '</section>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>'
				));
				
				// Location: Footer Fourth Column
				register_sidebar(array('name'=>'Footer Fourth Column',
						'before_widget' => '<section class="widget">',
						'after_widget' => '</section>',
						'before_title' => '<h3 class="title">',
						'after_title' => '</h3>'
				));			
		}



/*-----------------------------------------------------------------------------------*/
/*	Creating Menu Places
/*-----------------------------------------------------------------------------------*/
		add_theme_support( 'menus' );
		if ( function_exists( 'register_nav_menus' ) ) {
			  	register_nav_menus(
				  		array(
				  		  'main-menu' => 'Main Menu'
				  		)
			  	);
		}



/*-----------------------------------------------------------------------------------*/
/*	Custom Excerpt Method
/*-----------------------------------------------------------------------------------*/
		function framework_excerpt($len=15, $trim="&hellip;"){
			  	
				$limit = $len+1;
			  	$excerpt = explode(' ', get_the_excerpt(), $limit);
			  	$num_words = count($excerpt);
			  	if($num_words >= $len){
					
			  		$last_item = array_pop($excerpt);
			  	
				}
			  	else {
			  		
					$trim = "";
			  	
				}
				
			  	$excerpt = implode(" ",$excerpt)."$trim";
			  	
			  	echo $excerpt;
				
	  	}
	  	
	  	function get_framework_excerpt($len=15, $trim="&hellip;"){
			
	  		$limit = $len+1;
	  		$excerpt = explode(' ', get_the_excerpt(), $limit);
	  		$num_words = count($excerpt);
		  	if($num_words >= $len){
		  			$last_item=array_pop($excerpt);
		  	}
		  	else{
				
		  		$trim="";
		  	
			}
			
	  		$excerpt = implode(" ",$excerpt)."$trim";
	  
	  		return $excerpt;
	  	}


/*-----------------------------------------------------------------------------------*/
/*	 appointment request function to process appointment form submition
/*-----------------------------------------------------------------------------------*/		
	add_action( 'wp_ajax_nopriv_request_appointment', 'request_appointment' );
	add_action( 'wp_ajax_request_appointment', 'request_appointment' );	
	
	function request_appointment()
	{	
			if(isset($_POST['apo_email'])):		
					
					if( empty($_POST['captcha']) || ($_POST['captcha'] != $_SESSION['app_rand_code']))
					{
                        _e( 'Wrong Code!', 'framework');
						die;
					}
					
					$name = $_POST['apo_name'];		            
					$phone = $_POST['apo_phone'];
					$email = $_POST['apo_email'];
					$ap_date = $_POST['apo_date'];
		            $message = $_POST['message'];
					$address = $_POST['target'];
					
		            if(get_magic_quotes_gpc()) {
		                    $message = stripslashes($message);
		            }										

					$e_subject = __('You Have Received an Appointment Request From : ','framework') . $name . '.';
										
					
					$e_body = 	__("You have Received an Appointment Request From ", 'framework')
								. "\n"
								.__("Name: ", 'framework').$name								
								. "\n"
								.__("Phone: ", 'framework') . $phone								
								. "\n"
								.__("Email: ", 'framework') . $email								
								. "\n"
								.__("Desired Date: ", 'framework') . $ap_date								
								. "\n"
								.__("Their additional message is as follows.", 'framework')
								."\r\n\n";
					
					$e_content = "\" $message \"\r\n\n";
					
					$e_reply = 	__("You can contact ", 'framework')
								.$name 
								. __(" via email ", 'framework')
								.$email
								. __(" OR via phone ", 'framework')
								.$phone;
					
					$msg = $e_body . $e_content . $e_reply;
					
					if(wp_mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n","-f $address"))
					{						 
						_e("Appointment Request Sent Successfully!", 'framework');
					} 
					else 
					{
						_e("Server Error: WordPress mail method failed!", 'framework');	
					}						
			else:			
					_e("Invalid Request !", 'framework');						
			endif;
				
			die;
			
	}
	
	
	
/*-----------------------------------------------------------------------------------*/
/*	 send message function to process contact form submition
/*-----------------------------------------------------------------------------------*/		
	add_action( 'wp_ajax_nopriv_send_message', 'send_message' );
	add_action( 'wp_ajax_send_message', 'send_message' );	
	
	function send_message()
	{	
			if(isset($_POST['email'])):

                    if( empty($_POST['captcha']) || ($_POST['captcha'] != $_SESSION['rand_code']))
					{							
						_e( 'Wrong Code!', 'framework');
						die;
					}
										
					$name = $_POST['author'];
		            $email = $_POST['email'];
					$phone = $_POST['phone'];
					$subject = $_POST['subject'];
		            $message = $_POST['message'];
					$address = $_POST['target'];
					
		            if(get_magic_quotes_gpc()) {
		                    $message = stripslashes($message);
		            }										

					$e_subject = __('You Have Received a Message From ','framework') . $name . '.';
					
					if(!empty($subject))
					{
						$e_subject = $subject . ':' . $name . '.';
					}
					
					$e_body = 	__("You have Received a message from: ", 'framework')
								.$name								
								. "\n"
								."Phone: " . $phone								
								. "\n"
								.__("Their additional message is as follows.", 'framework')
								."\r\n\n";
					
					$e_content = "\" $message \"\r\n\n";
					
					$e_reply = 	__("You can contact ", 'framework')
								.$name 
								. __(" via email, ", 'framework')
								.$email;
					
					$msg = $e_body . $e_content . $e_reply;
					if(wp_mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n","-f $address"))
					{						 
						_e("Message Sent Successfully!", 'framework');
					} 
					else 
					{
						_e("Server Error: WordPress mail method failed!", 'framework');	
					}						
			else:			
					_e("Invalid Request !", 'framework');						
			endif;
				
			die;
			
	}


	
/*-----------------------------------------------------------------------------------*/
/*	Comment Template
/*-----------------------------------------------------------------------------------*/
		function theme_comment($comment, $args, $depth) 
		{			   		   				
				$GLOBALS['comment'] = $comment;
				switch ( $comment->comment_type ) :
					case 'pingback' :
					case 'trackback' :
								?>
								<li class="pingback">
									<p><?php _e( 'Pingback:', 'framework' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'framework' ), ' ' ); ?></p>
                                </li>
								<?php
						break;
					default :
						?>
		
                        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">                
                            <article id="comment-<?php comment_ID(); ?>"> 
                            	<a href="<?php comment_author_url(); ?>">               
                                	<?php echo get_avatar( $comment, 60 ); ?>     
                                </a>           
                                <div class="comment-meta">
                
                                    <h5 class="author">
                                        <?php printf( __('%s', 'framework'), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
                                        <?php comment_reply_link( array_merge( array('before' => ' - '), array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                                    </h5>
                
                                    <p class="date">
                                        <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                                            <time datetime="<?php comment_time( 'c' ); ?>">
                                                <?php printf( __( '%1$s at %2$s', 'framework' ), get_comment_date(), get_comment_time() ); ?>
                                            </time>
                                        </a>
                                    </p>
                                    
                                </div><!-- end .comment-meta -->
                
                                <div class="comment-body">
                                
                                    <?php if ( $comment->comment_approved == '0' ) : ?>
                                        <p><em><?php _e('Your comment is awaiting moderation.', 'framework'); ?></em></p>
                                    <?php endif; ?>
                                    
                                    <?php comment_text(); ?>
                                    
                                    <?php edit_comment_link( __( 'Edit', 'framework' ), ' ' ); ?>
                                    
                                </div><!-- end of comment-body -->
                
                            </article><!-- end of comment -->                                       
                
                        <?php
						break;
				endswitch;
		
		}
		
		

/*-----------------------------------------------------------------------------------*/
/*	Content Width
/*-----------------------------------------------------------------------------------*/

if ( ! isset( $content_width ) ) $content_width = 645;		



/*-----------------------------------------------------------------------------------*/
//	Theme Pagination Method
/*-----------------------------------------------------------------------------------*/
	
	function theme_pagination($pages = ''){
		global $paged;
		$paged = get_query_var( 'paged' );
		
		if(empty($paged))$paged = 1;
		
		$prev = $paged - 1;							
		$next = $paged + 1;	
		$range = 2; // only change it to show more links
		$showitems = ($range * 2)+1;
		
		if($pages == '')
		{	
				global $wp_query;
				$pages = $wp_query->max_num_pages;
				if(!$pages)
				{
						$pages = 1;
				}
		}
		
		
		if(1 != $pages){
				echo "<div id='pagination'>";
				echo ($paged > 2 && $paged > $range+1 && $showitems < $pages)? "<a href='".get_pagenum_link(1)."' class='readmore'>&laquo; ".__('First', 'framework')."</a> ":"";
				echo ($paged > 1 && $showitems < $pages)? "<a href='".get_pagenum_link($prev)."' class='readmore'>&laquo; ". __('Previous', 'framework')."</a> ":"";
				
					
				for ($i=1; $i <= $pages; $i++){
						if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
								echo ($paged == $i)? "<a href='".get_pagenum_link($i)."' class='readmore current'>".$i."</a> ":"<a href='".get_pagenum_link($i)."' class='readmore'>".$i."</a> "; 
						}
				}
				
				echo ($paged < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($next)."' class='readmore'>". __('Next', 'framework') ." &raquo;</a> " :"";
				echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."' class='readmore'>". __('Last', 'framework') ." &raquo;</a> ":"";
				echo "</div>";
				}
	}



/*-----------------------------------------------------------------------------------*/
//	Redirect User to Theme Options Page after Theme Activation
/*-----------------------------------------------------------------------------------*/
    global $pagenow;
    if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' )
    {
        wp_redirect( admin_url( 'admin.php?page=siteoptions' ) );
        exit;
    }
	
	

/*-----------------------------------------------------------------------------------*/
/*	For Loading Required CSS Files
/*-----------------------------------------------------------------------------------*/
		if(!function_exists('load_theme_styles'))
		{
				function load_theme_styles()
				{		
						if (!is_admin()) 
						{
								// register styles
								wp_register_style('media-queries',  get_template_directory_uri() . '/media-queries.css');
								wp_register_style('custom-css',  get_template_directory_uri() . '/custom.css');
								wp_register_style('prettyPhoto',  get_template_directory_uri() . '/js/prettyPhoto/css/prettyPhoto.css');
								wp_register_style('flexslidercss',  get_template_directory_uri() . '/js/flexslider/flexslider.css');
								wp_register_style('jquery-ui-css',  get_template_directory_uri() . '/css/redmond/jquery.ui.all.css');	
															
								
								// enqueue styles
								wp_enqueue_style('media-queries');
								
								if( is_page_template('template-home.php')  || is_page_template('template-home-with-sidebar.php') || is_page_template('template-home-with-blog-posts.php') || is_singular('gallery-item') )
								{
									    wp_enqueue_style('flexslidercss');
								}
								
								wp_enqueue_style('prettyPhoto');
								wp_enqueue_style('jquery-ui-css');
								
								wp_enqueue_style('custom-css');
								
						}		
				}
		}
	  	add_action('wp_enqueue_scripts', 'load_theme_styles');	



/*-----------------------------------------------------------------------------------*/
/*	For Loading Required JS Files
/*-----------------------------------------------------------------------------------*/
		if(!function_exists('load_theme_scripts')){
			
				function load_theme_scripts(){
					
						if (!is_admin()) {
								
								// Defining scripts directory url
								$jscriptURL = get_template_directory_uri().'/js/';
								
								// Registering Scripts
								wp_register_script('prettyphoto', $jscriptURL.'prettyPhoto/js/jquery.prettyPhoto.js', array('jquery'), '3.1.4', false);
								wp_register_script('cycle', $jscriptURL.'jquery.cycle.lite.js', array('jquery'), '1.6', false);
								wp_register_script('easing', $jscriptURL.'jquery.easing.1.3.js', array('jquery'), '1.3', false);
								wp_register_script('validate', $jscriptURL.'jquery.validate.min.js', array('jquery'), '1.10.0', false);
								wp_register_script('forms', $jscriptURL.'jquery.form.js', array('jquery'), '3.18', false);								
								wp_register_script('flexslider', $jscriptURL.'flexslider/jquery.flexslider-min.js', array('jquery'), '2.0', false);
								wp_register_script('isotope', $jscriptURL.'jquery.isotope.min.js',array('jquery'), '1.5.19', false);							
								wp_register_script('custom',$jscriptURL.'custom.js', array('jquery'), '1.2', true);
								
								
								// Enqueuing Scripts that are needed all the pages
								wp_enqueue_script('jquery');
								wp_enqueue_script('jquery-ui-core');
								wp_enqueue_script('jquery-ui-datepicker');
								wp_enqueue_script('prettyphoto');
								wp_enqueue_script('validate');
								wp_enqueue_script('forms');
								
								// load cycle plugin, easing plugin and flex slider files for specific pages
								if( is_page_template('template-home.php') || is_page_template('template-home-demo.php') || is_page_template('template-home-with-sidebar.php') || is_page_template('template-home-with-blog-posts.php') || is_singular('gallery-item')  )
								{
									    wp_enqueue_script('cycle');
										wp_enqueue_script('easing');
										wp_enqueue_script('flexslider');
								}								
								
								// load Isotope for gallery pages
		    					if( is_page_template( 'template-4-columns-gallery.php' || 'template-3-columns-gallery.php' || 'template-2-columns-gallery.php') ) 
								{
		    	    				wp_enqueue_script('isotope');
		    					}
								
								wp_enqueue_script('custom');

                                // Responsive Navigation Title Translation Support - Ref : http://codex.wordpress.org/Function_Reference/wp_localize_script
                                $localized_array = array(
                                                    'nav_title' => __('Go to...','framework'),
                                                    'wrong_code' => __("Wrong Code!", 'framework')
                                                    );
                                wp_localize_script( 'custom', 'localized', $localized_array );
								
								
						}
				}
		}
		add_action('wp_enqueue_scripts', 'load_theme_scripts');		
		
		
/*-----------------------------------------------------------------------------------*/
/*	Get first Term with link
/*-----------------------------------------------------------------------------------*/	

	function get_first_term_with_link( $post_id, $taxonomy)
	{
		$link = '';		
		$terms = get_the_terms( $post_id, $taxonomy );					
		if ( $terms && ! is_wp_error( $terms ) ) :
			foreach ( $terms as $term ) 
			{				
				$link = '<a href="'.get_term_link($term->slug, $taxonomy).'">'.$term->name.'</a>';
				break;
			}			
			return $link;										
		endif; 
		
		return $link;
	}	
	

/*-----------------------------------------------------------------------------------*/
/*	Remove rel attribute from the category list
/*-----------------------------------------------------------------------------------*/	
	function remove_category_list_rel($output)
	{
		$output = str_replace(' rel="category tag"', '', $output);
		return $output;
	}
	add_filter('wp_list_categories', 'remove_category_list_rel');
	add_filter('the_category', 'remove_category_list_rel');



/*-----------------------------------------------------------------------------------*/
/*	WPML Custom Language Switcher Function
/*-----------------------------------------------------------------------------------*/
    if(!function_exists('language_selector_flags')){

        function language_selector_flags(){
            $languages = icl_get_languages('skip_missing=0&orderby=code');
            if(!empty($languages)){
                echo '<div id="custom-lang-switcher">';
                foreach($languages as $l){
                    if($l['country_flag_url']){
                        if(!$l['active']) echo '<a href="'.$l['url'].'">';
                        echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
                        if(!$l['active']) echo '</a>';
                    }
                    if(!$l['active']) echo '<a href="'.$l['url'].'">';
                    echo $l['native_name'];
                    if(!$l['active']) echo '</a>';
                }
                echo '</div>';
            }
        }

    }
