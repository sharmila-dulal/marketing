<?php get_header();?>
<div id="content" class="site-content">
			<header class="page-header" style="background-image: url(images/single-img.jpg);">
				<div class="container">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</div>
			</header>
			
			<div class="container">
				<div id="primary" class="content-area sticky-meta">
					<?php
						while ( have_posts() ) : the_post();
						//the_post_navigation();
						get_template_part( 'template-parts/content', get_post_format() );

						//the_post_navigation();
						// Enable/Disable Author Information
						$enable_about_author = mega_magazine_options( 'enable_about_author' );

						if ( 1 === absint( $enable_about_author ) ) :
							get_template_part( 'template-parts/about-author' );
						endif;	

						// Enable/Disable Related Posts
						$enable_related_posts = mega_magazine_options( 'enable_related_posts' );

						if ( 1 === absint( $enable_related_posts ) ) :
							get_template_part( 'template-parts/related-posts' );
						endif;
					
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						endwhile; // End of the loop.
					?>
					
				</div> <!-- #primary -->
				<?php get_sidebar();?>
			</div> <!-- .container -->
		</div> <!-- .site-content -->
<?php get_footer();?>