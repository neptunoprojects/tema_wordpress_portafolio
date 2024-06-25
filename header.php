<!DOCTYPE html>
<html>

<head>

    <title> Portafolio </title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/estilo.css" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

</head>

<body>

    <header id="menubase">

        <div class="container">
            <div class="menu-logo">
                <div class="row">

                    <div class="col">
                        <div class="row row-movil">

                            <div class="col header-logo">
                                <?php

                                if (have_rows("contenido_", "option")) :
                                    while (have_rows("contenido_", "option")) : the_row();
                                        if (get_sub_field("logo", "option")) :
                                            echo "<a href=' " . bloginfo("url") . " '> <img src=' " . get_sub_field("logo", "option") . " '/></a>";
                                        else :
                                            echo "<a href=' '> <span>" . get_sub_field("nombre_de_la_web", "option") . "</span></a>";
                                        endif;
                                    endwhile;
                                endif;

                                ?>



                            </div>

                            <div class="col movil">
                                <a class="header-bar hamburger-menu menu-movil" href="#" onclick="Abrirmenu()">

                                    <img width="50px" src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" />

                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="menu">
                            <nav class="main-menu collapse navbar-collapse" id="menu">
                                <ul>

                                    <li><a class="scrollspy-btn" href="<?php bloginfo("url"); ?>/#perfil">Más sobre mi</a></li>
                                    <li><a class="scrollspy-btn" href="<?php bloginfo("url"); ?>/#cursos">Últimas capacitaciones</a></li>
                                    <li><a class="scrollspy-btn" href="<?php bloginfo("url"); ?>/#portafolio">Últimos proyectos</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="hero-contenido">
                        <h1>Hola, mi nombre es Jaicer Indriago. </h1>

                        <p>Soy un desarrollador web con más 12 años de experiencia, me especializo en tecnologías frontend y backend tales como: Php (Wordpress, Laravel, Codeigniter), Javascript (React, Node, Jquery) Css (Flexbox, Bootstrap, Sass) </p>


                        <p style="font-weight: 600; margin-top: 0; padding-top:0px;">
                            ¿Necesitas una cotización?
                        </p>

                        <?php echo do_shortcode('[servicios]'); ?>



                    </div>
                </div>

                <div class="col">

                    <div class="hero-img-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/imag.png" alt="">
                    </div>
                    <div class="hero-img">


                    </div>
                </div>
            </div>
        </div>
    </section>