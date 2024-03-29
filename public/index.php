<?php

include("../src/php/bd.php");
include("../src/php/components/banner.php");
include("../src/php/components/destacados.php");


$base = new Bd();

$banners = $base->query("SELECT * FROM banners");

$destacados = $base->query("SELECT * FROM destacados");

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-commerce</title>

  <!--link faviicon -->
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

  <!--descripcion de pagina-->
  <meta name="description" content="e-commerce diseñado para la divulgacion de la diversa informacion que la empresa  tiene en su catalogo." />

  <!--palabras claves-->
  <meta name="keywords" content="libros, book, guerra de tronos, aprendizaje, revelio en la granja, literatura universal, literatura, conde de montecristo, novelas, fabulas, diversidad" />

  <!--para decirle al los robots que la pagina sea mas visible al usuario-->
  <meta name="robots" content="index,follow" />

  <!--author-->
  <meta name="author" content="Davinson Andres Vanegas Tabares" />
  <meta name="author" content="Santiago Arango Benjumea" />

  <!--derechos de autor-->
  <meta name="copyright" content="Davinson vanegas" />
  <meta name="copyright" content="Santiago Arango" />

  <!--cache-->
  <meta http-equiv="cache-control" content="cache" />
  <!--tiempo de cache-->
  <meta http-equiv="expires" content="0" />

  <!-- links de fuentes-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet" />

  <!--link de bootstap 5-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!--link de icons bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!--links de css-->
  <link rel="stylesheet" href="./assets/styles/variables.css" />
  <link rel="stylesheet" href="./assets/styles/index.css" />

  <!--link de jquey-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script async src="../src/js/index.js"></script>
  <script async src="../src/js/ajax.js"></script>

</head>

