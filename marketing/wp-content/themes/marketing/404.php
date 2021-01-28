<?php get_header() ;?>
		<div id="content" class="site-content error404">			
			<div class="container">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title">Uh-Oh...</h1>
								<div class="page-desc">
									The page you are looking for may have been moved, deleted, or possibly never existed.
								</div>
							</header>
							<div class="page-content">
								<div class="error-num">404</div>
								<a class="bttn" href="<?php bloginfo('url')?>">Take me to the home page</a>
								<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
									<label>
										<span class="screen-reader-text">Search for:</span>
										<input class="search-field" placeholder="Try searching for what you were looking for..." value="" name="s" type="search">
									</label>
									<input class="search-submit" value="Search" type="submit">
								</form>				
							</div><!-- .page-content -->
						</section>
					</main> <!-- .site-main -->
				</div> <!-- #primary -->
			</div> <!-- .container -->
			<div class="additional-posts">
				<div class="container">
					<h3 class="title">
						Recommended Articles
					</h3>			
					<div class="block-wrap">
					
					<?php
					query_posts('posts_per_page=3&category_name=blog');
					if ( have_posts()) : while( have_posts()) : the_post();
					$postid = $post->ID; 
					?>  	
							
							<div class="block clearfix">
								<div class="entry-meta">
									<span class="posted-on" itemprop="datePublished">
										<a href="#">
										<time datetime="2017-12-21"><?php echo date('M j, Y') ;?></time>
										</a>
									</span>
								</div>
								<header class="entry-header">
									<h3 class="entry-title">
										<a href="<?php the_permalink() ;?>"><?php the_title() ;?></a>
									</h3>                        
								</header><!-- .entry-header -->
								<figure class="post-thumbnail">
									<a href="<?php the_permalink() ;?>">
									<?php the_post_thumbnail(''); ?>             
									</a>
								</figure><!-- .post-thumbnail -->
							</div>
							<?php
					endwhile; ?>
					<?php else : ?> 
					<?php
					/* endwhile;*/
					endif;
					//Reset Query
					wp_reset_query();
					?>
					</div><!-- .block-wrap -->
				</div>
			</div>
        </div> <!-- .site-content -->
        <?php get_footer() ;?>