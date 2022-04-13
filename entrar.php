<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Principal</title>
</head>
<body>
    
<?php include_once 'topo1.php'; ?>
<section class="vh-100" style="background-color:white; border-color:white;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/OIP.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="login.php" method="post">


                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Entre com a sua conta</h5>

                  <div class="form-outline mb-4">
                    <input type="text" name="email" placeholder="email@email.com" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email </label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="senha" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Senha</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Entrar</button>
                  </div>

                  <a class="small text-muted" href="#!">Esqueceu a sua senha?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Ainda não criou sua conta? <a href="cadastro_user.php"
                      style="color: #393f81;">Cadastre-se aqui!</a></p>
                  <a href="#!" class="small text-muted">Termos de uso.</a>
                  <a href="#!" class="small text-muted">Política de Privacidade</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <?php
    if(isset($_GET["msg"])){
        echo $_GET["msg"];
    }
    ?>

<?php include_once 'rodape.php'; ?>
</body>
</html>