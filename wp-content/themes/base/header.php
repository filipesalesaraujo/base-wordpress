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

	<!-- Cor do navegador mobile -->
	<meta name="theme-color" content="#03885c" />
	<meta name="msapplication-navbutton-color" content="#03885c" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#03885c" />

	<!-- favicon -->
	<!--[if IE]><link rel="shortcut icon" href="assets/dist/img/favicon/favicon.ico"><![endif]-->
	<link rel="shortcut icon" href="assets/dist/img/favicon/favicon.png" />
	<link rel="apple-touch-icon" href="assets/dist/img/favicon/apple-touch-icon.png" />

	<!-- URL FINAL -->
	<!-- Colocar a URL final aqui -->
	<link rel="canonical" href="http://" />

	<!-- Título -->
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


	<!-- Palavras chave -->
	<meta name="keywords" content="Keywords" />

	<!-- Descrição do site -->
	<meta name="description" content="Descrição" />
	<meta name="msapplication-tooltip" content="Descrição">
	<meta itemprop="description" content="Descrição">
	<meta property="og:description" content="Descrição" />
	<meta name="twitter:description" content="Descrição" />

	<!-- URL da Imagem -->
	<meta itemprop="image" content="">
	<meta property="og:image" content="" />
	<meta name="twitter:image" content="" />

	<!-- Fontes -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link href="https://file.myfontastic.com/nKaHFmKoqnLtmRDPd55njf/icons.css" rel="stylesheet">
	<!-- http://app.fontastic.me/#publish/font/nKaHFmKoqnLtmRDPd55njf -->

	<?php wp_head(); ?>

</head>

<body class="dg-body">

	<header class="dg-header">
	</header>