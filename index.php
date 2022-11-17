<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ABC Logistica e Transportes</title>
  </head>
  <body>
  
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
              
            <h3>Painel de Agendamento</h3>
            <p class="mb-4">Seja bem vindo ao nosso sistema, para usufruir completamente faça seu login e/ou cadastre-se abaixo.</p>
            <p id='msg'></p>
            <?php
                if(isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                }
              ?>
            <form action="login.php" method="POST">

              <div class="form-group first">
                <label for="cnpj">CNPJ</label>
                <input id="cnpj-formatar" type="text" class="form-control" placeholder="139.987.019/0001-89" name="cnpj">
              </div>

              <div class="form-group last mb-3">
                <label for="password">Senha</label>
                <input type="password" class="form-control" placeholder="Sua senha" name="senha">
              </div>

              <div class="padding-cadastro">
                <span class="ml-auto"><a href="#" class="forgot-pass">Esqueci minha senha</a></span> 
                <br>
                <span class="ml-auto"> <a href="cadastro.php" class="forgot-pass">Cadastrar-se</a></span> 
                </div>

              <input type="submit" value="Entrar na Plataforma" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>