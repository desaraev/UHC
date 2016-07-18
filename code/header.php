<!doctype html>
<!--[if IE 7]>    <html class="ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>    <html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
		<head>
				<!-- META TAGS -->
				<meta charset="<?php bloginfo( 'charset' ); ?>" />
				<meta name="viewport" content="width=device-width" />
				
				<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
                				               				                
                <?php
				$favicon = get_option('theme_favicon');
				if( !empty($favicon) )
				{
					?>
					<!-- FAVICON -->
					<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
					<?php
				}
				?>
                <!--start original-->
<link rel="stylesheet" type="text/css" href="/css/style-1-1.css">

<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29688180-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>
<script src="/js/dropdownPlain.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/themes/smoothness/jquery-ui.css">
		<!--end original-->
                <!-- Style Sheet-->
               <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type='text/css'> bootstrap-->
                <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,700,800,600&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
				<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>                                         
                
                <!-- Pingback URL -->
                <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
                
                <!-- RSS -->
                <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
                <link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />                                
                
                <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
				
				<?php 
				// Quick CSS from Theme Options
				$quick_css = stripslashes(get_option('theme_quick_css')); 
				
				if(!empty($quick_css))
				{
					echo "<style type='text/css' id='quick-css'>\n\n";
					echo $quick_css . "\n\n";
					echo "</style>";
				}					
				?>

                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                
                <?php 
				// Google Analytics From Theme Options
				echo stripslashes(get_option('theme_google_analytics')); 
				?>

            <?php wp_head(); ?>
				
		</head>
		<body <?php body_class(); ?>>				
 <a href="#container" class="skip">Skip to content</a>

				<!-- Starting Website Wrapper -->
                <div id="wrapper">
                		
                        <!-- Starting Header of the website -->
                        <header id="header">
<div class="top-nav clearfix desktoponly">
  <ul>
   <li><a href="/beta/home" class="topnav">Home</a></li>
   <li><a href="/beta/about-us/" class="topnav">About Us</a></li>
   <li><a href="/beta/hearing-aid-locations" class="topnav">Locations</a></li>
   <li><a href="/beta/mobile-hearing-center-3/" class="topnav">Mobile Hearing Center</a></li>
   <li><a href="/beta/schedule-a-free-hearing-test/" class="topnav">Schedule a Free Hearing Test</a></li>
   <li><a href="/beta/field-test-hearing-aid" class="topnav">Test a Hearing Aid</a></li>
  </ul>
     
				</div>

                            <?php
                            // WPML Lanugage Switcher
                            if(function_exists('icl_get_languages')){
                                language_selector_flags();
                            }

                            $logo_path = get_option('theme_sitelogo');

                            if(!empty($logo_path))
                            {
                                ?>
                                <!-- Website Logo Place -->
                                <div id="logo-container">
                                    <a href="<?php echo home_url(); ?>" class="logo"  title="<?php bloginfo( 'name' ); ?>">
                                        <img src="<?php echo $logo_path; ?>" alt="<?php  bloginfo( 'name' ); ?>">
                                        <span class="tagline"><?php bloginfo( 'description' ); ?></span>
                                    </a>
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                <div id="logo-container">
                                    <h2 class="logo-heading">
                                        <a href="<?php echo home_url(); ?>"  title="<?php bloginfo( 'name' ); ?>">
                                            <?php  bloginfo( 'name' ); ?>
                                        </a>
                                    </h2>
                                    <span class="tagline"><?php bloginfo( 'description' ); ?></span>
                                </div>
                                <?php
                            }
                            ?>

                                
                                <?php
										$show_social = get_option('theme_show_social_menu');
										
										$sl_faceook = get_option('theme_facebook_link');
										$sl_twitter = get_option('theme_twitter_link');
										$sl_flickr = get_option('theme_flickr_link');
										$sl_google = get_option('theme_google_link');
										$sl_linkedin = get_option('theme_linkedin_link');
										$sl_rss = get_option('theme_rss_link');
										$sl_skype = get_option('theme_skype_link');
                                        $sl_pin = get_option('theme_pin_link');
                                        $sl_youtube = get_option('theme_youtube_link');
										$sl_phone = get_option('theme_phone_link');

										
										if($show_social == 'true')
										{
		                        				?>                                   
                                                <ul class="social-nav">
                                                        <?php
                                                                echo ($sl_faceook) ? '<li class="facebook"><a target="_blank" href="'.$sl_faceook.'"></a></li>' : '';
                                                                echo ($sl_twitter) ? '<li class="twitter"><a target="_blank" href="'.$sl_twitter.'"></a></li>' : '';
                                                                echo ($sl_skype) ? '<li class="skype"><a target="_blank" href="'.$sl_skype.'"></a></li>' : '';																	
                                                                echo ($sl_flickr) ? '<li class="flickr"><a target="_blank" href="'.$sl_flickr.'"></a></li>' : '';																	
                                                                echo ($sl_google) ? '<li class="google"><a target="_blank" href="'.$sl_google.'"></a></li>' : '';																
                                                                echo ($sl_linkedin) ? '<li class="linkedin"><a target="_blank" href="'.$sl_linkedin.'"></a></li>' : '';
                                                                echo ($sl_pin) ? '<li class="pin"><a target="_blank" href="'.$sl_pin.'"></a></li>' : '';
                                                                echo ($sl_youtube) ? '<li class="youtube"><a target="_blank" href="'.$sl_youtube.'"></a></li>' : '';
                                                                echo ($sl_rss) ? '<li class="rss"><a target="_blank" href="'.$sl_rss.'"></a></li>' : '';
																echo ($sl_phone) ? '<li class="phone"><span>'.$sl_phone.'</span></li>' : '';														
                                                        ?>
                                                </ul>
                                				<?php 
										} 
										?>                                
								
                          
                                <nav class="main-nav">

                                		<!-- MAIN NAVIGATION -->
                                		<?php 
										wp_nav_menu( array( 
											'theme_location' => 'main-menu',
                                            'container' => 'div',
                                            'container_class' => 'menu-div'
										)); 
										?>
                                        
                                        <!-- GLOBAL SEARCH -->
                                        <form method="get" action="<?php echo home_url(); ?>" id="topsearch">
                                        		<p>
                                                		<input type="text" placeholder="<?php _e('Search','framework'); ?>" name="s" id="tsearch">
                                                        <input type="submit" id="topsubmit" value="">
                                                </p>
                                        </form>
                                </nav>
                        </header><!-- ending of header of the website -->
