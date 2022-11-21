<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
    <link href="styleCaixa.css" rel="stylesheet">
    <!--<link href="fontsCaixa.css" rel="stylesheet">-->
    <link href="mediaCaixa.css" rel="stylesheet">
    <title>Comanda</title>
</head>
<body>
    <header>
        <div id="title">
            <h1>Caixa</h1>
        </div>

        <ul>
            <a id="btnn"><li>Voltar</li></a>

    </header>
    
    <main>
        <div class="container">
            <main>
              <div class="row g-5">
                  <div class="col-md-5 col-lg-4 order-md-last">
                    <h4>
                      <span class="texto">Pedido</span>
                    </h4>
      
                    LISTAGEM
            </div>
            <div class="col-md-7 col-lg-8">
                    <form class="needs-validation" novalidate>
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label for="numcomanda" class="form-label">N° da Comanda</label>
                            <input type="text" class="form-control" id="numcomanda" placeholder="" value="" required>
                              <div class="invalid-feedback">
                            Digite o Número da Comanda.
                              </div>
                        </div>
            
                <hr class="my-4">
           <h4 class="mb-3">Forma de Pagamento</h4>
                  <div class="my-3">

                    <div class="form-check">
                      <input id="credit" name="paymentMethod" type="radio" required>
                      <label>Cartão de Crédito</label>
                    </div>
                    <div class="form-check">
                      <input id="debit" name="paymentMethod" type="radio" required>
                      <label>Cartão de Débito</label>
                    </div>
                    <div class="form-check">
                      <input id="dinheiro" name="paymentMethod" type="radio" required>
                      <label>Dinheiro</label>
                    </div> 
                    <div class="form-check">
                        <input id="pix" name="paymentMethod" type="radio" required>
                        <label>Pix</label>
                    </div>
                  </div>
                <hr class="my-4">
      
                <input type="submit" value="Fechar Comanda" class="sign-btn">
                <input type="submit" value="Cancelar" class="sign-btn">
    </main>
      
    
</body>
</html>