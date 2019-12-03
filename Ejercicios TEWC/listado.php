<!DOCTYPE html>
<html>
<head>
<meta charset="utf8" />
<title>Listado de proyectos</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">	
$("document").ready(function () {
    var url = window.location.pathname;
    var dir = url.substring(0, url.lastIndexOf('/')); // url del servidor
    $.getJSON(dir + '/jsonp.php?callback=?', function (data) {
        $(".card-deck").html('');
        $.each(data, function (i, item) {
            $(".card-deck").append('<div class="card" style="width: 18rem;">\n' +
                '  <div class="card-header">'
                    + item.tipo + '<div/><ul class="list-group list-group-flush">\n' +
                '    <li class="list-group-item">'
                    + item.descripcion + '</li>\n' +
                '    <li class="list-group-item">'
                    + item.ubicacion + '</li>\n' +
                '    </ul>' +
                '    <div class="card-footer"><p>\n'
                    + item.nombre + '</p>'
                    + item.email +
                '    </div>\n' +
                '</div>');
        });
    });
});
</script>
</head>
<body>
<?php
require_once 'header.php';
?>

<main class="post blog-post col-lg-12">
    <div class="card-deck-wrapper">
        <div class="card-deck">
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
</main>
<?php
require_once 'footer.php';
?>
</body>
</html>

