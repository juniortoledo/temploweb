<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Templo Web | <?= $title ?></title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?= URL ?>public/css/bootstrap.css">
  <link rel="stylesheet" href="<?= URL ?>public/css/main.css">
  <link rel="stylesheet" href="<?= URL ?>public/css/sidenav.css">
  <?= $this->section('css') ?>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar fixed-top navbar-extends bg-templo">
    <div class="container-fuild w-100">
      <div class="row">
        <div class="col d-flex align-items-center">
          <!-- btn menu -->
          <div class="btn-menu ms-2 me-3">
            <i class="material-icons">menu</i>
          </div>

          <!-- logo -->
          <a href="<?= URL ?>dashboard" class="logo">
            <img src="<?= URL ?>public/img/logo-2.png" alt="logo" width="150">
          </a>
        </div>

        <!-- link menu -->
        <div class="col d-flex justify-content-end links-menu">
          <div class="dropdown dropstart">
            <button class="btn dropdown-toggle me-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?= URL ?>public/img/avatar.svg" class="drop-avatar">
              <span class="drop-nome"><?= $_SESSION['nome'] ?></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="<?= URL ?>dashboard/perfil">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </div>

          <!-- end links menu -->
        </div>

        <!-- end row -->
      </div>

    </div>
  </nav>

  <!-- sidenav -->
  <?= $this->insert('dashboard/components/sidenav') ?>

  <!-- main content -->
  <div class="main">
    <div class="container-fluid">
      <?= $this->section('content') ?>
    </div>
  </div>

  <script src="<?= URL ?>public/js/jquery.js"></script>
  <script src="<?= URL ?>public/js/bootstrap.js"></script>
  <script src="<?= URL ?>public/js/main.js"></script>
  <script src="<?= URL ?>public/js/sidenav.js"></script>
  <?= $this->section('script') ?>
</body>

</html>