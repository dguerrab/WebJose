<?php
define("RECIPIENT_NAME", "TEWC");
define("RECIPIENT_ADDRESS", "dguerrab@gmail.com");
define("EMAIL_SUBJECT", "Web Joseber");

$senderEmail = $senderName = $message = "";

$success = false;
$errors = array();
$data = array();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $senderEmail = $_POST['useremail'];
    if(empty($senderEmail)){
        $errors['useremail'] = "Debe escribir una dirección de correo";
    } else {
        $senderEmail = filter_var($senderEmail, FILTER_SANITIZE_EMAIL);
        if(!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)){
            $errors['useremail'] = "El email no es correcto";
        }
    }
    $senderName = $_POST['username'];
    if(empty($senderName)){
        $errors['username'] = "Debe escribir un nombre";
    } else {
        $senderName = filter_var($senderName, FILTER_SANITIZE_STRING);
        if(!filter_var($senderName, FILTER_SANITIZE_STRING)){
            $errors['username'] = "El nombre no es correcto";
        }
    }
    $message = $_POST['usercomment'];
    if(empty($message)){
        $errors['usercomment'] = "Debe escribir un mensaje";
    } else {
        $message = filter_var($message, FILTER_SANITIZE_STRING);
        if(!filter_var($message, FILTER_SANITIZE_STRING)){
            $errors['usercomment'] = "El mensaje contiene errores";
        }
    }
    $success = false;
    if(!empty($errors)){
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $recipient = RECIPIENT_NAME . " <" . RECIPIENT_ADDRESS . ">";
        $headers = "From: " . $senderName . " <" . $senderEmail . ">";
        $success = mail($recipient, EMAIL_SUBJECT, $message, $headers);

        $data['success'] = $success;
        if(!$success){
            $data['message'] = "No se ha podido enviar el correo";
        } else {
            $data['message'] = "Gracias por su mensaje";
        }
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gracias por contactar</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="J_logo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <?php
    require_once 'header.php';
    ?>

    <div class="container">
        <div class="row col-lg-12 mb-8" id="mensaje">
            <?php if ($success): ?>
                <h1>Gracias por contactar con nosotros</h1>
            <?php else: ?>
                <div class="panel panel-danger">
                    <p>Ha habido un problema al enviar su mensaje.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php
    require_once 'footer.php';
    ?>

    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>