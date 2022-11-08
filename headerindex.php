<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>header</title>

  <style>
    header {
      width: 100%;
      font-family: "Lato", sans-serif;
      border-bottom: solid 3px white;
      height: 60px;
  position: relative;
    }

    .logo {
      font-size: 30px;
      letter-spacing: 0.4rem;
      cursor: pointer;
    }

    .logo h1 {
      margin: 0
    }
  </style>
</head>

<body>

  <header style="height: 62px; width: 100%">
    <nav class="navbar-dark bg-dark" style="height: 62px; width: 100%">
      <div class="menu-content" style="height: 62px; width: 100%; border-bottom: solid 3px white;">
        <div class="logo">
          <h1 class="logo" style="color: white;">Eméria</h1>
        </div>

        <div class="float" style="margin:10px;">
          <a style='font-size: 36px; color:white; text-decoration: none' class='fas fa-cog' data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></a>
        </div>

      </div>

      <div class="menu offcanvas  offcanvas-start  text-white bg-dark " tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenu">
        <div class="offcanvas-header" style="background-color: #500b70">
          <h3 class="offcanvas-title" id="offcanvasExampleLabel">Configuração</h3>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <h5><a href="/login.php" class="login text-white">Acessar Conta</a></h5>
        </div>
      </div>

    </nav>
  </header>

</body>

</html>