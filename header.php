<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php 
    // Registruje gead kako bi mogao da se ubaci na strani  get_header()
    wp_head(); ?>
</head>
<body>
        <?php   
        // Ubacuje klase unutar body taga
        // body_class("markoBody");?>
        


        <?php 
        // Za ubacivanje asinhronog JS nakon sto se body ucita
        // Google analytics i Pixel - custom code
        wp_body_open();?>



    <header>
        <p>Header deo</p>

    </header>

