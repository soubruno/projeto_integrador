<?php


$login = $_POST["email"];
$senha = md5($_POST["senha"]); 


include_once 'conexao.php';

$sql = "select * from usuario where email = '".$login."' and senha = '".$senha."'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) == 1){
    
    $row = mysqli_fetch_array($result);

    session_start();

    $_SESSION["nome"] = $row["nome"];
    $_SESSION["tempo"] = time(); 

    header("location:index.php");
}else{
    $msg = "Login/Senha Invalidos!";
    header("location:index.php?msg=".$msg);
    
}
?>