<?php

$titulo = $_POST['titulo'];
$editora = $_POST['editora'];
$autor = $_POST['autor'];
$qtd = $_POST['qtd'];

include "conexaobiblioteca.php";

$sql = "INSERT INTO `livros` (`Titulo`, `Editora`,`Autor`,`Quantidade em Estoque`)
        VALUES ('$titulo', '$editora','$autor','$qtd')";

if(mysqli_query($con, $sql)){
    echo "<br>Livro cadastrado com sucesso!";
    echo "<br><a href='bibliotecaT1.1.html'><button :hover>Voltar</button></a>";
}
else{
    echo "<br>Erro no cadastro!";
}
