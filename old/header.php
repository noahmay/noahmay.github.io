<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo theme_url('/css/skeleton.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">


		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo theme_url('/js/jquery-2.2.4.min.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/background-blur.min.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/masonry.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/button.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">




		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body class="<?php echo body_class(); ?>">
		<header>
			<div class="image-wrapper">
				<h2>Noah Mayerhofer</h2>
				<img src="https://i.gyazo.com/63cef35d9a58dbcb2fca791933ec80f2.png" alt="">
			</div>
					<nav id="main" role="navigation">
							<?php if(has_menu_items()):
								while(menu_items()): ?>
								<a class="<?php echo menu_active() ? 'active' : '' ?>" href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
									<i class="material-icons"><?php

									$icons = array(
									    "Home" => "home",
									    "Projects" => "work",
										 "About" => "face",
										 "Blog" => "chat",
										 "Lab" => "code"
									);
									echo $icons[menu_name()];
									?></i>
									<?php echo menu_name(); ?>
								</a>
							<?php endwhile;
						endif; ?>
							</nav>
					</nav>
 		</header>

			<!--<header id="top">
				<a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>

				<nav id="main" role="navigation">
					<ul>
						<?php if(has_menu_items()):
							while(menu_items()): ?>
						<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
							<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
							</a>
						</li>
						<?php endwhile;
							endif; ?>
						<li class="tray">
							<a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="View my posts by category"></a>
						</li>
					</ul>
				</nav>
			</header>-->
