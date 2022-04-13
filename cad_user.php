<?php
session_start();

// resgate de dados do formulário de cadastro
$nome = $_GET["nome"];
$email = $_GET["email"];
$senha = md5($_GET["senha"]); // "md5" faz com que a senha fique criptografada no banco de dados
$cep = $_GET["cep"];
$rua = $_GET["rua"];
$num = $_GET["num"];
$bairro = $_GET["bairro"];
$cidade = $_GET["cidade"];
$uf = $_GET["uf"];

// abrir a conexão com o banco
include_once 'conexao.php';

// montar a instrução para ir a o banco
$sql = "insert into usuario values(NULL,'".$nome."','".$email."','".$senha."','".$cep."','".$rua."','".$num."','".$bairro."','".$cidade."','".$uf."')";

$result = mysqli_query($con,$sql);

if($result){
    //echo"Gravado com Sucesso!";
    $msg = "Gravado com sucesso!";
} else {
    //echo"Erro ao Gravar!";
    $msg = "Erro ao Gravar!";
}
// 5 fechar conexão com o banco
mysqli_close($con);
echo"<script> alert('".$msg."');
location.href='index.php';

</script>";
?>