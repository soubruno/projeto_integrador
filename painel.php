  <body> 
    <main>
      <section class="py-5 text-center container">
          <?php
          
            echo "Seja bem-vindo(a) ".$nome_usuario."!";
          ?>
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="border-radius: 1rem 1rem 1rem 1rem;">
              <div class="carousel-item active">
                <img src="img/R2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <!--<h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>-->
                  </div>
              </div>
              <div class="carousel-item">
                <img src="img/R4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <!--<h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>-->
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/R5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <!--<h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>-->
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="container p-5 my-5 border">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                  <h1 class="display-4 fw-bold lh-1">Nossa história</h1>
                    <p class="lead">Somos um site atuando como revendedor autorizado pela Nike trazendo os mais variados modelos de tênis.
                      <br>Buscamos o seu conforto e sua satisfação, oferecendo atendimento de qualidade e rastreamento do produto em tempo real.
                    </p>                    
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden ">
                    <img class="responsive rounded-lg-3 mb-2" src="img/ic.png" width="95%" height="95%">
                </div>
            </div>
        </div>
        <div class="card bg-dark text-white">
        <div class="card-body"><h1 class="fw-dark">Desconto em sua 1ª compra</h1>
            <p class="lead">Faça o cadastro em nosso site e garanta R$25,00 de desconto em sua primeira compra </p>
            <p>
              <a href="cadastro_user.php" class="btn btn-primary my-2">Cadastrar-se</a>
            </p>
            <p class="small">*Válido apenas na primeira compra</p></div>
      </div>        
      </section>
    </main>

      <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
  </body>