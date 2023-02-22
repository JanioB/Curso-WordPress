<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biblioteca Digital Botucatu</title>
	<?php wp_head(); ?>
</head>
<body ?php body_class(); ?>	
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons col-xl-9 col-6 col-sm-7">Icones Sociais</div>
					<div class="search col-xl-3 col-sm-5 col-6 text-end">Pesquisa</div>
				</div>
			</div>		
		</section>
		<section class="menu-area">
			<div class="container">
				<div class="row">
					<section class="logo col-md-2 col-12 text-center">Logo</section>
					<nav class="menu col-md-10 text-end">
						<?php wp_nav_menu(
						 array('theme_location' => 'my_main_menu')
						 ); 
						?>
							
					</nav>
				</div>
			</div>	
		</section>
	</header>