<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<script>
        function clicking() {
            window.location.href = './index.php';
        }
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Sportlife </title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Sportlife</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <div class="card mb-5">
            <div class="card-body">
                <h4 class="card-text 2">Blanca Valeria Rodriguez Chavez</h4>
                <h3 class="card-title">Tabla Pedido</h3>
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'exito')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>exito!</strong> Datos agregados con exito!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Error al agregar los datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="agregar.php" method="POST">

                    <div class="col-12">
                        <label for="id_producto" class="form-label">Id producto</label>
                        <input type="text" name="id_producto" class="form-control" placeholder="id producto" required>
                    </div>
                    <div class="col-md-4">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="text" name="fecha" class="form-control" placeholder="fecha" required>
                    </div>

                    <div class="col-md-4">
                        <label for="iva" class="form-label">iva</label>
                        <input type="text" name="iva" class="form-control" placeholder="iva" required>
                        
                    </div>

                    <div class="col-md-4">
                        <label for="tittle" class="form-label">Entregado</label>
                        <div class="col-md-12">
                        <input type="text" name="entregado" class="form-control" placeholder="Entregado" required>
                            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="text" name="foto" class="form-control" placeholder="Foto" required>
                    </div>

                    <div class="col-md-6">
                        <label for="contado" class="form-label">Contado</label>
                        <input type="text" name="contado" class="form-control" placeholder="Contado" required>
                    </div>
                    <div class="col-md-6">
                        <label for="descuento" class="form-label">Descuento</label>
                        <input type="text" name="descuento" class="form-control" placeholder="Descuento" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="enviar" name="agregar"><i class="fa fa-plus"></i><span class="ms-2">Enviar</span></button>
                    </div>
                </form>
            </div>
        </div>


        <h5 class="mb-3">Pedidos</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mostrar Entradas</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Buscar algo..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <?php if (isset($_GET['eliminar'])) : ?>
            <?php
            if ($_GET['eliminar'] == 'exito')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exito!</strong> Fila eliminada con exito!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Hubo un error eliminando la fila!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <?php if (isset($_GET['actualizar'])) : ?>
            <?php
            if ($_GET['actualizar'] == 'exito')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exito!</strong> Fila actualizada exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Hubo un error actualizando la fila!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>Id</th>";
            echo "<th scope='col'>Id producto</th>";
            echo "<th scope='col'>Fecha</th>";
            echo "<th scope='col'>Iva</th>";
            echo "<th scope='col'>Entregado</th>";
            echo "<th scope='col'>Foto</th>";
            echo "<th scope='col'>Contado</th>";
            echo "<th scope='col'>Descuento</th>";
            echo "<th scope='col' class='text-center'>Opciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $limite = 10;
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $principal = ($pagina > 1) ? ($pagina * $limite) - $limite : 0;

            $anterior = $pagina - 1;
            $siguiente = $pagina + 1;

            $sql = mysqli_query($db, "SELECT * FROM tbl_pedido");
            $filas = mysqli_num_rows($sql);
            $paginas_total = ceil($filas / $limite);

            $datos_ped = mysqli_query($db, "SELECT * FROM tbl_pedido LIMIT $principal, $limite");
            $num = $principal + 1;

            // $sql = "SELECT * FROM mahasiswa";
            // $query = mysqli_query($db, $sql);




            while ($sql = mysqli_fetch_array($datos_ped)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $sql['id_pedido'] . "</td>";
                echo "<td class='text-center'>" . $num++ . "</td>";
                echo "<td>" . $sql['id_producto'] . "</td>";
                echo "<td>" . $sql['fecha'] . "</td>";
                echo "<td>" . $sql['iva'] . "</td>";
                echo "<td>" . $sql['entregado'] . "</td>";
                echo "<td>Foto</td>";
                echo "<td>" . $sql['contado'] . "</td>";
                echo "<td>" . $sql['descuento'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary botoneditar pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($filas == 0) {
                echo "<p class='text-center'>Tidak ada data yang tersedia pada tabel ini</p>";
            } else {
                echo "<p>Total $filas entrada</p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina > 1) ? "href='?pagina=$anterior'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $paginas_total; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina < $paginas_total) ? "href='?pagina=$siguiente'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editarmodal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar fila</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM tbl_pedido";
                    $consulta = mysqli_query($db, $sql);
                    $pedidos = mysqli_fetch_array($consulta);
                    ?>

                    <form action='editar.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_id' id='edit_id'>

                            <div class="col-12 mb-3">
                                <label for="edit_producto" class="form-label">id producto</label>
                                <input type="text" name="edit_producto" id="edit_producto" class="form-control" placeholder="id producto" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_fecha" class="form-label">Fecha</label>
                                <input type="text" name="edit_fecha" id="edit_fecha" class="form-control" placeholder="fecha" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_iva" class="form-label">Iva</label>
                                <input type="text" name="edit_iva" id="edit_iva" class="form-control" placeholder="Iva" required>
                                
                            </div>


                            <div class="col-12 mb-3">
                                <label for="edit_jenis_kelamin" class="form-label">Entregado</label>
                                <div class="col-md-12" id="gender">
                                <input type="text" name="edit_entregado" id="edit_entregado" class="form-control" placeholder="Entregado" required>
                                </div>
                            </div>



                            <div class="col-12 mb-3">
                                <label for="edit_foto" class="form-label">Foto</label>
                                <input type="text" name="edit_foto" class="form-control" id="edit_foto" placeholder="Foto" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_contado" class="form-label">Contado</label>
                                <input type="number" step=0.01 name="edit_contado" id="edit_contado" class=" form-control" placeholder="Contado" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="edit_descuento" class="form-label">Descuento</label>
                                <input type="number" step=0.01 name="edit_descuento" id="edit_descuento" class=" form-control" placeholder="Descuento" required>
                            </div>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='editar_fila' class='btn btn-primary'>Enviar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmacion</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='eliminar.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='id_eliminar' id='id_eliminar'>
                            <p>¿Estás seguro de que deseas eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='borrar_fila' class='btn btn-primary'>Eliminar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function() {
            $('.botoneditar').on('click', function() {
                $('#editarmodal').modal('show');

                $tr = $(this).closest('tr');

                var fila = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(fila);
                $('#edit_id').val(fila[0]);
                $('#edit_producto').val(fila[2]);
                $('#edit_fecha').val(fila[3]);
                $('#edit_iva').val(fila[4]);
                $('#edit_entregado').val(fila[5]);
                $('#edit_foto').val(fila[6]);
                $('#edit_contado').val(fila[7]);
                $('#edit_descuento').val(fila[8]);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var fila = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(fila);
                $('#id_eliminar').val(fila[0]);
            });
        });
    </script>


</body>

</html>