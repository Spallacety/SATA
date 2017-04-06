<?php include(HEADER_TEMPLATE); ?>

<h1>Sistema de Apoio ao Diagnóstico de Autismo</h1>
<h2>olá, <?php echo $login_cookie = $_COOKIE['login']?>!</h2>
<hr />
<div class='row'>
	<div class='col-xs-6 col-sm-3 col-md-2'>
		<a href='cadastros/pacientes/add.php' class='btn btn-primary'>
			<div class='row'>
				<div class='col-xs-12 text-center'>
					<i class='fa fa-plus fa-5x'></i>
				</div>
				<div class='col-xs-12 text-center'>
					<p>Novo Paciente</p>
				</div>
			</div>
		</a>
	</div>

	<div class='col-xs-6 col-sm-3 col-md-2'>
		<a href='cadastros/pacientes/index.php' class='btn btn-default'>
			<div class='row'>
				<div class='col-xs-12 text-center'>
					<i class='fa fa-user fa-5x'></i>
				</div>
				<div class='col-xs-12 text-center'>
					<p>Pacientes</p>
				</div>
			</div>
		</a>
	</div>
</div>

</br>

<div class='row'>
	<div class='col-xs-6 col-sm-3 col-md-2'>
		<a href='cadastros/profissionais/add.php' class='btn btn-primary'>
			<div class='row'>
				<div class='col-xs-12 text-center'>
					<i class='fa fa-plus fa-5x'></i>
				</div>
				<div class='col-xs-12 text-center'>
					<p>Novo Profissional</p>
				</div>
			</div>
		</a>
	</div>

	<div class='col-xs-6 col-sm-3 col-md-2'>
		<a href='cadastros/profissionais/index.php' class='btn btn-default'>
			<div class='row'>
				<div class='col-xs-12 text-center'>
					<i class='fa fa-user fa-5x'></i>
				</div>
				<div class='col-xs-12 text-center'>
					<p>Profissionais</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
