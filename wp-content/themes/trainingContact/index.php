<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <main>
        <div class="container">
            <style>
                body {
                    background-image: url('<?php echo get_template_directory_uri(); ?>/img/BackGround.png');
                }
            </style>
        </div>
    </main>
    <?php get_footer(); ?>
</body>

</html>