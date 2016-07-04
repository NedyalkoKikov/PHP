<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Number of words</title>
</head>
<body>
	<h1>
		<?php
		$word = "Hello world";
		echo "$word";
		echo "<h2> number of words</h2> = " . str_word_count($word);
		?>
	</h1>
</body>
</html>