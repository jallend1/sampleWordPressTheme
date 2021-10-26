<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
    <header>
        <h1 class="logo-text">
            <a href="#"><?php bloginfo('name'); ?></a>
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="#">Get Involved</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Login</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
                <li>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </li>
            </ul>
        </nav>
    </header>