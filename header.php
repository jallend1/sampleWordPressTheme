<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>    
</head>
<body <?php body_class(); ?>>
    <header>
        <h1 class="logo-text">
            <a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="<?php echo site_url('/about-us')?>">About Us</a>
                </li>
                <li>
                    <a href="<?php echo site_url('/get-involved'); ?>">Get Involved</a>
                </li>
                <li>
                    <a href="<?php echo site_url('/events'); ?>">Events</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </li>
            </ul>
        </nav>
    </header>