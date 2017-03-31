<?php require_once "functions.php"; ?>
<?php $db = open_db(); ?>

<?php 

	if(isset($_POST["submit_button"]))
	{
		
		$username = $_POST["usuario"];
		$password = $_POST["senha"];
		
		if($db):
		
			$query = "SELECT * FROM profissionais WHERE usuario='$username' AND senha='$password'";
			$run_query = mysqli_query($db, $query);
			$rows = mysqli_num_rows($run_query);
			
			if($rows > 0)
			{

				include(HEADER_TEMPLATE);
				echo
				"
					<h1>Sistema de Apoio ao Diagnóstico de Autismo</h1>
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
				
				";
				
				include(FOOTER_TEMPLATE);
			}
			
			else
			{
				
				include(HEADER_TEMPLATE);
				
				echo
				"
				<h1>Sistema de Apoio ao Diagnóstico de Autismo</h1>
				<hr />
				<b>Erro: usuário e/ou senha incorretos. <a href = 'index.php'>Tente novamente</a></b>
				<br />
				";
				
				include(FOOTER_TEMPLATE);
			}
			
			else:
			
				echo 
				"
					<div class='alert alert-danger' role='alert'>
						<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
					</div>
					
				";
				
			endif;
		
		}
	
		else
		{
			include(HEADER_TEMPLATE);
			
			echo  "<br/>";
			echo "<div class='row center'><p class='center'>Você não tem permissão para visualizar esta página.</p></div>
			<div class='row center'>
			    <a class='btn waves-effect waves-light main-color' href='index.php'>Fazer login</a>
      		</div>";
			
			include(FOOTER_TEMPLATE);
			
		}
		
?>
