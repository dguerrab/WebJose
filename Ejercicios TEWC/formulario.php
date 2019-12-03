<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Envía un proyecto</title>
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
    require_once 'funciones_ficheros.php';

    if (!empty($_REQUEST['error'])) {
        echo "<p class='error'>" . $_REQUEST['error'] . "</p>";
    }
    ?>

    <div class="container">
        <div class="row">
            <main class="post blog-post col-lg-12">
                <div class="container">
                    <div class="add-comment">
                        <header>
                            <h3 class="h6">Rellena este formulario para pedir un proyecto, estudio o certificado.</h3>
                        </header>
                        <form action="nuevoproyect.php" method="post" enctype="multipart/form-data" class="commenting-form">
                            <div class="form-group col-6">
                                <input class="form-control" type="text" name="nombre" id="nombre" required
                                       placeholder="Nombre">
                            </div>
                            <div class="form-group col-6">
                                <input class="form-control" type="email" name="email" id="email" required
                                       placeholder="Email">
                            </div>
                            <div class="form-group col-6">
                                <input class="form-control" type="text" name="tipo" id="tipo"
                                       placeholder="Tipo de proyecto: Diseño de edificio, estudio, certificado..." required>
                            </div>
                            <div class="form-group col-6">
                                <textarea name="descripcion" id="descripcion" placeholder="Descripción del proyecto"
                                          class="form-control"></textarea>
                            </div>
                            <div class="form-group col-6">
                                <input class="form-control" type="text" name="ubicacion" id="ubicacion"
                                       placeholder="Localización del proyecto, si aplica">
                            </div>
                            <div class="form-group col-6">
                                <input class="form-control" type="file" name="imagen" id="imagen" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-secondary">Enviar</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <main class="post blog-post col-lg-12">
        <div class="container">
            <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                <a href="proyectos.php" class="next-post text-right d-flex align-items-center justify-content-end">
                    <div class="text"><strong class="text-primary">Listado </strong>
                        <h6>Ver listado de proyectos</h6>
                    </div>
                    <div class="icon next"><i class="fa fa-angle-right"> </i></div>
                </a>
            </div>
        </div>
    </main>

    <?php
    require_once 'footer.php';
    ?>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
    <script src="js/front.js"></script>
</body>
</html>