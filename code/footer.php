                        <div id="footer-wrap">
                        		
                                <footer class="clearfix">
                                
										<section class="footer-widget">
                                            <?php if ( ! dynamic_sidebar( 'Footer First Column' )) : ?>
										    <?php endif; ?>													
										</section>
										
										<section class="footer-widget">
                                            <?php if ( ! dynamic_sidebar( 'Footer Second Column' )) : ?>
										    <?php endif; ?>                                        
										</section>
										
										<section class="footer-widget">
                                            <?php if ( ! dynamic_sidebar( 'Footer Third Column' )) : ?>
										    <?php endif; ?>                                         
										</section>
										
										<section class="footer-widget">
                                            <?php if ( ! dynamic_sidebar( 'Footer Fourth Column' )) : ?>                                               
										    <?php endif; ?>                                     
										</section>
									
                                </footer><!-- end of #bottom -->                                                       		                                
								
                        </div><!-- footer-wrap -->
                        
						<div id="footer-bottom-wrapper">
							<div id="footer-bottom">
									<p class="copyrights"><?php echo stripslashes(get_option('theme_copyright_text')); ?></p>
									<p class="author"><?php echo stripslashes(get_option('theme_footer_author_text')); ?></p>
		                    </div><!-- footer-bottom -->
						</div>
                        
                </div><!-- End of Wrapper Div -->

				<a href="#top" id="scroll-top"></a>
				
                <?php wp_footer(); ?>
                	
		</body>
</html>	  
