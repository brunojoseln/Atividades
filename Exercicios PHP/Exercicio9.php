<html>
	<head>
		<title>Números</title>
	</head>
	<body>
		<?php
			$num = $_GET['num'];
			$num2 = 0;
			
			while($num2 < $num  ){
				echo $num2." ";
				$num2++;
			}
			
		?>
	</body>

</html>