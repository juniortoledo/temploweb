<?= $this->layout('dashboard/_template', ['title' => 'Editar']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">
      <a href="<?= URL ?>dashboard/sistema/usuarios">Usuários</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Editar</li>
  </ol>
</nav>

<!-- form -->
<form action="<?= URL ?>dashboard/sistema/usuarios/editar" method="post">
  <div class="row">
    <div class="col-sm-12 col-lg-6">
      <?php foreach($user as $item): ?>
      <input type="hidden" name="id" value="<?= $item->id_user ?>">
      <!-- nome-complero -->
      <div class="col mb-2">
        <label class="form-label">Nome completo</label>
        <input type="text" class="form-control" name="nome" required value="<?= $item->nome ?>">
      </div>

      <!-- nome-exibicao -->
      <div class="col mb-2">
        <label class="form-label">Nome exibição</label>
        <input type="text" class="form-control" name="nome-exibicao" required value="<?= $item->nome_exibicao ?>">
      </div>

      <!-- email -->
      <div class="col mb-2">
        <label class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email" required value="<?= $item->email ?>">
      </div>

      <!-- celular -->
      <div class="col mb-2">
        <label class="form-label">Celular</label>
        <input type="number" class="form-control" name="telefone" required value="<?= $item->telefone ?>">
      </div>

      <!-- sexo -->
      <div class="col mb-2">
        <label class="form-label">Sexo</label>
        <select class="form-select" aria-label="Default select example" name="sexo">
          <option value="masculino" <?php if($item->sexo === 'masculino') echo 'selected' ?>>Masculino</option>
          <option value="feminino" <?php if($item->sexo === 'feminino') echo 'selected' ?>>Feminino</option>
        </select>
      </div>

      <!-- status -->
      <div class="col mb-2">
        <label class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" name="status">
          <option value="ativo" <?php if($item->status === 'ativo') echo 'selected' ?>>Ativo</option>
          <option value="inativo" <?php if($item->status === 'inativo') echo 'selected' ?>>Inativo</option>
        </select>
      </div>
      <?php endforeach; ?>

      <!-- função -->
      <div class="col mb-2">
        <label class="form-label">Função</label>
        <select class="form-select" aria-label="Default select example" name="funcao">

          <?php foreach($funcao as $item): ?>
            <option 
              value="<?= $item->tipo ?>"
              <?php 
              foreach($user as $i) {
                if($i->funcao === $item->tipo) echo 'selected';
              } ?>
              >
              <?= $item->tipo ?>                
            </option>
          <?php endforeach; ?>

        </select>
      </div>


      <!-- end col -->
    </div>

    <!-- permissoes -->
    <?php foreach($permissoes as $item): ?>
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
            <input class=" ms-3 form-check-input" type="checkbox" id="secretaria-ver" name="secretaria-ver" 
            <?php if($item->secretaria_ver) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="secretaria-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="secretaria-editar" name="secretaria-editar" <?php if($item->secretaria_editar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="secretaria-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="secretaria-adicionar" name="secretaria-adicionar" <?php if($item->secretaria_adicionar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="secretaria-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="secretaria-remover" name="secretaria-remover" <?php if($item->secretaria_remover) echo 'checked' ?>>
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
            <input class=" ms-3 form-check-input" type="checkbox" id="usuarios-ver" name="usuarios-ver" 
            <?php if($item->usuarios_ver) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="usuarios-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="usuarios-editar" name="usuarios-editar" 
            <?php if($item->usuarios_editar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="usuarios-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="usuarios-adicionar" name="usuarios-adicionar" <?php if($item->usuarios_adicionar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="usuarios-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="usuarios-remover" name="usuarios-remover" 
            <?php if($item->usuarios_remover) echo 'checked' ?>>
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
            <input class=" ms-3 form-check-input" type="checkbox" id="celula-ver" name="celula-ver" 
            <?php if($item->celula_ver) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="celula-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="celula-editar" name="celula-editar" 
            <?php if($item->celula_editar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="celula-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="celula-adicionar" name="celula-adicionar" 
            <?php if($item->celula_adicionar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="celula-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="celula-remover" name="celula-remover" 
            <?php if($item->celula_remover) echo 'checked' ?>>
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
            <input class=" ms-3 form-check-input" type="checkbox" id="config-ver" name="config-ver" 
            <?php if($item->config_ver) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="config-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="config-editar" name="config-editar" 
            <?php if($item->config_editar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="config-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="config-adicionar" name="config-adicionar" 
            <?php if($item->config_adicionar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="config-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="config-remover" name="config-remover" 
            <?php if($item->config_remover) echo 'checked' ?>>
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
            <input class=" ms-3 form-check-input" type="checkbox" id="financeiro-ver" name="financeiro-ver" 
            <?php if($item->financeiro_ver) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="financeiro-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="financeiro-editar" name="financeiro-editar" <?php if($item->financeiro_editar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="financeiro-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="financeiro-adicionar" name="financeiro-adicionar" <?php if($item->financeiro_adicionar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="financeiro-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="financeiro-remover" name="financeiro-remover" <?php if($item->financeiro_remover) echo 'checked' ?>>
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
            <input class=" ms-3 form-check-input" type="checkbox" id="patrimonio-ver" name="patrimonio-ver" 
            <?php if($item->patrimonio_ver) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="patrimonio-ver">
              Ver
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="patrimonio-editar" name="patrimonio-editar" <?php if($item->patrimonio_editar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="patrimonio-editar">
              Editar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="patrimonio-adicionar" name="patrimonio-adicionar" <?php if($item->patrimonio_adicionar) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="patrimonio-adicionar">
              Adicionar
            </label>
          </div>
          <div class="form-check">
            <input class=" ms-3 form-check-input" type="checkbox" id="patrimonio-remover" name="patrimonio-remover" <?php if($item->patrimonio_remover) echo 'checked' ?>>
            <label class="ms-2 form-check-label" for="patrimonio-remover">
              Remover
            </label>
          </div>
          <!-- end patrimonio -->
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- submit -->
    <div class="col-12">
      <button class="btn btn-primary w-100 mt-3 mb-5">Salvar</button>
    </div>
    <!-- end row -->
  </div>
</form>

