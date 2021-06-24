<?= $this->layout('dashboard/_template', ['title' => 'Usuários']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Usuários</li>
  </ol>
</nav>

<!-- control -->
<div class="row">
  <div class="col-9">
    <input type=" text" class="form-control shadow" id="search" placeholder="Pesquisa" onkeyup="search()">
  </div>
  <div class="col-3">
    <a href="<?= URL ?>dashboard/sistema/usuarios/cadastrar" class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
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
<script src="<?= URL ?>public/js/usuarios.js"></script>
<?= $this->stop() ?>