<html>
	<head>
		<meta charset="UTF-8"/>
		<title> Cálculo de salário</title>
	</head>
	<body>
		<center>
			<?php
				$sal = $_GET["sal"];
				$n2 = 0;
				$resul = 0;
				
				echo "<h2>Valor recebido : $sal</h2>";
				(($sal>300)? $n2=$sal*0.3 : $n2=$sal*0.5);
				$resul = $sal + $n2;
				echo "<h2>O salário com reajuste é : $resul</h2>";
			?>
		</center>
	</body>
</html>