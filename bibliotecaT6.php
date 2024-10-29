<?php
$id_cliente = $_POST['id_cliente'];
$id_livros = $_POST['id_livros'];
$id_usuario = $_POST['id_usuario'];
$dataempr = $_POST['dataempr'];
$datadev = $_POST['datadev'];

include "conexaobiblioteca.php";

$sql = "INSERT INTO `emprestimo` (`ID_Cliente`, `ID_Livros`,`ID_Usuario`,`Data de Emprestimo`, `Data de Devolucao`)
        VALUES ('$id_cliente', '$id_livros','$id_usuario','$dataempr', '$datadev')";

if(mysqli_query($con, $sql)){
    echo "<br>Emprestimo cadastrado com sucesso!";
    echo "<br><a href='bibliotecaT1.1.html'><button :hover>Voltar</button></a>";
}
else{
    echo "<br>Erro no cadastro!";
}