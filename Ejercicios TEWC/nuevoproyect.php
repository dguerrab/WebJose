<?php
require_once 'conectar.php';
require_once 'funciones_ficheros.php';

    $tipo = $_REQUEST['tipo'];
    $descripcion = $_REQUEST['descripcion'];
    $ubicacion = $_REQUEST['ubicacion'];
    $nombre = $_REQUEST['nombre'];
    $email = $_REQUEST['email'];

    $validado = (!empty($tipo) && !empty($nombre)  && !empty($descripcion) && !empty($email));
    if (!$validado) {
        $error = "Los campos tipo $tipo, nombre $nombre, email $email y descripción $descripcion son obligatorios";
        header("Location: formulario.php?error=$error") or die("Error al redirigir a formulario con error $error");;
    }

    $f = 'imagen';
    $d = "images/";  // Tenemos que tener images con permiso para que escriba cualquiera
    // si ponemos upload/ podemos no tener permisos; /tmp/upload tiene que tener permisos de escritura (chmod 777 /tmp/upload)

    $error_fichero = error_procesa_fichero($f, $d);

    if ($error_fichero != false) {
        header("Location: formulario_depto.php?error=$error_fichero")
        or  die("Error al redirigir a formulario con error $error_fichero");
    }

    if (!is_uploaded_file($_FILES[$f]['name'])){
        $sql_insert = "INSERT INTO `proyectos` (tipo, descripcion, ubicacion, nombre, email) " . "VALUES (?, ?, ?, ?, ?)";
        try {
            $sentencia = $db->prepare($sql_insert);
            $sentencia->execute(array($tipo, $descripcion, $ubicacion, $nombre, $email));
        } catch (PDOException $error) {
            die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
        }
    } else {
        $sql_insert = "INSERT INTO `proyectos` (tipo, descripcion, ubicacion, nombre, email, imagen) " . "VALUES (?, ?, ?, ?, ?, ?)";
        try {
            $sentencia = $db->prepare($sql_insert);
            $sentencia->execute(array($tipo, $descripcion, $ubicacion, $nombre, $email, $_FILES[$f]['name']));
        } catch (PDOException $error) {
            die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
        }
    }

    // redirige a listado de deptos
    header("Location: proyectos.php") or die("Error al redirigir a listado");;