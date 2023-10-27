<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['agregar'])) {
    // ambil data dari form
    $Idp = $_POST['id_producto'];
    $fecha = $_POST['fecha'];
    $iva = $_POST['iva'];
    $entregado = $_POST['entregado'];
    $foto = $_POST['foto'];
    $contado = $_POST['contado'];
    $descuento = $_POST['descuento'];

    $sql = "INSERT INTO tbl_pedido(id_producto, fecha, iva, entregado, foto, contado, descuento)
    VALUES('$Idp', '$fecha', '$iva', '$entregado', '$foto', '$contado','$descuento')";
    $query = mysqli_query($db, $sql);

    if ($query)
        header('Location: ./index.php?status=exito');
    else
        header('Location: ./index.php?status=error');
} else
    die("Acceso denegado...");
