<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>
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

    <div class="container">
      <div class="row">
        <main class="post blog-post col-lg-12">
          <div class="container">
            <div class="add-comment">
              <header>
                <h3 class="h6">Envía un mensaje</h3>
              </header>
              <form action="gracias.php" id="contacto" class="commenting-form" method="post" data-toggle="validator" role="form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" name="username" id="username" placeholder="Nombre" class="form-control" required>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="email" name="useremail" id="useremail" placeholder="Email" class="form-control" data-error="El email no es correcto" required>
                  </div>
                  <div class="form-group col-md-12">
                    <textarea name="usercomment" id="usercomment" placeholder="Escribe un mensaje" class="form-control" data-error="Debe escribir un mensaje" required></textarea>
                  </div>
                  <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-secondary">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </main>
      </div>
    </div>

    <?php
    require_once 'footer.php';
    ?>

    <!-- Javascript files-->
    <script src="js/validator.js"></script>
    <script>
        $(document).ready(function () {
            $('#contacto').validator();
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>