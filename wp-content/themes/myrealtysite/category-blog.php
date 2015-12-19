<?php get_header(); ?>
<!--Category-blog    -->
		<div class="main_outer">	
			<div class="main_content">
				<div class="content_wrapper">


<?php $blog_query = new WP_Query( 'category_name=blog&showposts=5&paged='.$paged); ?>
<?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<div class="post_meta">
			Опубликовано: <span><?php the_time('j M Y'); ?></span>, Автор: <?php the_author_link(); ?>, Категория: <?php the_category(', '); ?>, Комментарии: <span class="comm"><?php comments_popup_link('0', '1', '%'); ?></span>
		</div>
		<?php the_post_thumbnail(); ?>
		<?php the_excerpt(); ?>
	</article>
	
<?php endwhile; ?>
<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
<!--<?php //the_posts_pagination(); ?>-->
<?php wp_reset_postdata(); ?>
				</div>
			</div>

			<?php get_sidebar('left'); ?>
			<?php get_sidebar('right'); ?>
			
		</div>

<?php get_footer(); ?>