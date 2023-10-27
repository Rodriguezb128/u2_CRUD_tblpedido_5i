<?php
include("./config.php");

if (isset($_POST['editar_fila'])) {
    $id = $_POST['edit_id'];
    $id_producto = $_POST['edit_producto'];
    $fecha = $_POST['edit_fecha'];
    $iva = $_POST['edit_iva'];
    $entregado = $_POST['edit_entregado'];
    $foto = $_POST['edit_foto'];
    $contado = $_POST['edit_contado'];
    $descuento = $_POST['edit_descuento'];


    $sql = "UPDATE tbl_pedido SET id_producto='$id_producto', fecha='$fecha', iva='$iva', entregado='$entregado', foto='$foto', contado='$contado', descuento='$descuento' WHERE id_pedido = '$id'";
    $consulta = mysqli_query($db, $sql);

    if ($consulta){
        header('Location: ./index.php?actualizar=exito');
    }else{
        header('Location: ./index.php?actualizar=error');
    }
} else
    die("Acceso denegado...");
