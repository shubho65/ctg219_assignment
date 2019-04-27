<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<body>
<form method="post" attribute="post" action="">
<p>First Value:<br/>
<input type="text" id="first" name="first"></p>
<p>Second Value:<br/>
<input type="text" id="second" name="second"></p>

<p></p>
<button type="submit" name="add" id="add" value="add">+</button>
<button type="submit" name="subtract" id="subtract" value="subtract">-</button>
<button type="submit" name="times" id="times" value="times">*</button>
<button type="submit" name="division" id="division" value="division">/</button>
<br/>
</form>

<?php
if(isset($_POST)){
	
$first = $_POST['first'] + 0;
$second= $_POST['second'] + 0;
}
if(isset($_POST['add'])){
	add($first,$second);
}
if(isset($_POST['subtract'])){
	subtract($first,$second);
}
if(isset($_POST['times'])){
	times($first,$second);
}
if(isset($_POST['division'])){
	division($first,$second);
}
function add ($num1, $num2){
	$res = $num1 + $num2;
	echo "Thehe sum of two numbers:".$res;
}
function subtract ($num1, $num2){
	$res = $num1 - $num2;
	echo "The subtraction of two numbers:".$res;
}
function times ($num1, $num2){
	$res = $num1 * $num2;
	echo "The multiplication of two numbers:".$res;
}
function division ($num1, $num2){
	$res = $num1 / $num2;
	echo "The division of two numbers:".$res;
}
?>
</body>
</html>