<?= $this->layout('dashboard/_template', ['title' => 'Editar']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">
      <a href="<?= URL ?>dashboard/secretaria/tipopessoas">Tipo de pessoa</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Editar</li>
  </ol>
</nav>

<?php foreach($tipo as $item):  ?>
<div class="row">
  <!-- form -->
  <div class="col">
    <form action="<?= URL ?>dashboard/secretaria/tipopessoas/editar" method="post">
      <!-- tipo -->
      <div class="col">
        <label class="form-label">Tipo</label>
        <input type="text" class="form-control" name="tipo" value="<?= $item->tipo ?>" required>
      </div>

      <!-- submit -->
      <input type="hidden" name="id" value="<?= $item->id ?>">
      <button class="btn btn-primary w-100 mt-3 mb-5">Salvar</button>
    </form>
  </div>

  <!-- end row -->
</div>

<?php endforeach; ?>