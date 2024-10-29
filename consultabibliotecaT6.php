<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="biblioteca.css" />
    </head>
    <body>
    <h1>consulta</h1>
    <br>
    <form class="container_3">
    <table style="border: 1px solid black" >
        <tr>
            <th>ID_emprestimo</th>
            <th>ID_cliente</th>
            <th>ID_livros</th>
            <th>ID_usuário</th>
            <th>Data de empretimo</th>
            <th>Data de devolução</th>
        </tr>
    <tbody>
        <?php
        include "conexaobiblioteca.php";
        $sql = "SELECT * FROM emprestimo";
        $dados = mysqli_query($con, $sql);

        while ($linha = mysqli_fetch_array($dados)){
            $id_emprestimo = $linha['ID_Emprestimo'];
            $id_cliente = $linha['ID_Cliente'];
            $id_livros = $linha['ID_Livros'];
            $id_usuario = $linha['ID_Usuario'];
            $dataempr = $linha['Data de Emprestimo'];
            $datadev = $linha['Data de Devolucao'];

            echo "<tr>
                    <td>$id_emprestimo</td>
                    <td>$id_cliente</td>
                    <td>$id_livros</td>
                    <td>$id_usuario</td>
                    <td>$dataempr</td>
                    <td>$datadev</td>
                </tr>";
        } 
    ?>    
    </tbody>
    </table>
      </form>
    <br><br>
    <a href="bibliotecaT1.1.html">Home</a>
    </div>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
</body>
</html> 