<?php
echo '<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Edição de Aluno</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">';

    echo '<h2>Editar de Aluno - Código '.$_GET['codigo'].'</h2>';
    echo "<h2>Editar de Aluno - Código $_GET[codigo]</h2>";
    echo '<form method="post" action="tabela_consulta.php" enctype="multipart/form-data">';
   // Imprimendo inputs
    echo '<div class="form-group">
    <label for="nome">Nome:</label>
    <input
      type="nome"
      class="form-control"
      id="nome"
      placeholder="Nome Completo"
      name="nome"
    />
  </div>
  <div class="form-group">
    <label for="endereco">Endereço:</label>
    <input
      type="text"
      class="form-control"
      id="endereco"
      placeholder="Logradouro"
      name="endereco"
    />
  </div>';
  echo '<button type="submit" class="btn btn-success">Salvar</button>
  <button type="reset" class="btn btn-default">Limpar</button>';
    echo "</form>";
    echo "</div>
    </body>
  </html>";

?>