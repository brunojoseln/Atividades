<html>
	<head>
		<meta charset="UTF-8">
		<title>Resultado</title>
	</head>
	<body>
		<center>
			<?php
				
				$num = ($_GET['num']);

				if ($num > 10) {
					$resul = "é maior ou igual a 10";
				}
				elseif($num == 10){
					$resul = "é igual a 10";
				}
				else{
					$resul = "é menor que 10";
				}


				echo "<h3>O valor digitado $resul</h3>";
			?>
		</center>
	</body>
</html>