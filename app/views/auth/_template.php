<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Templo Web | <?= $title ?></title>

  <link rel="stylesheet" href="<?= URL ?>public/css/bootstrap.css">
  <link rel="stylesheet" href="<?= URL ?>public/css/main.css">
  <?= $this->section('css') ?>
</head>

<body>

  <?= $this->section('content') ?>

  <script src="<?= URL ?>public/js/jquery.js"></script>
  <script src="<?= URL ?>public/js/bootstrap.js"></script>
  <script src="<?= URL ?>public/js/main.js"></script>
  <?= $this->section('script') ?>
</body>

</html>