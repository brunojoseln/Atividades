<html>
	<head>
		<title>Resultado</title>
		<meta charset = "utf-8">
	</head>
	<body>
		<center>
			<h2>
				<?php
					$frase = $_GET['frase'];
					$cont = 0;
					
					$numL = strlen($frase);
					echo "A frase possui $numL letras (Contando com os espaços) </br></br>";
					
					while($cont < $numL){
						echo "$cont ";
						$cont++;
					}
					
				?>
			</h2>
		</center>
	</body>
</html>