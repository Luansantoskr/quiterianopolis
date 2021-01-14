<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prefeitura de quiterianópolis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .navbar-custom .navbar-brand, 
    .navbar-custom .navbar-text { 
    color: rgba (255,255,255, 0,8); 
}

.carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>

<div class="jumbotron d-flex justify-content-center" style="margin-bottom:0; background-color: rgb(1, 180, 243)">
  <img style="width: 150px; heigth: 400px;" src="images/quiterianopolis.png">
  &nbsp; &nbsp; &nbsp; <img src="images/info.png" width="40px" height="40px"> &nbsp; <div><i class="fa fa-info">Acesso à <br>informação</i></div>
  &nbsp; &nbsp; &nbsp;<form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-primary" type="submit">Search</button>
  </form>
  &nbsp; &nbsp; &nbsp;<i class="fa fa-instagram" style="font-size:36px"></i>
  &nbsp; &nbsp;<div><i class="fa fa-facebook" style="font-size:36px"></i></div>
  &nbsp; &nbsp;<div><i class="fa fa-twitter" style="font-size:36px"></i></div>

</div>

<nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-primary main-nav">
    <div class="container">
        <ul class="nav navbar-nav mx-auto">
        
        <li class="nav-item dropdown">
        <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
        <i class="fa fa-home" style="font-size:20px">Inicio</i>
      </a>
        </li>
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        A prefeitura
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Prefeito e vice</a>
        <a class="dropdown-item" href="#">Gabinete do prefeito</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        O município
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Serviços
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item dropdown" >
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Secretaria
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Turismo
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>

        </ul>
        
    </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/site-01.jpg" alt="Educação">
    </div>
    <div class="carousel-item">
      <img src="images/saude.jpg" alt="Saude">
    </div>
    <div class="carousel-item">
      <img src="images/infra.jpg" alt="Infraestrutura">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="jumbotron" style="margin-bottom:0; background-color: rgb(1, 180, 243)">
  <h2 class=" d-flex justify-content-center">Do que você precisa?
  </div>
  <div class="jumbotron d-flex justify-content-center" style="margin-bottom:0; background-color: rgb(1, 180, 243)">
    <div class="container">           
        <img src="images/leis.png" class="rounded" width="150" height="150"> 
    </div>
    <div class="container">           
        <img src="images/portarias.png" class="rounded" width="150" height="150"> 
    </div>
    <div class="container">           
        <img src="images/postos.png" class="rounded" width="150" height="150"> 
    </div>
    <div class="container">           
        <img src="images/processo.png" class="rounded" width="150" height="150"> 
    </div>
    <div class="container">           
        <img src="images/licitacoes.png" class="rounded" width="150" height="150">
    </div>
    <div class="container">           
        <img src="images/publicacao.png" class="rounded" width="150" height="150"> 
    </div>
    </div>
    <div class="jumbotron d-flex justify-content-center" style="margin-bottom:0; background-color: rgb(1, 180, 243)">
    <div class="container">           
        <img src="images/contratos.png" class="rounded" width="150" height="150">
    </div>
    <div class="container">           
        <img src="images/certidoes.png" class="rounded" width="150" height="150"> 
    </div>
    <div class="container">           
        <img src="images/agenda.png" class="rounded" width="150" height="150"> 
    </div>
    <div class="container">           
        <img src="images/lrf.png" class="rounded" width="150" height="150"> 
    </div>
    <div class="container">           
        <img src="images/legislacao.png" class="rounded" width="150" height="150"> 
    </div>
    <div class="container">           
        <img src="images/outros.png" class="rounded" width="150" height="150"> 
    </div>
    </div>
    <div class="jumbotron d-flex justify-content-center" style="margin-bottom:0; background-color: rgb(1, 180, 243)">
    <div class="container">           
        <img src="images/transparencia.png" class="rounded" width="350" height="150">
    </div>
    <div class="container">           
        <img src="images/esic.png" class="rounded" width="350" height="150"> 
    </div>
    <div class="container">           
        <img src="images/ouvidoria.png" class="rounded" width="350" height="150"> 
    </div>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/la.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/ny.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/lv.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4 h-200">
      <h2>Anuncio</h2>
      <div class="fakeimg"></div>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Anuncio</h2>
      <div class="fakeimg"></div><br>
      <h2>Anuncio</h2>
      <div class="fakeimg"></div>
      </div>
  </div>
</div>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Vídeo 1</h2>
      <div class="fakeimg"></div>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-4 ">
      <h2>Vídeo 2</h2>
      <div class="fakeimg"></div>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-4">
      <h2>Vídeo 3</h2>
      <div class="fakeimg"></div>
      <hr class="d-sm-none">
      
    </div>
  </div>
</div><br><br>
<div class="jumbotrom text-center"> <button class="btn btn-primary"> Mais vídeos </button></div> <br><br>

  <div class="jumbotron d-flex justify-content-center" style="margin-bottom:0; background-color: rgb(1, 180, 243)">
    <div class="container">           
        <img src="images/anuncioG.png" class="rounded" width="1100" height="200"> 
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0; background-color: rgb(1, 163, 243)">
<div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Endereço</h2>
            <p>AV. LAURINDO GOMES, 1, CENTRO, <br> QUITERIANÓPOLIS - CE, CEP: 63652-000<p><a class="btn btn-secondary" href="#" role="button">Veja mais &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2><h2>Publicações</h2>
            <p>publicação <br>
            publicação <br> 
            publicação <br>
            publicação <br>
            publicação <br>
            publicação <br>
            publicação <br>
            publicação <br>
            publicação <br>
            </p>
  <a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Institucional</h2>
            <p>Institucional <br>
            Institucional <br>
            Institucional <br>
            Institucional <br>
            Institucional <br>
            Institucional <br><p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>

          </div>
        </div>
</div>

</body>
</html>
