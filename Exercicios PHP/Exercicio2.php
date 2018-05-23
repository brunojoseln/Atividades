<html>
	<head>
		<meta charset="UTF-8">
		<title>Comparação</title>
	</head>
	<body>
		<center>
			<?php
				
				$num = ($_GET['num']);

				if ($num >= 10) {
					$resul = "é maior ou igual a 10";
				}
				else{
					$resul = "é menor que 10";
				}


				echo "<h3>O valor $num $resul</h3>";
			?>
		</center>
	</body>
</html>