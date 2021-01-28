<?php get_header();?>
<div id="content" class="site-content">			
			<div class="container">
				<div id="primary" class="content-area">
					<?php if (have_posts()) : ?>
					<header class="page-header">
						<h1 class="page-title">Search Results For:</h1>
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input class="search-field" placeholder="Search anything and hit enter" value="" name="s" type="search">
							</label>
							<input class="search-submit" value="Search" type="submit">
						</form>
						<span class="total-result"><?php global $wp_query;
echo $wp_query->found_posts.' Results'; ?></span>
					</header>
					<div class="showing-result">
						Showing:<?php global $wp_query;
echo $wp_query->found_posts.' Results'; ?>
					</div>
					<main id="main" class="site-main">
					 <?php while (have_posts()) : the_post(); ?>
						
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
											
										<?php

										$categories = get_the_category();
										$separator = ", ";
										$output = '';

										if ($categories) {

											foreach ($categories as $category) {

												$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;

											}

											echo trim($output, $separator);

										}

										?>
											
											
										</span>
									</div>
									<h2 class="entry-title" itemprop="headline">
										<a href="<?php the_permalink();?>">This Start-Up Will Actually Downsize Your Closet</a>
									</h2>
								</header>
								<div class="entry-content">
									<?php the_excerpt(); ?>
								</div>
								<footer class="entry-footer">
									<a href="<?php the_permalink();?>" class="btn-readmore">Continue Reading</a>
								</footer>
							</div>
						</article>
					<?php endwhile;

					else :
					echo '<p>No content found</p>'; ?>
						
						
						
					</main> <!-- .site-main -->
					<?php endif; ?>
					
					<nav class="navigation pagination">
						<div class="nav-links">
							<a class="page-numbers prev" href="#">
								<span>&larr;</span> Prev
							</a>
							<span class="page-numbers current">
								1
							</span>
							<a class="page-numbers" href="#">
								2
							</a>
							<a class="page-numbers" href="#">
								3
							</a>
							<span class="page-numbers dots">...</span>
							<a class="page-numbers" href="#">
								5
							</a>
							<a class="page-numbers next" href="#">
								Next <span>&rarr;</span>
							</a>
						</div>
					</nav>
				</div> <!-- #primary -->
				<?php get_sidebar();?>
			</div> <!-- .container -->
		</div> <!-- .site-content -->
<?php get_footer(); ?>	