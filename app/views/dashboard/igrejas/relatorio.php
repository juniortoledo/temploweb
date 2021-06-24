<?php
date_default_timezone_set('America/Sao_Paulo');
//model igrejas
use App\Models\Dashboard\IgrejasModel;

$igrejas =  new IgrejasModel();

//faz apenas a edição dos dados
$igreja = $igrejas->buscaIgreja($_SESSION['id']);
//faz apenas a edição dos dados
$sede = $igrejas->buscaSede($_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatorio</title>

  <style>
    * {
      font-family: sans-serif;
    }

    .container {
      position: relative;
      width: 80%;
      margin: 0 auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    /* Zebra striping */
    tr:nth-of-type(odd) {
      background: #eee;
    }

    th {
      background: rgb(190, 190, 190);
      color: black;
      font-weight: bold;
    }

    td,
    th {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
      font-size: 18px;
    }

    .navbar h4,
    h2 {
      margin-bottom: -10px;
    }

    .navbar {
      margin-bottom: 2em;
      padding-left: 20px;
    }

    .section {
      width: 100%;
      padding-left: 20px;
      padding-bottom: 25px;
      background-color: rgb(190, 190, 190);
      border-bottom: 2px solid black;
      border-top: 2px solid black;
      margin-bottom: 1em;
    }


    footer {
      position: fixed;
      bottom: 30px;
      width: 100%;
      margin-top: 100px;
      font-size: 9px;
    }

    @page {
      size: A4;
      margin: 70px;
    }
  </style>
</head>

<body>

  <div class="navbar">
    <?php foreach ($sede as $item) : ?>
      <h2><?= $item->nome_igreja ?></h2>
      <h4><?= $item->endereco ?></h4>
      <h4><?= $item->cidade ?> - <?= $item->estado ?></h4>
    <?php endforeach; ?>
  </div>

  <div class="section">
    <h2>Relatório de congregações</h2>
  </div>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Data de fundação</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($igreja as $key => $item) : ?>
        <tr>
          <td><?= $key + 1 ?></td>
          <td><?= $item->nome_igreja ?></td>
          <td><?= $item->tipo ?></td>
          <td><?= $item->fundacao ?></td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>

  <footer>
    <p>Impressão em <?= date('d-m-Y') ?> as <?= date('H:i:s') ?> por <?= $_SESSION['nome'] ?></p>
    <p>Gerado por Templo Web</p>
  </footer>


</body>

</html>