<?= $this->layout('dashboard/_template', ['title' => 'Cadastrar']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">
      <a href="<?= URL ?>dashboard/sistema/usuarios">Usuários</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
  </ol>
</nav>

<nav class="nav nav-tabs nav-stacked">
  <a class="nav-link active" href="#">Active link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" href="#">Disabled link</a>
</nav>

<!-- form -->
<form action="<?= URL ?>dashboard/sistema/usuarios/cadastrar" method="post">
  <div class="row">
    <div class="col-sm-12 col-lg-6">

      <!-- nome-complero -->
      <div class="col mb-2">
        <label class="form-label">Nome completo</label>
        <input type="text" class="form-control" name="nome" required>
      </div>

      <!-- nome-exibicao -->
      <div class="col mb-2">
        <label class="form-label">Nome exibição</label>
        <input type="text" class="form-control" name="nome-exibicao" required>
      </div>

      <!-- email -->
      <div class="col mb-2">
        <label class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email" required>
      </div>

      <!-- senha -->
      <div class="col mb-2">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" name="password" required>
      </div>

      <!-- celular -->
      <div class="col mb-2">
        <label class="form-label">Celular</label>
        <input type="number" class="form-control" name="telefone" required>
      </div>

      <!-- sexo -->
      <div class="col mb-2">
        <label class="form-label">Sexo</label>
        <select class="form-select" aria-label="Default select example" name="sexo">
          <option selected>Selecione:</option>
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>
        </select>
      </div>

      <!-- status -->
      <div class="col mb-2">
        <label class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" name="status">
          <option selected>Ativo / Inativo</option>
          <option value="ativo">Ativo</option>
          <option value="inativo">Inativo</option>
        </select>
      </div>

      <!-- função -->
      <div class="col mb-2">
        <label class="form-label">Função</label>
        <select class="form-select" aria-label="Default select example" name="funcao">
          <option selected>Selecione:</option>

          <?php foreach($funcao as $item): ?>
            <option value="<?= $item->tipo ?>"><?= $item->tipo ?></option>
          <?php endforeach; ?>

        </select>
      </div>

      <!-- Data de cadastro -->
      <div class="col mb-2">
        <label class="form-label">Data de cadastro</label>
        <input type="text" class="form-control" value="<?= date('d-m-Y') ?>" disabled>
        <input type="hidden" name="data-cadastro" value="<?= date('d-m-Y') ?>">
      </div>
      <!-- end col -->
    </div>

    <!-- permissoes -->
    <div class="col-sm-12 col-lg-6">
      <div class="col mb-3"><h6>Permissões</h6></div>

      <div class="row">

        <!-- Secretaria -->
        <div class="col-6 mb-2">
          <div class="form-check">
            <label class="form-check-label">
              Secretaria
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="secretaria-ver" name="secretaria-ver" checked="false">
            <label class="ms-2 form-check-label" for="secretaria-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="secretaria-editar" name="secretaria-editar" checked="false">
            <label class="ms-2 form-check-label" for="secretaria-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="secretaria-adicionar" name="secretaria-adicionar" checked="false">
            <label class="ms-2 form-check-label" for="secretaria-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="secretaria-remover" name="secretaria-remover" checked="false">
            <label class="ms-2 form-check-label" for="secretaria-remover">
              Remover
            </label>
          </div>
          <!-- end secretaria -->
        </div>

        <!-- Usuários -->
        <div class="col-6 mb-2">
          <div class="form-check">
            <label class="form-check-label">
              Usuários
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="usuarios-ver" name="usuarios-ver" checked="false">
            <label class="ms-2 form-check-label" for="usuarios-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="usuarios-editar" name="usuarios-editar" checked="false">
            <label class="ms-2 form-check-label" for="usuarios-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="usuarios-adicionar" name="usuarios-adicionar" checked="false">
            <label class="ms-2 form-check-label" for="usuarios-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="usuarios-remover" name="usuarios-remover" checked="false">
            <label class="ms-2 form-check-label" for="usuarios-remover">
              Remover
            </label>
          </div>
          <!-- end usuarios -->
        </div>

        <!-- Células -->
        <div class="col-6 mb-2">
          <div class="form-check">
            <label class="form-check-label">
              Células
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="celula-ver" name="celula-ver" checked="false">
            <label class="ms-2 form-check-label" for="celula-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="celula-editar" name="celula-editar" checked="false">
            <label class="ms-2 form-check-label" for="celula-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="celula-adicionar" name="celula-adicionar" checked="false">
            <label class="ms-2 form-check-label" for="celula-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="celula-remover" name="celula-remover" checked="false">
            <label class="ms-2 form-check-label" for="celula-remover">
              Remover
            </label>
          </div>
          <!-- end celulas -->
        </div>

        <!-- Configurações -->
        <div class="col-6 mb-2">
          <div class="form-check">
            <label class="form-check-label">
              Configurações
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="config-ver" name="config-ver" checked="false">
            <label class="ms-2 form-check-label" for="config-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="config-editar" name="config-editar" checked="false">
            <label class="ms-2 form-check-label" for="config-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="config-adicionar" name="config-adicionar" checked="false">
            <label class="ms-2 form-check-label" for="config-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="config-remover" name="config-remover" checked="false">
            <label class="ms-2 form-check-label" for="config-remover">
              Remover
            </label>
          </div>
          <!-- end config -->
        </div>

        <!-- Financeiro -->
        <div class="col-6 mb-2">
          <div class="form-check">
            <label class="form-check-label">
              Financeiro
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="financeiro-ver" name="financeiro-ver" checked="false">
            <label class="ms-2 form-check-label" for="financeiro-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="financeiro-editar" name="financeiro-editar" checked="false">
            <label class="ms-2 form-check-label" for="financeiro-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="financeiro-adicionar" name="financeiro-adicionar" checked="false">
            <label class="ms-2 form-check-label" for="financeiro-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="financeiro-remover" name="financeiro-remover" checked="false">
            <label class="ms-2 form-check-label" for="financeiro-remover">
              Remover
            </label>
          </div>
          <!-- end financeiro -->
        </div>

        <!-- Patrimônio -->
        <div class="col-6 mb-2">
          <div class="form-check">
            <label class="form-check-label">
              Patrimônio
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="patrimonio-ver" name="patrimonio-ver" checked="false">
            <label class="ms-2 form-check-label" for="patrimonio-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="patrimonio-editar" name="patrimonio-editar" checked="false">
            <label class="ms-2 form-check-label" for="patrimonio-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="patrimonio-adicionar" name="patrimonio-adicionar" checked="false">
            <label class="ms-2 form-check-label" for="patrimonio-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="patrimonio-remover" name="patrimonio-remover" checked="false">
            <label class="ms-2 form-check-label" for="patrimonio-remover">
              Remover
            </label>
          </div>
          <!-- end patrimonio -->
        </div>
      </div>
    </div>

    <!-- submit -->
    <div class="col-12">
      <button class="btn btn-primary w-100 mt-3 mb-5">Salvar</button>
    </div>
    <!-- end row -->
  </div>
</form>

<?php 

// CREATE TABLE permissoes(
//   id int AUTO_INCREMENT PRIMARY KEY,
//   id_user int not null,

//   secretaria_ver varchar(10),
//   secretaria_editar varchar(10),
//   secretaria_adicionar varchar(10),
//   secretaria_remover varchar(10),

//   usuarios_ver varchar(10),
//   usuarios_editar varchar(10),
//   usuarios_adicionar varchar(10),
//   usuarios_remover varchar(10),

//   celula_ver varchar(10),
//   celula_editar varchar(10),
//   celula_adicionar varchar(10),
//   celula_remover varchar(10),

//   config_ver varchar(10),
//   config_editar varchar(10),
//   config_adicionar varchar(10),
//   config_remover varchar(10),

//   financeiro_ver varchar(10),
//   financeiro_editar varchar(10),
//   financeiro_adicionar varchar(10),
//   financeiro_remover varchar(10),

//   patrimonio_ver varchar(10),
//   patrimonio_editar varchar(10),
//   patrimonio_adicionar varchar(10),
//   patrimonio_remover varchar(10)
// );

?>