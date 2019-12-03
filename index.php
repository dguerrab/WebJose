<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jose Bernardo | Arquitecto</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="J_logo.png">
</head>
<body>
    <?php
    require_once 'header.php';
    ?>

    <!-- Hero Section-->
    <section style="background-size: cover; background: url(img/Portada3.jpg) center center;" class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Proyectando edificios desde 1996</h1>
                    <!--<a href="galeria.html" class="hero-link">Ver galería</a>-->
                </div>
            </div>
            <a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Más</a>
        </div>
    </section>
    <!-- Intro Section-->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="text-big">
                        <b>Jose Bernardo Vega</b> es un arquitecto con más de 20 años de experiencia. Localizado en la
                        provincia de León,
                        sus proyectos incluyen desde viviendas particulares y colegios, hasta la delegación de Gobierno de
                        la Junta
                        de Castilla y León en Salamanca.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
                $AutoPlay: 1,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $FillMode: 1,
                $LazyLoading: 2,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /*jssor slider bullet skin 032 css*/
        .jssorb032 {
            position: absolute;
        }

        .jssorb032 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb032 .i .b {
            fill: #fff;
            fill-opacity: 0.7;
            stroke: #000;
            stroke-width: 1200;
            stroke-miterlimit: 10;
            stroke-opacity: 0.25;
        }

        .jssorb032 .i:hover .b {
            fill: #000;
            fill-opacity: .6;
            stroke: #fff;
            stroke-opacity: .35;
        }

        .jssorb032 .iav .b {
            fill: #000;
            fill-opacity: 1;
            stroke: #fff;
            stroke-opacity: .35;
        }

        .jssorb032 .i.idn {
            opacity: .3;
        }

        /*jssor slider arrow skin 052 css*/
        .jssora052 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora052 .a {
            fill: none;
            stroke: #000;
            stroke-width: 360;
            stroke-miterlimit: 10;
        }

        .jssora052:hover {
            opacity: .8;
        }

        .jssora052.jssora052dn {
            opacity: .5;
        }

        .jssora052.jssora052ds {
            opacity: .3;
            pointer-events: none;
        }
    </style>
    <div id="jssor_1"
         style="position:relative;margin-bottom:150px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin"
             style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg"/>
        </div>
        <div data-u="slides"
             style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div data-p="225.00">
                <img data-u="image" data-src2="img/StaMariadelParamo.jpg"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/DelegacionJCyLSegovia.jpg"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/DelegacionJCyLenSegovia-2.jpg"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/Celada_FachadaPrincipal.jpg"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/celada_fachadas.jpg"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/Celada_Interior-a.jpg"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/Morales_del_Arcediano-a.jpg"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/Morales_del_Arcediano-b.jpg"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/fachadas21f14.JPG"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/Belen01.JPG"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/Claudio02.jpg"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/IMGP0017.JPG"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/IMGP0012.JPG"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/IMGP0005.JPG"/>
            </div>
            <div data-p="225.00">
                <img data-u="image" data-src2="img/IMAG0006.JPG"/>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1"
             data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora052" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2"
             data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora052" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2"
             data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>

    <section class="featured-posts no-padding-top">
        <div class="container">
            <div class="row d-flex align-items-stretch">
                <div class="text col-lg-7">
                    <div class="text-inner d-flex align-items-center">
                        <div class="content">
                            <header class="post-header">
                                <h2 class="h4">Experiencia en diseño de diversos proyectos</h2>
                            </header>
                            <p>• Bloques de Viviendas</p>
                            <p>• Viviendas Unifamiliares</p>
                            <p>• Residencias de la 3ª Edad</p>
                            <p>• Consultorios Médicos</p>
                            <p>• Albergues de Peregrinos</p>
                            <p>• Naves y edificios Industriales</p>
                            <p>• Levantamiento gráfico de Edificaciones</p>
                            <p>• Reformas, Ampliaciones</p>
                        </div>
                    </div>
                </div>
                <div class="image col-lg-5" style="min-height: 346.8px;"><img src="img/IMAG0006_1.jpg" alt="..."></div>
            </div>
            <div class="row d-flex align-items-stretch">
                <div class="image col-lg-5" style="min-height: 346.8px;"><img src="https://d19m59y37dris4.cloudfront.net/blog/1-2/img/featured-pic-3.jpeg" alt="..."></div>
                <div class="text col-lg-7">
                    <div class="text-inner d-flex align-items-center">
                        <div class="content">
                            <header class="post-header">
                                <h2 class="h4">Experiencia profesional</h2>
                            </header>
                            <p>• Dirección de Obra</p>
                            <p>• Estudios de Gestión de Residuos</p>
                            <p>• Estudios y Planes de Seguridad y Salud</p>
                            <p>• Certificados de Eficiencia Energética</p>
                            <p>• Certificados</p>
                            <p>• Informes</p>
                            <p>• Tasaciones</p>
                            <p>• Valoraciones</p>
                            <p>• Peritaciones</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <?php
    require_once 'footer.php';
    ?>

    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
</body>
</html>