<body data-bs-theme="light">

  <header class="container-fluid container-header pt-3 text-center" id="inicio">
    <div class="container row justify-content-evenly pb-1 m-auto">
      <figure class="col-5 col-md-3 d-flex align-items-center m-0 order-1 order-md-2">
        <a href="./index.php"><img src="../public/assets/img/logo sin fondo.png" alt="logo e-commerce" class="img-fluid" /></a>
      </figure>

      <h1 class="col-12 col-md-6 text-center pt-md-3 order-3 order-md-2">
        E-Commerce
      </h1>

      <ul class="d-flex col-7 col-md-2 justify-content-end gap-3 align-items-center mb-0 order-2">
        <li class="heartbeat"><i class="bi bi-cloud-moon-fill" id="darkMode"></i></li>
        <li class="heartbeat cartB"><i class="bi bi-cart4"></i></li>
      </ul>
    </div>
    <nav>
      <ul class="d-none d-sm-flex m-auto justify-content-evenly py-1 px-0">
        <li><a href="#inicio">Inicio <i class="bi bi-house"></i></a></li>
        <li><a href="#catalogo">Catalogo <i class="bi bi-journal-bookmark-fill"></i></a></li>
        <li><a href="#">Cuenta<i class="bi bi-person-badge"></i></a></li>
        <li><a href="#conocenos">Conocenos <i class="bi bi-question-circle"></i></a></li>
      </ul>
    </nav>
  </header>

  <!--seccion del carrito-->

  <!-- <article class="d-flex aside-cars-content-cart">
      <figure class="d-flex">
          <img src="../public/assets/img/icono.jpg" alt="..." loading="lazy">
          <figcaption>Imagen</figcaption>
      </figure>
      <span>$30.300</span>
      <i class="bi bi-x cartX" id="" data-tab="1"></i>          
  </article> -->

  <aside class="aside-cars">
        <section class="aside-cars-content">
            <h4><i class="bi bi-arrow-left-short"></i>Mis ordenes</h4>
            <div class="cartRender">


            </div>
        </section>
    </aside>

    <div class="pp"></div>

  <!--menu cel-->
  <aside class="menuCel d-block d-sm-none">
    <ul class="p-0 m-0 w-75 m-auto">
      <li><a href="#inicio"><i class="bi bi-house"></i></a></li>
      <li><a href="#catalogo"><i class="bi bi-journal-bookmark-fill"></i></a></li>
      <li><a href="#"><i class="bi bi-person-badge"></i></a></li>
      <li><a href="#conocenos"><i class="bi bi-question-circle"></i></a></li>
    </ul>
  </aside>


  <main class="container-fluid m-auto p-0">

    <!---desde aqui-->

    <!--banner e-commerce-->
    <section id="carouselExampleIndicators" class="carousel slide container-banner">

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <?= banners($banners) ?>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </section>

    <!--libros destacados-->
    <section class="destacados justify-content-between justify-content-md-around">

      <?= destacados($destacados) ?>

    </section>

    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast">
      <div class="toast-header">
        <img src="../public/assets/img/icono.png" class="rounded me-2 img-fluid icoImg" alt="...">
        <strong class="me-auto">E-commerce</strong>
        <small>compra exitosa.!</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Gracias por tu compra, el pedido esta en camino.❤️
      </div>
    </div>

    <!--filtro-->
    <section class="text-end align-items-center p-2 py-3 querys">

      <select class="order-2 order-md-1">
        <option>producto</option>
        <option>categoria</option>
        <option>precio</option>
      </select>

      <input type="text" placeholder="Buscar" class="order-1 order-md-2">

      <button type="submit" class="btn btn-primary order-3"><i class="bi bi-search"></i></button>

    </section>


    <!--paginacion-->
    <div aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item paginacion" data-tab="1"><a class="page-link" href="#catalogo">1</a></li>
        <li class="page-item paginacion" data-tab="2"><a class="page-link" href="#catalogo">2</a></li>
        <li class="page-item paginacion" data-tab="3"><a class="page-link" href="#catalogo">3</a></li>
      </ul>
    </div>
    <!---hasta aqui-->
    

    <!--catalogo-->
    <section class="d-flex gap-2 my-4 px-3 catalogo" id="catalogo">
      
    </section>

    <!--paginacion-->
    <div aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item paginacion" data-tab="1"><a class="page-link" href="#catalogo">1</a></li>
        <li class="page-item paginacion" data-tab="2"><a class="page-link" href="#catalogo">2</a></li>
        <li class="page-item paginacion" data-tab="3"><a class="page-link" href="#catalogo">3</a></li>
      </ul>
    </div>
    <!---hasta aqui-->


    <!-- Modal -->
    <aside class="cart-container d-none">
    
    <div class="cart-container-bg">
      <div class="cart">

      </div>
    </div>
  </aside>
  </main>

  <footer class="text-center text-white" id="conocenos">
    <div class="container">
      <section class="mt-5">
        <div class="row text-center d-none justify-content-center pt-5 d-sm-flex">

          <ul class="container d-flex flex-wrap justify-content-center gap-5">
            <li class="colmd-2 text-uppercase font-weight-bold"><a href="#inicio">inicio <i class="bi bi-house"></i></a>
            </li>
            <li class="colmd-2 text-uppercase font-weight-bold"><a href="#catalogo">catalogo <i class="bi bi-journal-bookmark-fill"></i></a></li>
            <li class="colmd-2 text-uppercase font-weight-bold"><a href="#cuenta">cuenta <i class="bi bi-person-badge"></i></a></li>
            <li class="colmd-2 text-uppercase font-weight-bold"><a href="#conocenos">Conocenos <i class="bi bi-question-circle"></i></a></li>

          </ul>

        </div>
      </section>

      <hr class="my-5" />

      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti dicta,
              aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>

      <section class="text-center mb-5">
        <i class="bi bi-facebook px-1"></i>
        <i class="bi bi-twitter-x px-1"></i>
        <i class="bi bi-instagram px-1"></i>
        <i class="bi bi-linkedin px-1"></i>
      </section>
    </div>

    <div class="text-center p-3 copy">
      <a class="text-white" href="https://github.com/ArbenS90" target="_blank">donovidio.com</a><span> &</span>
      <a class="text-white" href="https://github.com/vanegas-27" target="_blank">Davidson Vanegas</a><br>
      © 2024 Copyright
    </div>

  </footer>

</body>

</html>