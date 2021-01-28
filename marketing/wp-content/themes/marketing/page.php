<?php get_header(); ?>
	<div id="content" class="site-content">
		<div class="container">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<header class="page-header">
						<h1 class="page-title"><?php the_title();?></h1>
					</header>
					<?php the_content(); ?>
					<?php 
					endwhile; 
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