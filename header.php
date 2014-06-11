<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>


        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav clearfix" role="navigation">
						<?php html5blank_nav();  ?>
						<?php wp_nav_menu(
								array(
									'theme_location'  => 'extra-menu',
									'menu'            => '',
									'container'       => 'div',
									'container_class' => 'menu-{menu slug}-container',
									'container_id'    => '',
									'menu_class'      => 'menu',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul class="social">%3$s</ul>',
									'depth'           => 0,
									'walker'          => ''
									)
								); ?>

					</nav>
				
					<!-- /nav -->
	
			</header>
			<!-- /header -->
