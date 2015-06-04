<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>MarkupShop</title>
		<meta name="description" content="A small development agency focused on helping people build the things they need.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	
		<meta property="og:title" content="MarkupShop" />
		<meta property="og:url" content="http://www.markupshop.com/" />
		<meta property="og:description" content="A small development agency focused on helping people build the things they need." />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="MarkupShop"/>
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@markupshop" />
		<meta name="twitter:creator" content="@markupshop" />
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/compiled.css">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->

		<script src="//use.typekit.net/fnj7kze.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
	</head>
	
	<body>

		<?php 
			// load icons
    		get_template_part('svg');
    	?>

		<?php if(is_home()) : ?>
			<section id="intro" role="banner">

				<h1 class="page-title">
					<svg viewBox="0 0 400 400" class="main-logo" aria-label="MarkupShop">
						<title>MarkupShop</title>
    			        <use xlink:href="#markupshop-logo"></use>
    			    </svg>
				</h1>
			
				<h2>A small development agency focused on helping people build the things they need.</h2>

			</section>

		<?php else: ?>

			<header id="site_header">

				<a href="<?php echo bloginfo('url'); ?>" class="page-title">
					<h1 class="main-logo">Markupshop</h1>
				</a>

			</header>

		<?php endif; ?>





