<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marketing
 */

?>

		<main id="main" class="site-main">
			<div class="entry-meta">
				<div class="sticky-inner">
					<div class="sidebar__inner">
						<span class="byline" itemprop="author">
							<span class="meta-title">Written By</span>
							<span class="author">
								<a href="<?php the_permalink(); ?>" class="url fn" itemprop="name"><?php the_author(); ?></a>
							</span>
						</span>
						<span class="posted-on" itemprop="datePublished">
							<span class="meta-title">Published on</span>
							<a href="#">
								<time datetime="2017-12-21"><?php echo get_the_date( 'M d,Y' ); ?></time>
							</a>
						</span>
						<span class="category">
							<span class="meta-title">Category</span>									<?php the_category(); ?>
						</span>
						<div class="sticky-social">
							<div class="post-favourite">
								<span class="fav-count">525</span>
								<a href="#" class="fav-icon"><i class="fas fa-heart"></i></a>
							</div>
							<ul class="social-list">
								<li><a data-title="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a data-title="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a data-title="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
								<li><a data-title="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a data-title="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer class="entry-footer">
				<div class="tags">
					Tags:								
					<?php echo get_the_tag_list('<span>','','</span>'); ?>
				</div>
			</footer>
		</main> <!-- .site-main -->

