<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title><?php bloginfo('name').wp_title('|') ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/util.js"></script>
		<script src="js/main.js"></script>
		<noscript>
			<link rel="stylesheet" href="style.css" />
			<link rel="stylesheet" href="font-awesome.min.css" />
		</noscript>
		<?php wp_head();?>
	</head>
	<body>
		<!-- Header -->
			<header id="header">
				<div class="inner">

					<!-- Logo -->
						<a href="<?php echo home_url();?>" class="logo"><?php bloginfo('name'); ?></a>
					
					<!-- Nav -->						
					<?php
								$args = array(
								'theme_location'  => 'primary',
								'menu_class'      => 'menu_class',
								'container_class' => 'container_class',
								'menu'            => '',
        						'container'       => 'nav',
        						'container_class' => '',
        						'container_id'    => 'nav',
        						'menu_class'      => '',
        						'menu_id'         => 'nav'
							);?>
							<?php wp_nav_menu( $args ); ?>
							
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

				</div>
			</header>