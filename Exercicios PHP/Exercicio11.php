<html>
	<head>
		<meta charset = "utf-8">
		<title> Números entre dois valores </title>
	</head>
	<body>
		<center>
			<?php
				$num1 = $_GET['num1'];
				$num2 = $_GET['num2'];
			?>
			
			<!-- Dividi o bloco do PHP em 2 para poder exibir os números inseridos pelo o usuário
			para exibir usei a tag abreviada --!>
			<h2>Valores entre <?= $num1?> e <?= $num2 ?></h2>
			</br>
			
			<?php
				if($num1 > $num2){
					while($num1>$num2){
					echo "$num2 ";
					$num2++;
					}
				}elseif($num2 > $num1){
					while($num2>$num1){
						echo "$num1 ";
						$num1++;
					}
					}else{
						echo "<h2>Não há valores intermediários entre eles pois eles são iguais</h2>";
					}
			?>
		</center>
	</body>
</html>