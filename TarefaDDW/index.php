<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site DDW</title>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="libs/MaterialDesign-Webfont-master/css/materialdesignicons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> Straight</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">What are we?</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fundation
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Team</a>
          <a class="dropdown-item" href="#">What are we going to do?</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Other curiosities...</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/imagem1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/imagem2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/imagem3.jpg" class="d-block w-100" alt="...">
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
<div class="container">
  <div class="row mt-5 mb-5 col-12 col-md-12">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="img/imagem1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">People of all ages can smile in our company.</p>
          </div>
      </div>
    </div>
      <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="img/imagem2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">We have the best services to offer to all audiences.</p>
          </div>
      </div>
    </div>
      <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="img/imagem3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">We always value the products as expected for our customers.</p>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="jumbotron jumbotron-fluid bg-dark text-white">
  <div class="container text-center">
    <h1 class="display-4">Always</h1>
    <p class="lead">We're with you</p>
  </div>
</div>
<div class="text-center">
<div class="card-body">
    <h5 class="card-title">All rights reserved. Etec de Lins</h5>
    <p class="card-text">Made by Matheus Pitas Baptista for DDW class.</p>
  </div>
</div>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
      if('serviceWorker' in navigator){
        navigator.serviceWorker.register('sw.js').then(function(){
          console.log('Service Worker foi registrado.')
        }).catch(function(){
          console.log('Service Worker não foi registrado.')
        })
      }
    </script>
</body>
</html>