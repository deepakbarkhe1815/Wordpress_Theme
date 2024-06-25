<!DOCTYPE html>
    <html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php wp_head(); ?>
        
    </head>
    <body <?php body_class(); ?> >
        <?php wp_body_open(); ?>
        <header>
            <div class="logo">
                <span>Logo</span>
            </div>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Blog</li>
                <li>Contect us</li>
                <li><button>Login</button></li>
            </ul>
        </header>