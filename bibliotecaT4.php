<?php
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];



include "conexaobiblioteca.php";

$sql = "INSERT INTO `usuario` (`Nome`, `Cargo`,`Telefone`,`E-mail`)
        VALUES ('$nome', '$cargo','$telefone','$email')";

if(mysqli_query($con, $sql)){
    echo "<br>Usuário cadastrado com sucesso!";
    echo "<br><a href='bibliotecaT1.1.html'><button :hover>Voltar</button></a>";
}
else{
    echo "<br>Erro no cadastro!";
}