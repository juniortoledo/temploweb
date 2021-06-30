<?= $this->layout('dashboard/_template', ['title' => 'Tipo']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Tipo de pessoa</li>
  </ol>
</nav>

<!-- control -->
<form action="<?= URL ?>dashboard/secretaria/tipopessoas" method="post">
  <div class="row">
    <div class="col-9">
      <input type="text" class="form-control shadow" name="tipo" placeholder="Cadastrar tipo" required>
    </div>
    <div class="col-3">
      <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center">
        <i class="material-icons me-2">add</i><span class="none">Adicionar</span>
      </button>
    </div>
    <!-- end row -->
  </div>
</form>

<!-- listagem -->
<div class="row mt-4">
  <div class="col">
    <div style="overflow-x:auto">
      <table class="table" style="position: relative; min-width:800px;">
        <caption>Lista de igrejas</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tipos cadastrados</th>
            <th scope="col" class="d-flex justify-content-end">Ações</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach($tipos as $key => $item):  ?>
        
          <tr>
            <th scope="row"><?= $key + 1 ?></th>
            <td><?= $item->tipo ?></td>

            <td class="d-flex justify-content-end">
              <a href="<?= URL ?>dashboard/secretaria/tipopessoas/editar/<?= $item->id ?>" class="btn btn-primary me-2">
              <i class="material-icons">edit</i></a>

              <?php if($item->tipo !== 'Membro' AND $item->tipo !== 'Congregado' AND $item->tipo !== 'Criança' AND $item->tipo !== 'Obreiro'): ?>
                <a href="<?= URL ?>dashboard/secretaria/tipopessoas/<?= $item->id ?>" class="btn btn-danger">
                <i class="material-icons">delete</i></a>
              <?php endif; ?>
            </td>
          </tr>              
            
          <?php endforeach; ?>
        </tbody>
        </table>
        <!-- end div style -->
      </div>
    <!-- end col -->
  </div>
  <!-- end row -->
</div>