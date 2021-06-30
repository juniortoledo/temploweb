<?= $this->layout('dashboard/_template', ['title' => 'Editar']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">
      <a href="<?= URL ?>dashboard/secretaria/cargo">Cargo eclesiático</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Editar</li>
  </ol>
</nav>

<?php foreach($data as $item):  ?>

<!-- form -->
<form action="<?=URL?>dashboard/secretaria/cargo/update" method="post" class="row">
  <!-- tipo -->
  <div class="col-6">
    <label class="form-label">Cargo</label>
    <input type="text" class="form-control" name="cargo" value="<?= $item->cargo ?>" required>
  </div>

  <!-- sigla -->
  <div class="col-6">
    <label class="form-label">Sigla</label>
    <input type="text" class="form-control" name="sigla" value="<?= $item->sigla ?>" required>
  </div>

  <!-- submit -->
  <input type="hidden" name="id" value="<?= $item->id ?>">
  
  <div class="col-12">
    <button class="btn btn-primary w-100 mt-3 mb-5">Salvar</button>
  </div>
</form>

<?php endforeach; ?>