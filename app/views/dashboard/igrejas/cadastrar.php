<?= $this->layout('dashboard/_template', ['title' => 'Cadastrar']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">
      <a href="<?= URL ?>dashboard/igrejas">Igrejas</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
  </ol>
</nav>

<div class="row">
  <!-- form -->
  <div class="col-sm-12 col-lg-8">
    <form action="<?= URL ?>dashboard/igrejas/cadastrar" method="post">
      <!-- nome-igreja -->
      <div class="col">
        <label class="form-label"><?= $lang['perfil-1'] ?></label>
        <input type="text" class="form-control" name="nome-igreja">
      </div>

      <!-- nome-ministerio -->
      <div class="col mt-3">
        <label class="form-label">Ministério</label>
        <input type="text" class="form-control" name="ministerio">
      </div>

      <!-- nome-pastor -->
      <div class="col mt-3">
        <label class="form-label">Pastor responsável</label>
        <input type="text" class="form-control" name="pastor">
      </div>

      <!-- documento -->
      <div class="col mt-3">
        <label class="form-label">Documento / CPF / CNPJ</label>
        <input type="number" class="form-control" name="documento">
      </div>

      <!-- fundacao -->
      <div class="col mt-3">
        <label class="form-label">Data de fundação</label>
        <input type="date" class="form-control" name="fundacao">
      </div>

      <!-- divider -->
      <div class="dropdown-divider mt-4"></div>

      <!-- endereco -->
      <div class="col mt-3">
        <label class="form-label">Endereço</label>
        <input type="text" class="form-control" name="endereco">
      </div>

      <!-- Bairro -->
      <div class="col mt-3">
        <label class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro">
      </div>

      <!-- cidade -->
      <div class="col mt-3">
        <label class="form-label">Cidade</label>
        <input type="text" class="form-control" name="cidade">
      </div>

      <!-- estado -->
      <div class="col mt-3">
        <label class="form-label">Estado</label>
        <input type="text" class="form-control" name="estado">
      </div>

      <!-- cep -->
      <div class="col mt-3">
        <label class="form-label">Cep</label>
        <input type="number" class="form-control" name="cep">
      </div>

      <!-- pais -->
      <div class="col mt-3">
        <label class="form-label">Pais</label>
        <input type="text" class="form-control" name="pais">
      </div>

      <!-- telefone -->
      <div class="col mt-3">
        <label class="form-label">Telefone</label>
        <input type="number" class="form-control" name="telefone">
      </div>

      <!-- email -->
      <div class="col mt-3">
        <label class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email">
      </div>

      <!-- site -->
      <div class="col mt-3">
        <label class="form-label">Web site</label>
        <input type="text" class="form-control" name="site">
      </div>

      <!-- submit -->
      <button class="btn btn-primary w-100 mt-3 mb-5">Salvar</button>
    </form>
  </div>

  <!-- imagem de perfil -->
  <div class="col-sm-12 col-lg-4">
    <img src="<?= URL ?>public/img/avatar.svg" class="img-responsive">

    <form action="">
      <div class="mt-3">
        <label for="formFileSm" class="form-label">Alterar logo</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file" required>
      </div>
      <!-- submit -->
      <button class="btn btn-secondary w-100 mt-3 mb-5">Salvar</button>
    </form>
  </div>

  <!-- end row -->
</div>