
<?php 
 $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
 get_header();?>
<div id="content" class="site-content">
			<header class="page-header" style="background-image: url(images/single-img.jpg);">
				<div class="container">
					<h1 class="page-title">Tesla Ramps Up Model 3 Production and Predicts Profitability</h1>
				</div>
			</header>
			
			<div class="container">
				<div id="primary" class="content-area sticky-meta">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
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
								<a href="#">Tag 1</a>
								<a href="#">Tag 2</a>
								<a href="#">Tag 3</a>
							</div>
						</footer>
					</main> <!-- .site-main -->
					<div class="author-profile">
						<div class="author-img">
							<?php echo get_avatar(get_the_author_meta('ID'), 512) ?>
						</div>
						<div class="author-content-wrap">
							<h1 class="page-title">
								<?php echo get_the_author_meta('nickname') ?>
							</h1>
							<div class="author-desc">
							<?php echo $curauth->description; ?>
							
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
					<nav class="navigation posts-navigation">
						<div class="nav-links">
							<div class="nav-previous">
								<a href="#" rel="prev">
									<i class="fas fa-chevron-left"></i>
									Previous Article
								</a>
							</div>
							<div class="nav-next">
								<a href="#" rel="next">
									<i class="fas fa-chevron-right"></i>
									Next Article
								</a>
							</div>
						</div>
					</nav>
					
					<?php 
                    endwhile; 
                    endif; 
                    //Reset Query
                    wp_reset_query();											
                    ?>
					
					<div class="additional-posts">
						<h3 class="title">
							Recommended Articles
						</h3>			
						<div class="block-wrap">
							<div class="block clearfix">
								<div class="entry-meta">
									<span class="posted-on" itemprop="datePublished">
										<a href="#">
											<time datetime="2017-12-21">Feb 18, 2018</time>
										</a>
									</span>
								</div>
								<header class="entry-header">
									<h3 class="entry-title">
										<a href="#">This Start-Up Will Actually Downsize Your Closet</a>
									</h3>                        
								</header><!-- .entry-header -->
								<figure class="post-thumbnail">
									<a href="#">
										<img src="images/blog-img1.jpg" alt="">                    
									</a>
								</figure><!-- .post-thumbnail -->
							</div>
							<div class="block clearfix">
								<div class="entry-meta">
									<span class="posted-on" itemprop="datePublished">
										<a href="#">
											<time datetime="2017-12-21">Feb 18, 2018</time>
										</a>
									</span>
								</div>
								<header class="entry-header">
									<h3 class="entry-title">
										<a href="#">Tesla Ramps Up Model 3 Production and Predicts Profitability</a>
									</h3>                        
								</header><!-- .entry-header -->
								<figure class="post-thumbnail">
									<a href="#">
										<img src="images/blog-img2.jpg" alt="">                    
									</a>
								</figure><!-- .post-thumbnail -->
							</div>
							<div class="block clearfix">
								<div class="entry-meta">
									<span class="posted-on" itemprop="datePublished">
										<a href="#">
											<time datetime="2017-12-21">Feb 18, 2018</time>
										</a>
									</span>
								</div>
								<header class="entry-header">
									<h3 class="entry-title">
										<a href="#">7 Off-Duty Outfits That Will Reinvent Your Spring Wardrobe</a>
									</h3>                        
								</header><!-- .entry-header -->
								<figure class="post-thumbnail">
									<a href="#">
										<img src="images/blog-img3.jpg" alt="">                    
									</a>
								</figure><!-- .post-thumbnail -->
							</div>
						</div><!-- .block-wrap -->
					</div>
					<div class="comments-area" itemscope="" itemtype="http://schema.org/Comment">
						<h2 class="comment-title">3 Comments</h2>
						<ol class="comment-list">
							<li class="comment even parent">
								<article class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard">
											<img src="images/test-img1.jpg" alt="commenter image" class="avatar photo">
											<b class="fn">
												<a href="#" class="url">Sudina Manandhar</a>
												<span class="says">says:</span>
											</b>
										</div>
										<div class="comment-metadata">
											<a href="#">
												<time>May 18, 2017 at 2:15 am</time>
											</a>
										</div>
										<p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p>
									</footer>
									<div class="comment-content">
										<p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
									</div>
									<div class="reply">
										<a class="comment-reply-link" href="#">Reply</a>
									</div>
								</article>
								<ol class="children" itemscope="" itemtype="http://schema.org/Answer">
									<li class="comment">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img src="images/test-img2.jpg" alt="commenter image" class="avatar photo">
													<b class="fn">
														<a href="#" class="url">Anup Shakya</a>
														<span class="says">says:</span>
													</b>
												</div>
												<div class="comment-metadata">
													<a href="#">
														<time>May 18, 2017 at 2:15 am</time>
													</a>
												</div>
											</footer>
											<div class="comment-content">
												<p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
											</div>
											<div class="reply">
												<a class="comment-reply-link" href="#">Reply</a>
											</div>
										</article>
										<ol class="children" itemscope="" itemtype="http://schema.org/Answer">
											<li class="comment even parent bypostauthor">
												<article class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img src="images/author-square.jpg" alt="commenter image" class="avatar photo">
															<b class="fn">
																<a href="#" class="url">Sirapa Manandhar</a>
																<span class="says">says:</span>
															</b>
														</div>
														<div class="comment-metadata">
															<a href="#">
																<time>May 18, 2017 at 2:15 am</time>
															</a>
														</div>
													</footer>
													<div class="comment-content">
														<p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
													</div>
													<div class="reply">
														<a class="comment-reply-link" href="#">Reply</a>
													</div>
												</article>
											</li>
										</ol>
									</li>
								</ol>
							</li>
							<li class="comment even parent bypostauthor">
								<article class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard">
											<img src="images/author-square.jpg" alt="commenter image" class="avatar photo">
											<b class="fn">
												<a href="#" class="url">Sirapa Manandhar</a>
												<span class="says">says:</span>
											</b>
										</div>
										<div class="comment-metadata">
											<a href="#">
												<time>May 18, 2017 at 2:15 am</time>
											</a>
										</div>
									</footer>
									<div class="comment-content">
										<p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
									</div>
									<div class="reply">
										<a class="comment-reply-link" href="#">Reply</a>
									</div>
								</article>
								<ol class="children" itemscope="" itemtype="http://schema.org/Answer">
									<li class="comment">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img src="images/test-img2.jpg" alt="commenter image" class="avatar photo">
													<b class="fn">
														<a href="#" class="url">Anup Shakya</a>
														<span class="says">says:</span>
													</b>
												</div>
												<div class="comment-metadata">
													<a href="#">
														<time>May 18, 2017 at 2:15 am</time>
													</a>
												</div>
											</footer>
											<div class="comment-content">
												<p>Prism pop-up gastropub trust fund tilde, chicharrones coloring book cliche. Man bun iPhone kogi dreamcatcher. Tbh raw denim dreamcatcher, health goth mumblecore srira</p>
											</div>
											<div class="reply">
												<a class="comment-reply-link" href="#">Reply</a>
											</div>
										</article>
									</li>
								</ol>
							</li>
						</ol>

						<div class="comment-respond">
							<h3 class="comment-reply-title">
								Leave a Comment
								<small>
									<a id="cancel-comment-reply-link" href="#">Cancel reply</a>
								</small>
							</h3>
							<form class="comment-form">
								<p class="comment-notes">
									<span id="email-notes">Your email address will not be published.</span>
								</p>
								<p class="comment-form-comment">
									<label for="comment">Comment</label>
									<textarea id="comment" name="comment" cols="40" rows="8" required="required" placeholder="Comment*"></textarea>
								</p>
								<p class="comment-form-author">
									<label for="author">Name<span class="required">*</span></label>
									<input id="author" name="author" required="required" placeholder="Name*" type="text">
								</p>
								<p class="comment-form-email">
									<label for="email">Email<span class="required">*</span></label>
									<input id="email" name="email" required="required" placeholder="Email*" type="email">
								</p>
								<p class="comment-form-url">
									<label for="url">Website</label>
									<input id="url" name="url" placeholder="Website" type="url">
								</p>
								<p class="comment-form-cookies-consent">
									<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"><label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
								</p>
								<p class="form-submit">
									<input name="submit" class="submit" value="Post Comments" type="submit">
								</p>
							</form>
						</div>
					</div>
				</div> <!-- #primary -->
				<?php get_sidebar();?>
			</div> <!-- .container -->
		</div> <!-- .site-content -->

<?php get_footer();?>