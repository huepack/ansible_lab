<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>New PHP project</title>
</head>
<body>  <br>
	<form>
		<input type="text" name="num1" placeholder="Number 1">
		<input type="text" name="num2" placeholder="Number 2">
		<select name="Operator">
			<option>None</option>
			<option>Add</option>
			<option>Subtruct</option>
			<option>Multiply</option>
			<option>Divide</option>
		</select>
	</form>
        <br>
	<button type="Submit" name="Submit" value="Submit">Calculate</button>
<p>The answer is:</p>
<?php
	if (isset($_GET['Submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['Operator'];
		switch ($operator) {
			case "None":
				echo "You need to select method";
				break;
				case "Add":
				echo $result1 + $result2;
				break;
				case "Subtruct":
				echo $result1 - $result2;
				break;
				case "Multiply":
				echo $result1 * $result2;
				break;
				case "Divide":
				echo $result1 / $result2;
				break;
		}

	}
?>
</body>
</html>
