<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Carousel | Destaque</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="/styles/destaques.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container" style="background-color:#212529">
    <div id="myCarousel" class="carousel slide" data-ride="carousel"style="width: 615px; height:400px">
      <!-- Indicators -->
      <ol class="carousel-indicators" style="z-index: 2;">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" style="border-radius: 18px; background-color:#212529">
        <div class="item active">
          <img src="/imagens/hamburguer.jpg" alt="hamburguer" style="height:100%;" />
        </div>
        <div class="item">
          <img src="/imagens/pizzacalabresa.jpg" alt="pizzacalabresa" style="height:400px;" />
        </div>

        <div class="item">
          <img src="/imagens/sucolaranja.jpg" alt="sucolaranja" style="height:100%;" />
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" style="color: white;"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" style="color: white;"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</body>

</html>