<?php get_header(); ?>
<!--Search   -->
		<div class="main_outer">	
			<div class="main_content">
				<div class="content_wrapper">



<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<div class="post_meta">
			Опубликовано: <span><?php the_time('j M Y'); ?></span>, Автор: <?php the_author_link(); ?>, Категория: <?php the_category(', '); ?>
		</div>
		<?php the_excerpt(); ?>
	</article>
	
<?php endwhile; ?>
<?php else : ?>
	<p class="error-404"><?php _e("По Вашему запросу ничего не найдено. Попробуйте другой вариант") ?></p>
<?php endif; ?>
<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
<!--<?php //the_posts_pagination(); ?>-->

<?php wp_reset_postdata(); ?>
				</div>
			</div>

			<?php get_sidebar('left'); ?>
			<?php get_sidebar('right'); ?>
			
		</div>

<?php get_footer(); ?>