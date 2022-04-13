<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
    
    <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

    //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</head>
<body>    
    
<?php include_once 'topo1.php'; ?>

<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="img/OIP2.png"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              /><br><br>
              <img
                src="img/R.jpg"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Cadastro de usuário</h3>
                <form action="cad_user.php" method="get">
                  <label>Nome</label>
                  <input type="text" name="nome" id="nome" class="form-control form-control-lg" />
                        
                  <label>Email</label>
                  <input type="text" name="email" id="email" class="form-control form-control-lg" />
                  
                  <label>Senha</label>
                  <input type="password" name="senha" id="senha" class="form-control" onKeyPress="validatePassword()" required />
                      
                  <label>Confirmar senha</label>
                  <input type="password" id="confirmarSenha" class="form-control" onKeyPress="validatePassword()" required  />
                      
                  <script>
                      var password = document.getElementById("senha");
                      var confirm_password = document.getElementById("confirmarSenha");
                      function validatePassword(){
                      if(password.value != confirm_password.value) {
                          confirm_password.setCustomValidity("Senhas diferentes!");
                          document.getElementById("senha").style.borderColor="#FF0000";
                          document.getElementById("confirmarSenha").style.borderColor="#FF0000";
                      } else {
                          confirm_password.setCustomValidity('');
                          document.getElementById("senha").style.borderColor="#028200";
                          document.getElementById("confirmarSenha").style.borderColor="#028200";
                      }
                      }
                      password.onchange = validatePassword;
                      confirm_password.onkeyup = validatePassword;
                  </script>

                    <label>CEP</label>
                    <input class="form-control form-control-lg" name="cep" type="text" id="cep" value="" onblur="pesquisacep(this.value);" />
                     

                    <label>Rua</label>
                    <input class="form-control form-control-lg" name="rua" type="text" id="rua"/>
                  
                    <label>Número</label>
                    <input class="form-control form-control-lg" name="num" type="text" id="num"/>                  

                    <label>Bairro</label>                  
                    <input class="form-control form-control-lg" name="bairro" type="text" id="bairro"/>

                    <label>Cidade</label>
                    <input class="form-control form-control-lg" name="cidade" type="text" id="cidade"/>
                  
                    <label>Estado</label></br>                      
                    <input class="form-control form-control-lg" name="uf" type="text" id="uf"/>
                  

                    <button type="reset" class="btn btn-light btn-lg">Limpar campos</button>
                    <button type="submit" class="btn btn-warning btn-lg ms-2">Cadastrar</button>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php include_once 'rodape.php'; ?>
</body>
</html>