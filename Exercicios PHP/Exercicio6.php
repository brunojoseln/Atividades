<html>
	<head>
		<meta charset="UTF-8">
		<title>Média</title>
	</head>
	<body>
		<center>
			<h3>
				<?php
				$nota1 = $_GET ['nota1'];
				$nota2 = $_GET ['nota2'];
				$nota3 = $_GET ['nota3'];
				$nota4 = $_GET ['nota4'];
				
				$resultado = $nota1 + $nota2 + $nota3 + $nota4;
				$resultado = $resultado/4;
				
				echo "A média do aluno é $resultado";
				?>
			</h3>
		</center>
	</body>
</html>