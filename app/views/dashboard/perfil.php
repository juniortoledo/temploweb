<?= $this->layout('dashboard/_template', ['title' => 'Perfil']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
  </ol>
</nav>

<div class="row">
  <!-- form -->
  <div class="col-sm-12 col-lg-8">
    <form action="<?= URL ?>dashboard/perfil" method="post">
      <!-- nome-igreja -->
      <div class="col">
        <label class="form-label"><?= $lang['perfil-1'] ?></label>
        <input type="text" class="form-control" name="nome-igreja" value="<?= $nome_igreja ?>">
      </div>

      <!-- nome-ministerio -->
      <div class="col mt-3">
        <label class="form-label">Ministério</label>
        <input type="text" class="form-control" name="ministerio" value="<?= $ministerio ?>">
      </div>

      <!-- nome-pastor -->
      <div class="col mt-3">
        <label class="form-label">Pastor responsável</label>
        <input type="text" class="form-control" name="pastor" value="<?= $pastor ?>">
      </div>

      <!-- documento -->
      <div class="col mt-3">
        <label class="form-label">Documento / CPF / CNPJ</label>
        <input type="number" class="form-control" name="documento" value="<?= $documento ?>">
      </div>

      <!-- fundacao -->
      <div class="col mt-3">
        <label class="form-label">Data de fundação</label>
        <input type="date" class="form-control" name="fundacao" value="<?= $fundacao ?>">
      </div>

      <!-- divider -->
      <div class="dropdown-divider mt-4"></div>

      <!-- endereco -->
      <div class="col mt-3">
        <label class="form-label">Endereço</label>
        <input type="text" class="form-control" name="endereco" value="<?= $endereco ?>">
      </div>

      <!-- Bairro -->
      <div class="col mt-3">
        <label class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro" value="<?= $bairro ?>">
      </div>

      <!-- cidade -->
      <div class="col mt-3">
        <label class="form-label">Cidade</label>
        <input type="text" class="form-control" name="cidade" value="<?= $cidade ?>">
      </div>

      <!-- estado -->
      <div class="col mt-3">
        <label class="form-label">Estado</label>
        <input type="text" class="form-control" name="estado" value="<?= $estado ?>">
      </div>

      <!-- cep -->
      <div class="col mt-3">
        <label class="form-label">Cep</label>
        <input type="number" class="form-control" name="cep" value="<?= $cep ?>">
      </div>

      <!-- pais -->
      <div class="col mt-3">
        <label class="form-label">Pais</label>
        <input type="text" class="form-control" name="pais" value="<?= $pais ?>">
      </div>

      <!-- telefone -->
      <div class="col mt-3">
        <label class="form-label">Telefone</label>
        <input type="number" class="form-control" name="telefone" value="<?= $telefone ?>">
      </div>

      <!-- email -->
      <div class="col mt-3">
        <label class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email" value="<?= $email ?>">
      </div>

      <!-- site -->
      <div class="col mt-3">
        <label class="form-label">Web site</label>
        <input type="text" class="form-control" name="site" value="<?= $site ?>">
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
        <label for="formFileSm" class="form-label">Alterar imagem de perfil</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file" required>
      </div>
      <!-- submit -->
      <button class="btn btn-secondary w-100 mt-3 mb-5">Salvar</button>
    </form>
  </div>

  <!-- end row -->
</div>