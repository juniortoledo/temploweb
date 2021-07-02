<div class="sidenav shadow">
  <div class="container-fluid">

    <!-- menu -->
    <?= $this->insert('dashboard/sidenav/home') ?>

    <?php if ($_SESSION['completo']) : ?>

      <?= $this->insert('dashboard/sidenav/igrejas') ?>
      <?= $this->insert('dashboard/sidenav/sistema') ?>
      <?= $this->insert('dashboard/sidenav/secretaria') ?>
      <?= $this->insert('dashboard/sidenav/financeiro') ?>

    <?php endif; ?>

    <!-- btn close sidenav -->
    <div class="mt-3 mb-5">
      <button class="btn btn-primary w-100 sidenav-close">Fechar</button>
    </div>
    <!-- end container -->
  </div>
</div>

<!-- bg sidenav -->
<div class="bg-sidenav"></div>