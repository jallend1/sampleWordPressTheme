<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>    
</head>
<body <?php body_class(); ?>>
    <header>
        <h1 class="logo-text">
            <a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <nav>
            <!-- <ul>    
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </li>
            </ul> -->
            <?php wp_nav_menu(array(
                'theme_location' => 'headerMenu'
            )); ?>
        </nav>
    </header>