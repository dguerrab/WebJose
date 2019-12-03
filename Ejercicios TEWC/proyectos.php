<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proyectos</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="J_logo.png">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript">
        $("document").ready(function () {
            var url = window.location.pathname;
            var dir = url.substring(0, url.lastIndexOf('/')); // url del servidor
            $.getJSON(dir + '/jsonp.php?callback=?', function (data) {
                $(".card-deck").html('');
                $.each(data, function (i, item) {
                    $(".card-deck").append('<div class="col-lg-4 col-md-6 mb-4"><div class="card h-100">' +
                        '<img class="card-img-top" src="' + dir + '/images/'
                        + item.imagen + '">' +
                        '<div class="card-body">\n' +
                        '      <h5 class="card-title">'
                        + item.tipo + '</h5><p class="card-text">'
                        + item.descripcion + '</p>' +
                        '</div>\n' +
                        '<div class="card-footer"><p>\n'
                        + item.nombre + '</p><small class="text-muted">'
                        + item.email + '<p>'
                        + item.ubicacion + '</p></small>' +
                        '</div>\n' +
                        '</div></div>');
                });
            });
            $(".card-deck").fadeIn(2000);
        });
    </script>
</head>
  <body>
      <?php
      require_once 'header.php';
      ?>
      <main class="post blog-post col-lg-12">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <header class="mb-6">
                          <h2>Peticiones de proyecto</h2>
                      </header>
                      <div class="card-deck-wrapper">
                          <div class="card-deck">
                              <header>
                                  <h3 class="h6">Cargando proyectos...</h3>
                              </header>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                  <a href="formulario.php" class="prev-post text-left d-flex align-items-center">
                      <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                      <div class="text"><strong class="text-primary">Formulario </strong>
                          <h6>Envíar un proyecto</h6>
                      </div>
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