<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>

<br />
<br />

		<?php
		
			if(isset($_POST["action"]))
			{
		
				for($c = 1; $c < 16; $c++)
				{
					
					$rr[$c] = $_POST["p$c"];
					
				}
				
				$r = array_sum($rr);
				
				if($r >= 15 and $r <= 29.5)
				{
					
					echo "Resultado: <b>$r - Normal</b>.";
					
				}
				
				else
				{
					
					if($r >= 30 and $r <= 36.5)
					{
						
						echo "Resultado: <b>$r - Autismo leve/moderado</b>.";
						
					}
					
					else
					{
						
						echo "Resultado: <b>$r - Autismo grave</b>.";
								
					}
				}
			}
			
			else
			{
				
				echo "Erro. Por favor, <a href = 'avaliacao.php'>responda o questionário</a> antes de poder ver o resultado.";
				
			}
		
		?>

<br />
<br />
	<?php include(FOOTER_TEMPLATE); ?>
