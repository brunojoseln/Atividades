<html>
	<head>
		<title>Procura letra</title>
		<meta chaset = "utf-8">
	</head>
	<body>
		<center>
			<h3>
				<?php
					$frase = $_GET['frase'];
					$letra = $_GET['letra'];
					$tamanho = strlen($frase);
					$count = 0;
					
					for($i = 0 ;$i < $tamanho ;$i++){
						echo substr($frase,$i,1);
						$compara = substr($frase,$i,1);
							if($compara == $letra){
								$count++;
							}
					}

					echo "</br></br>A frase possui $count letras $letra"
				?>
			</h3>
		</center>
	</body>
	

</html>