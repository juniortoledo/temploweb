<?= $this->layout('dashboard/_template', ['title' => 'Editar']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">
      <a href="<?= URL ?>dashboard/secretaria/funcao">Função</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Editar</li>
  </ol>
</nav>

<?php foreach($data as $item):  ?>

<!-- form -->
<form action="<?=URL?>dashboard/secretaria/funcao/update" method="post" class="row">
  <!-- tipo -->
  <div class="col-12">
    <label class="form-label">Função</label>
    <input type="text" class="form-control" name="nome" value="<?= $item->nome ?>" required>
  </div>


  <!-- submit -->
  <input type="hidden" name="id" value="<?= $item->id ?>">
  
  <div class="col-12">
    <button class="btn btn-primary w-100 mt-3 mb-5">Salvar</button>
  </div>
</form>

<?php endforeach; ?>