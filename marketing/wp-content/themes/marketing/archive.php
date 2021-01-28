
<?php get_header();?>
<div id="content" class="site-content">			
			<div class="container">
				<div id="primary" class="content-area">
					<?php if (have_posts()) :
	
	?>
					<header class="page-header">
						<h1 class="page-title">
							<span class="sub-title"></span>
							<?php

								if ( is_category() ) {
									single_cat_title();
								} elseif ( is_tag() ) {
									single_tag_title();
								} elseif ( is_author() ) {
									the_post();
									echo 'Author Archives: ' . get_the_author();
									rewind_posts();
								} elseif ( is_day() ) {
									echo 'Daily Archives: ' . get_the_date();
								} elseif ( is_month() ) {
									echo 'Monthly Archives: ' . get_the_date('F Y');
								} elseif ( is_year() ) {
									echo 'Yearly Archives: ' . get_the_date('Y');
								} else {
									echo 'Archives:';
								}

							?>
						</h1>
						<span class="total-result"><?php global $wp_query;
echo $wp_query->found_posts.' Results'; ?></span>
					</header>
					<div class="showing-result">
						Showing:<?php global $wp_query;
echo $wp_query->found_posts.' Results'; ?>
					</div>
					<main id="main" class="site-main">
					<?php while (have_posts()) : the_post(); ?>
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
							<?php echo paginate_links(); ?>
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