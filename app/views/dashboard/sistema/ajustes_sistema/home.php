<?= $this->layout('dashboard/_template', ['title' => 'Ajustes do Sistema']) ?>

<!-- breadcrumb -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page">Ajustes do Sistema</li>
	</ol>
</nav>

<?php foreach($ajustes as $item): ?>
<div class="row">
	<div class="col">
		<h5>Patrimônio</h5>
		<hr class="dropdown-divider">
	</div>

	<form action="<?=URL?>dashboard/sistema/ajustes/patrimonio" method="post" class="mt-3 row">
		<!-- etiquetas -->
		<div class="col-sm-12 col-md-4 mb-2">
			<label class="form-label">Configurar etiquetas</label>
			<select class="form-select" aria-label="Default select example" name="etiquetas">
				<option <?= $item->patrimonio_etiqueta === '40x13' ? 'selected' : '' ?> value="40x13">40x13</option>
				<option <?= $item->patrimonio_etiqueta === '40x20' ? 'selected' : '' ?> value="40x20">40x20</option>
				<option <?= $item->patrimonio_etiqueta === '50x20' ? 'selected' : '' ?> value="50x20">50x20</option>
				<option <?= $item->patrimonio_etiqueta === '80x35' ? 'selected' : '' ?> value="80x35">80x35</option>
				<option <?= $item->patrimonio_etiqueta === '100x50' ? 'selected' : '' ?> value="100x50">100x50</option>
			</select>
		</div>

		<!-- formato -->
		<div class="col-sm-12 col-md-4 mb-2">
			<label class="form-label">Formato</label>
			<select class="form-select" aria-label="Default select example" name="formato">
				<option <?= $item->patrimonio_formato === 'PDF' ? 'selected': '' ?> value="PDF">PDF</option>
				<option <?= $item->patrimonio_formato === 'RTF' ? 'selected': '' ?> value="RTF">RTF</option>
			</select>
		</div>

		<!-- Papel -->
		<div class="col-sm-12 col-md-4 mb-2">
			<label class="form-label">Papel</label>
			<select class="form-select" aria-label="Default select example" name="papel">
				<option <?= $item->patrimonio_papel === 'Carta' ? 'selected' : '' ?> value="Carta">Carta</option>
				<option <?= $item->patrimonio_papel === 'A4' ? 'selected' : '' ?> value="A4">A4</option>
			</select>
		</div>

		<!-- submit -->
		<div class="col d-flex justify-content-end">
			<button class="btn btn-primary">Salvar</button>
		</div>

	</form>

	<!-- end row -->
</div>

<div class="row">

	<div class="col">
		<h5>Formato data</h5>
		<hr class="dropdown-divider">
	</div>

	<form action="<?=URL?>dashboard/sistema/ajustes/data" method="post" class="mt-3 row">
		<!-- formato data -->
		<div class="col-sm-12 col-md-4 mb-2">
			<label class="form-label">Formato</label>
			<select class="form-select" aria-label="Default select example" name="formato">
				<option <?= $item->data_formato === 'DD/MM/YYYY' ? 'selected' : '' ?> value="DD/MM/YYYY">DD/MM/YYYY</option>
				<option <?= $item->data_formato === 'MM/DD/YYYY' ? 'selected' : '' ?> value="MM/DD/YYYY">MM/DD/YYYY</option>
			</select>
		</div>

		<!-- submit -->
		<div class="col-12 d-flex justify-content-end">
			<button class="btn btn-primary">Salvar</button>
		</div>

	</form>

	<!-- end row -->
</div>

<div class="row mb-5">

	<div class="col">
		<h5>Formato moeda</h5>
		<hr class="dropdown-divider">
	</div>

	<form action="<?=URL?>dashboard/sistema/ajustes/moeda" method="post" class="mt-3 row">
		<!-- formato moeda -->
		<div class="col-sm-12 col-md-4 mb-2">
			<label class="form-label">Moeda</label>
			<select class="form-select" aria-label="Default select example" name="moeda">
				<option <?= $item->moeda_formato === 'R$' ? 'selected' : '' ?> value="R$">Real Brasileiro (R$)</option>
				<option <?= $item->moeda_formato === '$' ? 'selected' : '' ?> value="$">Peso Argentino ($)</option>
				<option <?= $item->moeda_formato === '$' ? 'selected' : '' ?> value="$">Peso Chileno ($)</option>
			</select>
		</div>

		<!-- submit -->
		<div class="col-12 d-flex justify-content-end">
			<button class="btn btn-primary">Salvar</button>
		</div>

	</form>

	<!-- end row -->
</div>

<?php endforeach; ?>