<?php 

setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portugues");
?>

<!DOCTYPE html>
 	<head>
 		
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 		<script type="text/javascript">
	
			$(document).ready(function(){
				$("#pagamento").hide();

			});

		</script>
 		
<?php		

if(isset($_POST['calendar'])):

$dateNow = strtotime("now");
$dateLimit = strtotime("7 days");
$dateSelected = strtotime($_POST['calendar']);
	

?>

<?php
	if($dateSelected >= $dateLimit):
?>

	<script type="text/javascript">
	
			$(document).ready(function(){
				$("#pagamento").show();

			});

	</script>

<?php endif; ?>


<?php endif; ?>

 		<title>Calendar</title>
 	</head>
 	<body>
 		<form method="post" action="">
 			<p>
 				<label>Data de Retirada:</label>
 				<input type="date" name="calendar" value="<?php 
 				if(!isset($dateSelected)):
 					echo date('Y-m-d');
 				else:	 
 					echo date('Y-m-d',$dateSelected); 
 				endif;?>">
 			</p>
 			
 			<div id="pagamento">
 			<p>
 				<select>
 					<option name="boleto">Boleto</option>
 				
 					<option name="cartao">Cartão de Crédito</option>
 				</select>	
 			</p>
 			</div>

 			<p>
 				<input type="submit" value="Validar Data">
 			</p>

 		</form>
 	</body>
 </html>