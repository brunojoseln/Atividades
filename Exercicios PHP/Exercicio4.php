<html>
	<head>
		<meta charset="UTF-8">
		<title>Comparador</title>
	</head>
	<body>
		<center>
			<h3>
				<?php
				$a = ($_GET ['a']);
				$b = ($_GET ['b']);
				$c = ($_GET ['c']);
				$d = ($_GET ['d']);
				
				$soma = ($a + $c);
				$multi = ($b * $d);
				
				if($soma > $multi){
					echo "$a + $c é maior que $b x $d";
				}
				elseif($soma == $multi){
					echo "$a + $c é igual a $b x $d";
				}
				else{
					echo " $a + $c é menor que $b x $d ";
				}
				
				?>
			</h3>
		</center>
	</body>
</html>