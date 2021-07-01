<?= $this->layout('dashboard/_template', ['title' => 'Editar']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">
      <a href="<?= URL ?>dashboard/secretaria/ocorrencias">Ocorrências</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Editar</li>
  </ol>
</nav>

<?php foreach($data as $item):  ?>

<!-- control -->
<form action="<?=URL?>dashboard/secretaria/ocorrencias/update" method="post" class="row">
  <!-- tipo -->
  <div class="col-8">
    <label class="form-label">Tipo</label>
    <select class="form-select" aria-label="Default select example" name="tipo" required>
      <option <?php if($item->tipo === 'entrada') echo 'selected'; ?> value="entrada">Entrada</option>
      <option <?php if($item->tipo === 'normal') echo 'selected'; ?> value="normal">Normal</option>
      <option <?php if($item->tipo === 'saida') echo 'selected'; ?> value="saida">Saída</option>
    </select>
  </div>

  <!-- description -->
  <div class="col-8 mt-3">
    <label class="form-label">Descrição</label>
    <input type="text" class="form-control" name="descricao" required value="<?= $item->descricao ?>">
  </div>

  <input type="hidden" name="id" value="<?= $item->id ?>">

  <!-- btn -->
  <div class="col-8 mt-3">
    <button class="btn btn-primary d-flex align-items-center justify-content-center">
      Salvar
    </button>
  </div>
</form>

<?php endforeach; ?>