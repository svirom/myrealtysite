<aside class="sidebar_left">
	<!--<div class="widget widget_category">
		<h3>Категории</h3>
		<ul>
			<li><a href="#">Новости</a></li>
			<li><a href="#">Блог</a></li>
			<li><a href="#">1-комнатные квартиры</a></li>
			<li><a href="#">2-комнатные квартиры</a></li>
			<li><a href="#">3-комнатные квартиры</a></li>
		</ul>
	</div>
	<div class="widget widget_category">
		<h3>Последние посты</h3>
		<ul>
			<li><a href="#">Новости</a></li>
			<li><a href="#">Блог</a></li>
			<li><a href="#">1-комнатные квартиры</a></li>
			<li><a href="#">2-комнатные квартиры</a></li>
			<li><a href="#">3-комнатные квартиры</a></li>
		</ul>
	</div>
	<div class="widget widget_category">
		<h3>Популярные посты</h3>
		<ul>
			<li><a href="#">Новости</a></li>
			<li><a href="#">Блог</a></li>
			<li><a href="#">1-комнатные квартиры</a></li>
			<li><a href="#">2-комнатные квартиры</a></li>
			<li><a href="#">3-комнатные квартиры</a></li>
		</ul>
	</div>-->
	<!--<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php //if(function_exists('bcn_display'))
    {
        //bcn_display();
    }?>
</div>	-->
	<?php if ( ! dynamic_sidebar( 'sidebar-left' ) ) : ?>
	<?php endif; ?>
	
	<div class="widget">
		<h3>Популярные статьи</h3>
		<ul>
        <?php
        $args = array(
            'numberposts' => 5,
            'meta_key'    => 'post_views_count',
            'orderby'     => 'meta_value_num',
            'order'       => 'DESC'
        );
        query_posts( $args );
        while ( have_posts() ) : the_post();
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile;
        wp_reset_query(); ?>
    	</ul>
	</div>
	
</aside>