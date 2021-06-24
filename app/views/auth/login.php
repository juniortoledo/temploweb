<?= $this->layout('auth/_template', ['title' => 'Login']); ?>

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
            <h5>Login</h5>
          </div>

          <!-- form -->
          <form class="form">
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
              <input class="form-check-input" type="checkbox" id="conectado">
              <label for="conectado">Permanecer conectado</label>
            </div>
            <!-- submit -->
            <div class="col mt-3">
              <button class="btn bg-dark text-white w-100 btn-login"></button>
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
        E-mail ou senha incorretos.
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<?= $this->start('css') ?>
<link rel="stylesheet" href="<?= URL ?>public/css/login.css">
<?= $this->stop() ?>

<?= $this->start('script') ?>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="module" src="<?= URL ?>public/js/login.js"></script>
<?= $this->stop() ?>