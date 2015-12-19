<?php get_header(); ?>
<!--Index Page-->
		<div class="main_outer">	
			<div class="main_content">
				<div class="content_wrapper">
					<div id="container">
						<div id="slides">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/01.jpg" alt="Slide 1">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/02.jpg" alt="Slide 2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/03.jpg" alt="Slide 3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slider/04.jpg" alt="Slide 4">
						</div>
					</div>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slides.js"></script>
	<script>
		jQuery(document).ready(function($){
			$("#slides").slides();
			$("#slides").slides("play");
		});
	</script>
			
<!-- The Main Loop -->
<?php $the_query = new WP_Query( 'category_name=blog&showposts=1'); ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<div class="post_meta">
			Опубликовано: <span><?php the_time('j M Y'); ?></span>, Автор: <?php the_author_link(); ?>, Категория: <?php the_category(', '); ?>
		</div>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	</article>	
<?php endwhile; ?>	
<?php wp_reset_postdata(); ?>
<!-- -End Loop-->				
				</div>
			</div>

			<?php get_sidebar('left'); ?>
			<?php get_sidebar('right'); ?>
			
		</div>

<?php get_footer(); ?>