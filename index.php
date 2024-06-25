<?php get_header(); ?>


<section class="perfil" id="perfil">

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="foto-perfil">
                    <img loading="lazy" width="100%" src="<?php echo get_template_directory_uri(); ?>/images/profile-pic.jpg" />
                </div>
            </div>

            <div class="col">

                <div class="perfil-contenido">


                    <?php if (have_rows("perfil", "option")) :
                        while (have_rows("perfil", "option")) : the_row();
                            echo "<h2 class='w700 size2'>" . get_sub_field("titulo", "option") . "</h2>";
                            echo get_sub_field("descripcion", "option");


                            if (have_rows("boton", "option")) :

                                while (have_rows("boton", "option")) : the_row();
                                    echo "<a href=' " . get_sub_field("url", "option") . " ' class='thm-btn thm-btn--gradient'>" . get_sub_field("texto", "option") . "</a>";


                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>


                </div>

            </div>

        </div>
    </div>

</section>




<section class="cursos" id="cursos">


    <div class="container">


        <div class="row">
            <h2>Últimos Cursos</h2>
        </div>
        <div class="row">


            <?php

            if (have_rows("galeria", "option")) :
                while (have_rows("galeria", "option")) : the_row();

                    if (get_field("columnas", "option") == 4) : $col = "20%";
                    elseif (get_field("columnas", "option") == 3) : $col = "33%";
                    elseif (get_field("columnas", "option") == 2) : $col = "50%";
                    endif;
            ?>
                    <div class="col" style="flex: 1 1 calc(<?php echo $col; ?> - 20px);">
                        <div class="img-curso">
                            <a href="<?php echo get_sub_field("url", "option"); ?>">
                                <img loading="lazy" width="100%" src="<?php echo get_sub_field("imagen", "option"); ?>" />
                            </a>
                        </div>
                    </div>

            <?php
                    echo $html;
                endwhile;
            endif;
            ?>


        </div>
    </div>
</section>




<section class="portafolio" id="portafolio">


    <div class="container">


        <div class="row">
            <h2>Últimos Proyectos</h2>
        </div>
        <div class="row">




            <?php

            if (have_rows("portafolio", "option")) :
                while (have_rows("portafolio", "option")) : the_row();

                    if (get_field("columnas2", "option") == 4) : $col = "20%";
                    elseif (get_field("columnas2", "option") == 3) : $col = "33%";
                    elseif (get_field("columnas2", "option") == 2) : $col = "50%";
                    endif;

            ?>
                    <div class="col" style="flex: 1 1 calc(<?php echo $col; ?> - 20px);">
                        <div class="img-curso">
                            <a href="<?php echo get_sub_field("url", "option"); ?>">
                                <img loading="lazy" width="100%" src="<?php echo get_sub_field("imagen", "option"); ?>" />
                            </a>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>


        </div>
    </div>
</section>



<?php get_footer(); ?>