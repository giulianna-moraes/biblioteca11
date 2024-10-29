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
    <table style="border: 1px solid black">
        <tr>
            <th>ID_livros</th>
            <th>Título</th>
            <th>Autor(a)</th>
            <th>Editora</th>
            <th>Quantidade em estoque</th>
        </tr>
    <tbody>
        <?php
        include "conexaobiblioteca.php";
        $sql = "SELECT * FROM livros";
        $dados = mysqli_query($con, $sql);

        while ($linha = mysqli_fetch_array($dados)){
            $titulo = $linha['Titulo'];
            $editora = $linha['Editora'];
            $id_livros = $linha['ID_Livros'];
            $autor = $linha['Autor'];
            $Quantidade_em_Estoque = $linha['Quantidade em Estoque'];
            $Disponibilidade = $linha['Disponibilidade'];

            echo "<tr>
                    <td>$id_livros</td>
                    <td>$titulo</td>
                    <td>$editora</td>
                    <td>$autor</td>
                    <td>$Quantidade_em_Estoque</td>
                    <td>$Disponibilidade</td>
                </tr>" ;
        }
          ?>
    </tbody>
    </table>
    <br><br>
    <a href="bibliotecaT1.1.html">Home</a>
    </div>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
</body>
</html> 