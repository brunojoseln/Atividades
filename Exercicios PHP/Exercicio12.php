<html>
	<head>
		<title>Resultado da multiplicação</title>
		<meta charset = "utf-8">
		
	</head>
	<body>
		<center>
			<h2>
				<?php
					$num1 = $_GET['num1'];
					$num2 = $_GET['num2'];
					$resultado = $num1* $num2;
					
					
					if($num1>$num2){
						$num = $num2;
						while($num2 < $num1){
							echo "$num +";
							$num2++;
						}		
					}
					if($num2>$num1){
						$num = $num1;
							while($num1 < $num2){
							echo "$num +";
							$num1++;
						}
					}

					echo  "</br></br> O resultado é $resultado";

				?>
			</h2>
		</center>
	</body>
</html>