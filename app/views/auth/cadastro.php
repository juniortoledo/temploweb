<?= $this->layout('auth/_template', ['title' => 'Cadastro']); ?>

<div class="box d-flex justify-content-center align-items-center">
  <div class="card shadow">
    <div class="row">
      <!-- thumb -->
      <div class="col-5 col-thumb">
        <img src="<?= URL ?>public/img/login.jpg" class="thumb">
      </div>

      <!-- content -->
      <div class="col mt-5 mb-5">
        <div class="container-fluid">
          <!-- logo -->
          <div class="col">
            <a href="<?= URL ?>"><img src="<?= URL ?>public/img/logo-3.png" class="logo"></a>
          </div>

          <!-- title -->
          <div class="col mt-2">
            <h5>Crie sua conta</h5>
          </div>

          <!-- form -->
          <form class="form">
            <!-- nome -->
            <div class="col mt-3">
              <input type="text" class="form-control" id="nome" placeholder="Nome" required>
            </div>
            <!-- email -->
            <div class="col mt-3">
              <input type="email" class="form-control" id="email" placeholder="E-mail" required>
            </div>
            <!-- senha -->
            <div class="col mt-3">
              <input type="password" class="form-control" id="senha" placeholder="Senha" required>
            </div>
            <!-- termos de uso -->
            <div class="col mt-3">
              <input class="form-check-input" type="checkbox" id="termos" required>
              <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="ms-2" style="cursor: pointer;">Termos de uso</a>
            </div>
            <!-- submit -->
            <div class="col mt-3">
              <button class="btn bg-dark text-white w-100 btn-cadastro"></button>
            </div>
          </form>
        </div>

        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
  </div>
</div>

<!-- toast -->
<div class="position-fixed bottom-0 end-0 p-3">
  <div class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        O e-mail informado já existe.
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Termos de uso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Quas architecto totam dolorum maxime alias rem placeat sed laborum commodi repellendus
          repudiandae fuga ducimus deleniti, eos numquam aliquam autem nisi molestiae.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<?= $this->start('css') ?>
<link rel="stylesheet" href="<?= URL ?>public/css/register.css">
<?= $this->stop() ?>

<?= $this->start('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="module" src="<?= URL ?>public/js/register.js"></script>
<?= $this->stop() ?>