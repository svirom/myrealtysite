<?php get_header(); ?>
<!--Single-post    -->
		<div class="main_outer">	
			<div class="main_content">
				<div class="content_wrapper">
					

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<div class="post_meta">
			Опубликовано: <span><?php the_time('j M Y'); ?></span>, Автор: <span><?php the_author_link(); ?></span>, Категория: <?php the_category(', '); ?>, Комментарии: <span class="comm"><?php comments_popup_link('0', '1', '%'); ?></span>
		</div>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>

		<?php if ( comments_open() || get_comments_number() ) : 
				comments_template();
		endif; ?>			
	</article>

<?php setPostViews(get_the_ID()); ?>	
<?php endwhile; ?>

			
				</div>
			</div>

			<?php get_sidebar('left'); ?>
			<?php get_sidebar('right'); ?>
			
		</div>

<?php get_footer(); ?>




