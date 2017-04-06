<?php require_once "functions.php"; ?>
<?php $db = open_db(); ?>

<?php 

	if(isset($_POST["login-button"]))
	{
		$usuario = $_POST["usuario"];
		$senha = md5($_POST["senha"]);
		
		if($db):
		
			$query = "SELECT * FROM profissionais WHERE usuario='$usuario' AND senha='$senha'";
			$run_query = mysqli_query($db, $query);
			$user = mysqli_fetch_array($run_query);
			$rows = mysqli_num_rows($run_query);

			if($rows > 0)
			{
				setcookie("nome",$user['nome']);
				header('location: home.php');
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
      echo  "<br>";
			
			include(FOOTER_TEMPLATE);
			
		}
		
?>