<html>
	<head>
		<meta charset="UTF-8">
		<title>Resultado IMC</title>
	</head>
	<body>
		<center>
			<h3>
				<?php
				$sexo = $_GET ['sexo'];
				$altura = ($_GET ['altura']);
				$pesoIdeal = (72.7* $altura) - 58;
				
				if ($sexo == "m"){
					$pesoIdeal = (72.7* $altura) - 58;
				}
				elseif ($sexo == "f"){
					$pesoIdeal = (62.1* $altura) - 44.7;
					}
				echo "O peso ideal para sua altura é $pesoIdeal";
				?>
			</h3>
		</center>
	</body>
</html>