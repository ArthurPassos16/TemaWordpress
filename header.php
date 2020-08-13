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
		<link rel="stylesheet" href="styles.css" />
		<?php wp_head();?>
	</head>
	<body>
		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo('name');?></a>
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
						);
					?>
					<?php wp_nav_menu( $args ); ?>

				</div>
			</header>