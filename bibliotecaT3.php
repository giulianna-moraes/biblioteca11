<?php

$email = $_POST['email'];
$endereço = $_POST['endereço'];
$telefone = $_POST['telefone'];

include "conexaobiblioteca.php";

$sql = "INSERT INTO `cliente` (`E-mail`, `Endereco`,`Telefone`)
        VALUES ('$email', '$endereço','$telefone')";

if(mysqli_query($con, $sql)){
    echo "<br>Cliente cadastrado com sucesso!";
    echo "<br><a href='bibliotecaT1.1.html'><button :hover>Voltar</button></a>";
}
else{
    echo "<br>Erro no cadastro!";
}