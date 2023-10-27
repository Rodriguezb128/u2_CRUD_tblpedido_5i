<?php

$servidor = "localhost";
$usuario = "root";
$contra = "";
$basedatos = "sportlife";

$db = mysqli_connect($servidor, $usuario, $contra, $basedatos);

if (!$db)
    die("Error al conectar base de datos: " . mysqli_connect_error());
