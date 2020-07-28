<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    


    <?php wp_head(); ?>
</head>
<body>


    <!--Шапка-->  
    <header class="navbar navbar-expand-lg justify-content-center navbar-dark bg-custom">
        <div class="container">     
            <!--Иконка для сэндвич-меню-->
            <button class="navbar-toggler" name="mainmenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
		 	
                <!--Верхнее меню-->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                 <?php
                 wp_nav_menu(array(
                 'theme_location' => 'mainmenu',
                 'menu_class' => 'navbar-nav  text-center' ,
                 'walker' => new wp_bootstrap_navwalker()) );
                 ?>
            </div>
        </div>


        </div>
    </header>