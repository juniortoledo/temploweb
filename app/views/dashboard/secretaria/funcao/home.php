<?= $this->layout('dashboard/_template', ['title' => 'Função']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Função</li>
  </ol>
</nav>

<!-- control -->
<form action="<?=URL?>dashboard/secretaria/funcao/add" method="post" class="row">
  <div class="col-8">
    <input type="text" class="form-control shadow" name="nome" placeholder="Funcao" required>
  </div>

  <div class="col-4">
    <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
      <i class="material-icons me-2">add</i>
      Cadastrar
    </button>
  </div>
</form>

<?php if($data): ?>

<!-- listagem -->
<div class="row mt-4" style="overflow-x:auto">
  <table class="table" class="table" style="position: relative; min-width:600px;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Cargo eclesiástico</th>
        <th scope="col" class="d-flex justify-content-end">Ação</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($data as $key => $item): ?>
      <tr>
        <th scope="row"><?= $key+1 ?></th>
        <td><?= $item->nome ?></td>
        <td class="d-flex justify-content-end">
          <a href="<?=URL?>dashboard/secretaria/funcao/editar/<?= $item->id ?>" class="btn btn-primary">
            <i class="material-icons">edit</i>
          </a>
          <a href="<?=URL?>dashboard/secretaria/funcao/del/<?= $item->id ?>" class="btn btn-danger ms-2">
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