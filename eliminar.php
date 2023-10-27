<?php
include("./config.php");

if (isset($_POST['borrar_fila'])) {
    // ambil id dari query string
    $id = $_POST['id_eliminar'];

    // query hapus
    $sql = "DELETE FROM tbl_pedido WHERE id_pedido = '$id'";
    $query = mysqli_query($db, $sql);

    // apa query berhasil dihapus?
    if ($query) {
        header('Location: ./index.php?eliminar=exito');
    } else
        die('Location: ./index.php?eliminar=error');
} else
    die("Acceso denegado...");
