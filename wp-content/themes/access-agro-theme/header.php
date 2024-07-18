<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.8">
		<title>Access Agro | <?php echo get_the_title(); ?></title>
		<link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
        <?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    </head>

    <body>
		<header id="header" class="header">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<div class="container-fluid d-flex p-0">
						<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo.png" alt="Access Agro Logo">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<div class="menu-button" id="menu-button" onclick="menuMobile()">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
								wp_nav_menu(array(
									'theme_location' => '',
									'menu_id' 		 => 'menu', 
									'container' 	 => false,
									'menu_class' 	 => '',
									'items_wrap' 	 => '<ul id="%1$s" class="navbar-nav mb-lg-0 %2$s">%3$s</ul>',
                                    'add_li_class'   => 'nav-item',
									'depth' 		 => 2,
								));
                            ?>
						</div>
					</div>
				</div>
			</nav>
		</header>