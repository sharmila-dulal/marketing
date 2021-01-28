<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package marketing
 */

get_header(); ?>
		<div class="site-banner">
			<?php
			query_posts('post_type=banner&posts_per_page=1');
			if( have_posts()) : while( have_posts()) : the_post();
			//$backgroundImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
			?>
			
			<div class="banner-item">
				<img src="<?php the_post_thumbnail_url();?>" alt="banner">
				<div class="banner-caption center">
					<div class="container">
						<h1 class="title">
							<a href="<?php the_permalink();?>"><?php the_title(); ?></a>

						</h1>
						<div class="item-desc">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
			<?php 
			endwhile; 
			endif; 
			wp_reset_query(); 
			?>
			
		</div> <!-- .site-banner -->

		<section class="about-section">
			<div class="container">
				<section class="widget widget_raratheme_featured_page_widget">                
					<div class="widget-featured-holder right">
						<?php $the_query = new WP_Query( 'page_id=112' );
						while ($the_query -> have_posts()) : $the_query -> the_post();
						$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' );	
						 ?>
						<p class="section-subtitle">                        
							<span><?php the_title();?></span>
						</p>                    

                      	<div class="text-holder">
							<h2 class="widget-title">Hi, I'm Raushan.</h2>
							<div class="featured_page_content">
								<?php the_content(); ?>
								<a href="#" target="_blank" class="btn-readmore">Know more about me</a>
							</div>
						</div>
						<div class="img-holder">
							<a target="_blank" href="<?php the_permalink();?>">
								<img src="<?php echo $backgroundImg[0]; ?>" alt="Feature Image">                      
							</a>
						</div>

     <?php endwhile;?>



					</div>       
				</section>
			</div>
		</section> <!-- .about-section -->

		<section class="client-section">
			<div class="container">
				<section class="widget widget_raratheme_client_logo_widget">            
					<div class="raratheme-client-logo-holder">
						<div class="raratheme-client-logo-inner-holder">
							<h2 class="widget-title" itemprop="name">Raushan has been featured on:</h2>                             
							<div class="image-holder-wrap"> <!-- yo wrap plugin ko filter bata rakhnu parxa -->
								<?php 
								query_posts('posts_per_page=6&post_type=feature');	
								if (have_posts()) : while (have_posts()) : the_post();
								$backgroundImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
								?>
								
								<div class="image-holder black-white">
									<a href="<?php the_permalink();?>" target="_blank">
										<img src="<?php echo $backgroundImage; ?>" alt="">
									</a> 
								</div>
								<?php
								endwhile;
								endif;
								//Reset Query
								wp_reset_query();											
								?> 
								
								
							</div>
						</div>
					</div>
				</section>
			</div>
		</section> <!-- .client-section -->

		<section class="service-section">
			<div class="container">
				<section class="widget widget_text">
					<h2 class="widget-title">What do you need help with now?</h2>
					<div class="textwidget">
						<p>Get evidence-based collection of articles on a topic sent directly to you in one email.</p>
					</div>    		
				</section>
				<?php 
                query_posts('posts_per_page=6&post_type=service');	
                if (have_posts()) : while (have_posts()) : the_post();
                $backgroundImage = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
                ?>

				<section class="widget widget_rrtc_icon_text_widget">        
					<div class="rtc-itw-holder">
						<div class="rtc-itw-inner-holder">
							<div class="text-holder">
								<h2 class="widget-title" itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="content">
									<p><?php echo substr(strip_tags(get_the_content()),0,350).''; ?></p>
								</div>
								<a class="btn-readmore" href="<?php the_permalink(); ?>" target="_blank">Learn More</a>                              
							</div>
							<div class="icon-holder">
								<span class="fab"><img src="<?php echo $backgroundImage; ?>" alt="Generate Better Plans"></span>
								
							</div>
						</div>
					</div>
				</section>

				<?php
                endwhile;
                endif;
                //Reset Query
                wp_reset_query();											
                ?> 

			</div>
		</section> <!-- .service-section -->

		<div id="content" class="site-content">
			<header class="page-header">
				<div class="container">
					<h1 class="page-title">Read our blog to sharpen your business and SEO skills.</h1>
					<div class="page-desc">
						Get evidence-based collection of articles on a topic sent directly to you in one email.
					</div>
				</div>
			</header>
			
			<div class="container">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<?php
						$ourCurrentPage = get_query_var('paged');
						$blogPosts = new WP_Query(array(
						'category_name' => 'blog',
						'post_per_page' => 3,
						'paged' => $ourCurrentPage
						));
						if ($blogPosts->have_posts()): while($blogPosts->have_posts()): $blogPosts->the_post();?>
						<h2><?php the_title();?></h2>				
						<article class="post">
							<figure class="post-thumbnail">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
							</figure>
							<div class="post-content-wrap">
								<header class="entry-header">
									<div class="entry-meta">
										<span class="posted-on" itemprop="datePublished">
											<a href="<?php the_permalink();?>">
												<time datetime="2017-12-21"><?php echo get_the_date( 'M d,Y' ); ?></time>
											</a>
										</span>
										<span class="category">
											<?php the_category(); ?>
										</span>
									</div>
									<h2 class="entry-title" itemprop="headline">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</h2>
								</header>
								<div class="entry-content">
									<?php the_excerpt();?>
								</div>
								<footer class="entry-footer">
									<a href="<?php the_permalink();?>" class="btn-readmore">Continue Reading</a>
								</footer>
							</div>
						</article>
						<?php
		                endwhile;
						?>
						<nav class="navigation pagination">
						<div class="nav-links">
							<?php echo paginate_links(array('total' => $blogPosts->max_num_pages)); ?>
						</div>
						</nav>    
		                <?php 
						endif;
		                //Reset Query
		                wp_reset_query();
		                ?> 	
						</main> <!-- .site-main -->	
				</div> <!-- #primary -->
				<?php get_sidebar();?>
			</div> <!-- .container -->
		</div> <!-- .site-content -->
	    <?php get_footer(); ?>
