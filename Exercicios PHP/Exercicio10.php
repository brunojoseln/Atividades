<html>
	<head>
		<title>Resultado</title>
		<meta charset ="utf-8">
		
	</head>
	<body>
		<center>
			<h2>
				<?php
					$num = $_GET['num'];
					$fatorial = 1;
					
					while($num > 1){
						$fatorial *= $num;
						$num--;
						echo "*"."$num";
					}

					echo  "</br></br> O resultado é $fatorial";

				?>
			</h2>
		</center>
	</body>
</html>