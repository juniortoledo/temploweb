<?= $this->layout('dashboard/_template', ['title' => 'Igrejas']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Igrejas</li>
  </ol>
</nav>

<!-- control -->
<div class="row">
  <div class="col-6">
    <input type=" text" class="form-control shadow" id="search" placeholder="Pesquisa" onkeyup="search()">
  </div>
  <div class="col-3">
    <a href="<?= URL ?>dashboard/igrejas/print" target="_blank" class="btn btn-secondary w-100 d-flex align-items-center justify-content-center">
      <i class="material-icons me-2">print</i><span class="none">Imprimir</span>
    </a>
  </div>
  <div class="col-3">
    <a href="<?= URL ?>dashboard/igrejas/cadastrar" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
      <i class="material-icons me-2">add</i><span class="none">Adicionar</span>
    </a>
  </div>
  <!-- end row -->
</div>

<!-- listagem -->
<div class="row mt-4">
  <div class="col" id="app">

  </div>
  <!-- end row -->
</div>

<?= $this->start('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="<?= URL ?>public/js/igrejas.js"></script>
<?= $this->stop() ?>