<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php

	function open_db(){
		try{				
			/*Usando conexão já estabelecida no arquivo database.php*/
			$connection = open_database();
			return $connection;
		}
		catch(Exception $e){
			echo $e->getMessage();
			return null;
		}
	}
	
	function close_db($connection){
		try{
			mysqli_close($connection);
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
	
	
	function query($db, $table, $usuario, $senha){	
		$query = "SELECT * FROM profissionais WHERE usuario = " . $usuario . " AND senha = " . $senha;
		$run_query = mysqli_query($db, $query);
		$rows = mysqli_num_rows($run_query);
		
		if($rows > 0){	
			$message = "<b>Login success</b> !";
		}
		
		else{
			$message = "<b>Login failure</b> !";
		}
		
		return $message;
	}

?>
