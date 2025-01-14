<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" alt="logo" class="logo">
            <div class="function">
                <p class="text01">Our Services</p>
                <div class="btnContact">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/BtnContact.png" alt="contact" class="contact">
                    <p class="textContact">Contact</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ArrowContact.png" alt="arrow" class="arrow">
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/IconSearch.png" alt="search" class="search">
                <img src="<?php echo get_template_directory_uri(); ?>/img/IconProfile.png" alt="profile" class="profile">
                <img src="<?php echo get_template_directory_uri(); ?>/img/IconOption.png" alt="option" class="option">
            </div>
        </div>
    </header>