<?php require_once "functions.php"; ?>
<?php $db = open_db(); ?>

<?php 

if(isset($_POST["login-button"])){
	$usuario = $_POST["usuario"];
	$senha = md5($_POST["senha"]);
	
	if($db):
	
		$query = "SELECT * FROM profissionais WHERE usuario='$usuario' AND senha='$senha'";
		$run_query = mysqli_query($db, $query);
		$user = mysqli_fetch_array($run_query);
		$rows = mysqli_num_rows($run_query);

		if($rows > 0){
			setcookie("id_profissional",$user['id']);
			setcookie("nome",$user['nome']);
			setcookie("nivel_acesso",$user['nivelacesso']);
			setcookie("id_profissao",$user['id_profissao']);
			header('location: home.php');
		}
		
		else{
			include(HEADER_TEMPLATE);
			
			echo  "<br>";
			echo "<div class='row center'><p class='center'>Usuário e/ou senha inválidos.</p></div>
			<div class='row center'>
			    <a class='btn waves-effect waves-light main-color' href='/'>Voltar</a>
      		</div>";
      echo  "<br>";
			
			include(FOOTER_TEMPLATE);
		}

		else:

			include(HEADER_TEMPLATE);
			
			echo  "<br>";
			echo "<div class='row center'><h5 class='center red-text'><b>ERRO:</b> Não foi possível conectar ao Banco de Dados!</h5></div>";
      echo  "<br>";
			
			include(FOOTER_TEMPLATE);

		endif;
	}

else{
	include(HEADER_TEMPLATE);
	
	echo  "<br>";
	echo "<div class='row center'><p class='center'>Você não tem permissão para visualizar esta página.</p></div>
	<div class='row center'>
	    <a class='btn waves-effect waves-light main-color' href='/'>Fazer login</a>
  		</div>";
  echo  "<br>";
	
	include(FOOTER_TEMPLATE);
}
		
?>