<?php require_once "functions.php"; ?>
<?php $db = open_db(); ?>

<html>
	<head>
		<title>Login result</title>
	</head>
	<body>
		<?php
		
			//naosei' OR '2=2';#
		
			if(isset($_POST["submit_button"]))
			{
				
				$table = "profissionais";
				$username = $_POST["usuario"];
				$password = $_POST["senha"];
				
				if($db):
				
					//query($db, $table, $username, $password);
					
					$query = "SELECT * FROM $table WHERE usuario='$username' AND senha='$password'";
					$run_query = mysqli_query($db, $query);
					$rows = mysqli_num_rows($run_query);
					
					if($rows > 0)
					{
						
						echo "<b>Login success ! </b>";
						
					}
					
					else
					{
						
						echo "<b>Login failure :/ </b><br /><br /><a href = 'login_form.html'>Try again</a>"; 
						
					}
					
				else:
				
					echo "<b>ERROR</b>: MySQL couldn't establish a connection";
					
				endif;
				
			}
			
			else
			{
				
				echo "Please, <a href = 'login_form.html'>login</a>.";
				
			}
		
		?>
	</body>
</html>
