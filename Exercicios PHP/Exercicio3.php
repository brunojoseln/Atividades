<html>
	<head>
		<meta charset="UTF-8">
		<title> Nulo, Positivo ou negativo?</title>
	</head>
	<body>
		<center>
			<h1>
				<?php
				
				$num = ($_GET['num']);
				
				if($num > 0 ){
					echo "$num é positivo";
				}
				elseif($num == 0){
					echo "$num é nulo";
				}
				else{
					 echo "$num é negativo";
				}
				?>
			</h1>
		</center>
	</body>
</html>