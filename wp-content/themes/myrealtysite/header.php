<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
?>
</title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<header class="main_header">
			<div class="logo">
				<h1><a href="/myrealtysite/index.php" alt="Logo"></a></h1>
			</div>
			
			<?php get_search_form(); ?>

			<nav class="main_menu">
				<button id="menu_toggle"><span class="fa fa-bars fa-4x"></span></button>
				<ul>
					<li class="current-menu-item"><a href="/myrealtysite/index.php">Главная</a></li>
					<li><a href="/myrealtysite/blog/">Блог</a></li>
					<li><a>Квартиры</a>
						<ul>
							<li><a href="/myrealtysite/rent/">Аренда</a></li>
							<li><a href="/myrealtysite/sale/">Продажа</a></li>
							<li><a>Планировки</a>
								<ul>
									<li><a href="#">1-комнатные</a></li>
									<li><a href="#">2-комнатные</a></li>
									<li><a href="#">3-комнатные</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="/myrealtysite/about">Обо мне</a></li>
					<li><a href="/myrealtysite/contacts">Контакты</a></li>
				</ul>
			</nav>
			<div id="back-to-top">
				<a href="#top"><span></span></a>
			</div>		
		</header>