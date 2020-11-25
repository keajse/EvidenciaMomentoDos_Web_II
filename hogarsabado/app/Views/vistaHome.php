<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('public/img/cat.jpg'); ?>" class="d-block w-100" alt="..." height="700px">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('public/img/conejo.jpg'); ?>" class="d-block w-100" alt="..." height="700px">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('public/img/animalitos.jpg'); ?>" class="d-block w-100" alt="..." height="700px">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </main>
        <br><br>

        <main>
            <div class="card-group">
                <div class="card text-white bg-info mb-3" style="max-width: 23rem;">
                    <div class="card-header">Beneficios de tener una mascota</div>
                    <div class="card-body">
                        <h5 class="card-title">Darse la oportunidad y darles una nueva oportunidad</h5>
                        <p class="card-text">Los estudios demuestran que las personas con animales de compañía suelen estar más sanas y felices que aquellas que no los tienen, pero recuerda que tener una mascota es una gran responsabilidad y un compromiso de por vida. Cuando estés listo para asumir este compromiso, comprobarás que tener una mascota ofrece ventajas.

                        </p>
                    </div>
                </div>

                <div class="card text-white bg-danger mb-3" style="max-width: 23rem;">
                    <div class="card-header">¿Cómo elegir un gato? ¿Gatito o gato adulto?</div>
                    <div class="card-body">
                        <h5 class="card-title">Es un complemento a nuestro diario vivir.</h5>
                        <p class="card-text">¡Es difícil resistirse a un gatito nuevo! Son tiernos, juguetones, traviesos e inquisitivos. Al mismo tiempo, exigen mucha vigilancia y atención. ¿Estás preparado para invertir el tiempo y la energía necesarios para cuidar a un gatito joven? Por otro lado, los gatos adultos también son juguetones, y su personalidad ya se ha desarrollado. En general no inviertes tiempo en cuidarlos.</p>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="max-width: 23rem;">
                    <div class="card-header">EL PAPEL DE LOS ANIMALES DE TERAPIA.</div>
                    <div class="card-body">
                        <h5 class="card-title">Caminando juntos</h5>
                        <p class="card-text">Las terapias con animales son una herramienta que cada día se utiliza más en proyectos de ayuda a personas que sufren por soledad o depresión o que tienen trastornos o enfermedades crónicas. Sobre todo los perros, que son animales más sociables inicialmente, ayudan mucho y pueden ser unos grandes amigos de personas a quienes les cueste relacionarse o desarrollar comportamientos más cariñosos o empáticos.</p>
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