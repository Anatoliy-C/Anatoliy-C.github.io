<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'description' ); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Roboto:300,400,700&display=swap&subset=cyrillic" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>
    <header class="header" style="background-image: url(<?php the_field('header_bg') ?>);">
        <div class="header_inner">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/home.png" alt="">
            <div class="header_name"><?php the_field('header_name') ?></div>
            <a class="phone" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?></a>
            <div class="header_title"><?php the_field('header_title') ?></div>
            <div class="header_sale">
                <img src="<?php the_field('header_sale') ?>" alt="">
            </div>
        </div>
    </header>