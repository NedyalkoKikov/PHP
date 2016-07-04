<!OCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form>
	<div>Name:</div><input type="text" name="personName"/>
	<div>Age:</div><input type ="number" name = "personAge"/>
	<div>Town:</div>
	<select name = "townID">
		<option value="10">Sofia</option>
		<option value="20">Varna</option>
		<option value="30">Plovdiv</option>
	</select>
	<div><input type="submit"/> </div>
</form>
<?php var_dump($_GET)
?>
</body>
</html>