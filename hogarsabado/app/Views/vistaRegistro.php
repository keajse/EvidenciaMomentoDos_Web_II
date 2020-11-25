<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <link rel="stylesheet" href="<?php echo base_url('public/Styles/style.css'); ?>">
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

        <main>

            <div class="card-group">

                <div class="card">
                    <br>
                    <img src="<?php echo base_url('public/img/tom.jpg'); ?>" class="card-img-top" alt="...">

                </div>

                <div class="card" style="width: 35rem;">
                    <br>
                    <h2>Dales una nueva oportunidad, Registrelo aquí</h2>
                    <img src="<?php echo base_url('public/img/cachorros.jpg'); ?>" class="card-img-top" alt="...">
                    <div class="card-body">



                        <?php if (session('mensaje')) : ?>

                            <div class="alert alert-info alert-dismissible fade show mt-4" role="alert">
                                <?php echo (session('mensaje')) ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php endif ?>


                        <form class="mt-5" method="POST" action="<?php echo (base_url("public/registro")) ?>">
                            <div class="form-group row">
                                <label for="nombre" class="col-sm-3 col-form-label">Nombre:</label>
                                <div class="col-sm-7">
                                    <input type="texto" class="form-control" id="nombre" name="nameanimal">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="age" class="col-sm-3 col-form-label">Edad:</label>
                                <div class="col-sm-3">
                                    <input type="texto" class="form-control" id="age" name="ageanimal">
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-control" name="time">
                                        <option value="Mes">Mes</option>
                                        <option value="Meses">Meses</option>
                                        <option value="Año">Año</option>
                                        <option value="Años">Años</option>

                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="food" class="col-sm-3 col-form-label">Comida:</label>
                                <div class="col-sm-7">
                                    <input type="texto" class="form-control" id="food" name="foodanimal">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-3 col-form-label">Descripción</label>
                                <div class="col-sm-7">
                                    <textarea name="description" id="description" cols="38" rows="5" name="description"></textarea>
                                </div>
                            </div>
                            <br>

                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Tipo Animal</label>
                                <div class="col-sm-7">
                                    <select class="form-control" name="typeanimal">
                                        <option value="Domestico">Doméstico</option>
                                        <option value="Silvestre">Fauna Silvestre</option>

                                    </select>
                                </div>
                            </div>

                            <br>

                            <div class="form-group row">
                                <label for="photoanimal" class="col-sm-3 col-form-label">URL:</label>
                                <div class="col-sm-7">
                                    <input type="texto" class="form-control" id="photoanimal" name="photoanimal">
                                </div>
                            </div>
                            <br>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


        </main>

    </div>

    <footer>
        &reg; Created by Keajse
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>