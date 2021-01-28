<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package marketing
 */
?>
		<section id="neweletter" class="newsletter_form">
			<div class="container">
				<section class="news_letter_description">
					<p>Join my mailing list to have text emails sent about new posts. Sometimes you get something special.
					</p>
				</section>

				<section class="newsletter-section">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Newsletter')) : ?><?php endif;?> 
				</section> <!-- .newsletter-section -->
			</div>
		</section> <!-- .newsletter-->



		<footer class="site-footer">
			<div class="top-footer">
				<div class="container">
					<div class="col">
						<section class="widget widget_text">
							<h2 class="widget-title">About</h2>
							<div class="textwidget">
													<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer One')) : ?><?php endif;?> 
							</div>
						</section>
					</div>
					<div class="col">
						
						<section class="widget widget_recent_entries">	
							
									
							<ul>
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Recent Post')) : ?><?php endif;?> 
							</ul>
						</section>
					</div>
					<div class="col">
						<section class="widget widget_categories">
							
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Categories')) : ?><?php endif;?> 
						</section>
					</div>
				</div>
			</div> <!-- .top-footer -->
			<div class="bottom-footer">
				<div class="container">
					<div class="copyright">            
						<span>&copy; <?php echo the_date('Y');?> <a href="<?php bloginfo('url'); ?>/">Super Ultra Light</a> - All Rights Reserved. </span><a href="<?php bloginfo('url'); ?>/" target="_blank"> Super Ultra Light</a> by Rara Themes. Powered by <a href="#" target="_blank">WordPress</a>. <a class="privacy-policy-link" href="<?php bloginfo('url') ;?>/">Privacy Policy</a>               
					</div>
					<div class="footer-social">
						<ul class="social-list">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Social Icon')) : ?><?php endif;?>
						</ul>
					</div>
				</div>
			</div>
		</footer> <!-- .site-footer -->
	</div> <!-- #page -->

	<!-- JS FILES -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.12.0.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>

<?php wp_footer(); ?>