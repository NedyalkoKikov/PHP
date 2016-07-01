<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>phpFunction-sample</title>
</head>
<body>
	<head>
		<?php
		$num1 = 10;
		$num2 = 12;
		function sumNums(){
			global $num1,$num2;
			$result = $num1 + $num2;
			echo "<h1><p>Result = $result</p></h1>";
		}
		sumNums();
		?>
	</head>
</body>
</html>