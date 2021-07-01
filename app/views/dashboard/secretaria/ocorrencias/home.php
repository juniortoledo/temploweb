<?= $this->layout('dashboard/_template', ['title' => 'Ocorrências']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Ocorrências</li>
  </ol>
</nav>

<!-- control -->
<form action="<?=URL?>dashboard/secretaria/ocorrencias/add" method="post" class="row">
  <!-- tipo -->
  <div class="col-8">
    <label class="form-label">Tipo</label>
    <select class="form-select" aria-label="Default select example" name="tipo" required>
      <option selected value="entrada">Entrada</option>
      <option value="normal">Normal</option>
      <option value="saida">Saída</option>
    </select>
  </div>

  <!-- description -->
  <div class="col-8 mt-3">
    <label class="form-label">Descrição</label>
    <input type="text" class="form-control" name="descricao" required>
  </div>

  <!-- btn -->
  <div class="col-8 mt-3">
    <button class="btn btn-primary d-flex align-items-center justify-content-center">
      <i class="material-icons me-2">add</i>
      Cadastrar
    </button>
  </div>
</form>

<?php if($data): ?>

<!-- listagem -->
<div class="row mt-4" style="overflow-x:auto">
  <table class="table" class="table" style="position: relative; min-width:700px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Descrição</th>
        <th scope="col">Tipo</th>
        <th scope="col" class="d-flex justify-content-end">Ação</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($data as $key => $item): ?>
      <tr>
        <th scope="row"><?= $key+1 ?></th>
        <td><?= $item->descricao ?></td>
        <td><?= $item->tipo ?></td>
        <td class="d-flex justify-content-end">
          <a href="<?=URL?>dashboard/secretaria/ocorrencias/editar/<?= $item->id ?>" class="btn btn-primary">
            <i class="material-icons">edit</i>
          </a>
          <a href="<?=URL?>dashboard/secretaria/ocorrencias/del/<?= $item->id ?>" class="btn btn-danger ms-2">
            <i class="material-icons">delete</i>
          </a>
        </td>
      </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
  <!-- end row -->
</div>

<?php else: ?>

<div class="row mt-4">
  <div class="col-12">
    <p>Você ainda não tem cargos cadastrados.</p>
  </div>
</div>

<?php endif; ?>