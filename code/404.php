<?php get_header(); ?>
                        
                        <hgroup class="page-head">
                                <h1><?php _e("Page Not Found", 'framework'); ?> <span>404</span></h1>
                                <h5><?php _e('Perhaps Navigation &amp; Search might help!', 'framework'); ?></h5>                                
                        </hgroup>
                        
                        <div id="container" class="clearfix">

                                <div id="content">
								        <h3><?php _e('Apologies, The page you requested could not be found!','framework');?></h3>
                                        <p><?php _e('Please try Navigation at the top or Search box to find what you are looking for!', 'framework'); ?></p>
                                </div>

                                <?php get_sidebar(); ?>
                                                                
                                <?php get_template_part('sections/twitter'); ?>
								
                        </div><!-- end of container -->
                        
<?php get_footer(); ?>
