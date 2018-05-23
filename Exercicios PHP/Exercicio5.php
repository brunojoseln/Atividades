<html>
	<head>
		<meta charset="UTF-8">
		<title>Ordenador</title>
	</head>
	<body>
		<center>
			<h3>
				<?php
				$num1 = $_GET ['num'];
				$num2 = $_GET ['num2'];
				
				if($num1 > $num2){
					echo "$num2 $num1";
				}
				else{
					echo "$num1 $num2";
				}

				?>
			</h3>
		</center>
	</body>
</html>
