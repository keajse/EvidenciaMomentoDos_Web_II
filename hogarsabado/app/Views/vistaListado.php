<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #78F2EE;">
            <a class="navbar-brand" href="#"><img src="<?php echo base_url('public/img/gatos.jpg'); ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> HOGAR DE PASO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('public/home'); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('public/'); ?>">Registro <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('public/listado'); ?>">Vistas <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>


    </header>
    <br>

    <div class="container">


        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach ($animales as $animal) : ?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="<?= $animal["photoanimal"] ?>" class="card-img-top" alt="..." height="250px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo "Nombre: " . $animal["nameanimal"] ?></h5>
                            <p class="card-text"><?php echo "Edad: " . $animal["ageanimal"] . " " . $animal["time"] ?></p>
                            <p class="card-text"><?php echo "Comida: " . $animal["foodanimal"] ?></p>
                            <p class="card-text"><?php echo "Tipo de Animal: " . $animal["typeanimal"] ?></p>
                            <p class="card-text"><?php echo "Descripción: " . $animal["description"] ?></p>
                            


                            <a href="<?php echo (base_url("public/eliminar/" . $animal["id"])) ?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo ($animal["id"]) ?>">
                                Editar
                            </button>


                        </div>



                    </div>

                    <div class="modal fade" id="editar<?php echo ($animal["id"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edición de usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo (base_url("public/editar/" . $animal["id"])) ?>" method="POST">
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?= $animal["nameanimal"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Comida:</label>
                                            <input type="text" class="form-control" name="foodEditar" value="<?= $animal["foodanimal"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea class="form-control" rows="3" name="descripcionEditar"><?= $animal["description"] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>URL:</label>
                                            <input type="text" class="form-control" name="photoEditar" value="<?= $animal["photoanimal"] ?>">
                                        </div>
                                        <button type="submit" class="btn btn-warning">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>

    </div>

    <footer>
        &reg; Created by Keajse
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
