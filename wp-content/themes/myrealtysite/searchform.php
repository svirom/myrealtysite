<div class="menu_search right">
	<form action="<?php echo home_url( '/' ); ?>" method="get">
		<input type="search" name="s" class="search left" value="<?php the_search_query(); ?>" placeholder="Найти"></input>
		<input type="submit" name="submit" class="submit left" value=""></input>
	</form>
</div>