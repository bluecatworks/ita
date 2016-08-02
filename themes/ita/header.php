<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<title><?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/slideshow.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/javascript/sticky-header.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/main.js"></script>

	<?php wp_head(); ?>

</head>

<body class="<?php echo the_slug(); ?>" style="display:none">
	<!--[if lt IE 8]><p>You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p><![endif]-->

	<header>
		<div class="container width-100 no-padd no-marg">
			<div class="col-md-4">
				<div class="socials">
					<a class="tw" href=""></a>
					<a class="face" href=""></a>
					<a class="in" href=""></a>
					<a class="you" href=""></a>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<a class="logo" href="<?php echo get_site_url();  ?>">
					<img src="<?php bloginfo('template_url'); ?>/logo.png" alt="">
				</a>
			</div>
			<div class="col-md-4 text-right">
				<div class="lang">
					<a href="">EN</a> / 
					<a href="">RU</a> / 
					<a href="">CH</a> / 
					<a href="">GR</a>
				</div>
				<div class="search-box">
					<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div>
							<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="search..." />
							<input type="submit" id="searchsubmit" value="" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</header>

	<div class="logo-area container width-100">
		<div class="col-md-3">
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="col-md-6 logo-text">
			International Training Academy
		</div>
		<div class="col-md-3 search-box-area">
			<div class="search-box">
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<div>
						<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="search..." />
						<input type="submit" id="searchsubmit" value="" />
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="left-collapse">
		<a class="close-menu" href=""></a>
		<a href="<?php echo get_site_url();  ?>" class="menu-logo">
			<img src="<?php bloginfo('template_url'); ?>/images/menu-logo.png" alt="">
		</a>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav navbar-nav') ); ?>
		<div class="socials">
			<a class="tw" href=""></a>
			<a class="face" href=""></a>
			<a class="in" href=""></a>
			<a class="you" href=""></a>
		</div>
	</div><div class="menu-overlay"></div>

	<div class="content clear container">