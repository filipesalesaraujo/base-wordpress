<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IT=edge,chrome=IE8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index/follow" />
	<meta name="googlebot" content="index/follow" />
	<meta name="msapplication-navbutton-color" content="#fff" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#fff" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="pt_BR" />
	<meta name="twitter:card" content="summary" />
	<meta name="theme-color" content="#03885c" />
	<meta name="msapplication-navbutton-color" content="#03885c" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#03885c" />
	<title><?php
			if (is_front_page()) {
				echo bloginfo('name');
			} else {
				echo the_title();
				echo ' - ';
				echo bloginfo('name');
			}

			?></title>

	<meta itemprop="name" content="<?php
									if (is_front_page()) {
										echo bloginfo('name');
									} else {
										echo the_title();
										echo ' - ';
										echo bloginfo('name');
									}

									?>">
	<meta property="og:title" content="<?php
										if (is_front_page()) {
											echo bloginfo('name');
										} else {
											echo the_title();
											echo ' - ';
											echo bloginfo('name');
										}

										?>" />
	<meta property="og:site_name" content="<?php
											if (is_front_page()) {
												echo bloginfo('name');
											} else {
												echo the_title();
												echo ' - ';
												echo bloginfo('name');
											}

											?>" />
	<meta name="twitter:title" content="<?php
										if (is_front_page()) {
											echo bloginfo('name');
										} else {
											echo the_title();
											echo ' - ';
											echo bloginfo('name');
										}

										?>" />
	<?php wp_head(); ?>
</head>
<body class="dg-body">
	<header class="dg-header">
	</header>