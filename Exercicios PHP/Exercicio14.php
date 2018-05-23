<html>
	<head>
		<title> Comparador de strings</title>
		<meta charset = "utf-8">
	</head>
	<body>
		<center>
			<h2>
				<?php
					$s1 = $_GET ['string'];
					$s2 = $_GET ['string2'];

					echo $s1 == $s2? "As frases são iguais" : "As frases não são iguais";
					
				?>
			</h2>
		</center>
	</body>
</html>