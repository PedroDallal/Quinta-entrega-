<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
	<?php wp_head(); ?>
</head>
<body>
<header>
    <div class="navbar-fixed">
            <nav class="white">            
                <div class="nav-wrapper">
                    <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" class="brand-logo center black-text">Logo</a>
                    <ul id="nav-mobile" class="right">
                        <li><a href="sass.html" class="black-text">Blog</a></li>
                        <li><a href="sass.html" class="black-text">Contato</a></li>
                        <li><a href="sass.html" class="black-text">Outros</a></li>
                    </ul>  
                    <a href="" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons black-text">Menu</i></a>
                </div>                
            </nav>    
        </div>
        <ul class="sidenav" id="mobile-links">
            <li><a href="sass.html" class="black-text">Blog</a></li>
            <li><a href="sass.html" class="black-text">Contato</a></li>
            <li><a href="sass.html" class="black-text">Outros</a></li>
        </ul>
    </header>
<div class="header">
	<div class="wrap">
		<h1><a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">Oudri Kanda Larrai</a></h1>
		<div class="info">
			<p>Vou contar uma história
Que aconteceu comigo
Mais cedo ou mais tarde
Pode acontecer contigo
Me chamaram pra uma festa
Achei muito bacana
Pra minha surpresa
Só falavam coisa estranha</p>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        })
    </script>



