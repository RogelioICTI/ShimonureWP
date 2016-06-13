<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="description" content="Sitio Personal de Rogelio Vargas">
        <meta name="author" content="Rogelio Vargas">

        <!--
        <link href="css/theme.css" rel="stylesheet" />
        <link href="css/extras.css" rel="stylesheet" />
        <link href="css/single-portafolio.css" rel="stylesheet" />
        -->


        <title>Rogelio Vargas Marquez | Full Stack Developer</title>

        <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?> /favicon.png" />
        <script>
            var url_general_sitio = '<?php echo $url_base_final; ?>';
        </script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-76301055-1', 'auto');
            ga('send', 'pageview');

        </script>

        <?php wp_head(); ?>
    </head>
    <body>


        <div class="navbar navbar-default navbar-fixed-top top-nav-collapse">
            <div class="container">
                <div class="navbar-header">
                    <a href="<?php echo $url_base_final; ?>" class="navbar-brand">Rogelio Vargas </a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                    <ul class="nav navbar-nav">

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $url_base_final; ?>" >Inicio</a></li>
                        <li><a href="page-servicios.php" >Servicios</a></li>
                        <li><a href="page-portafolio.php" >Portafolio</a></li>
                        <li><a href="page-blog.php" >Blog</a></li>
                        <li><a href="page-contacto.php" >Contacto</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>

            </div>
        </div>

        <?php
        //TODO: Ajuste de NAVBAR
        if ($GLOBALS['narbar_bandera'] != 'index.php'):
            ?>
            <!--<div style="height: 50px;"></div>-->
            <?php
        endif;
        ?>

