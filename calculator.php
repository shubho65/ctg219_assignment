//Make two functions that sum and subtract two numbers and print it.
<?php
function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
         }
         
       addFunction(10, 20);
function subFunction($a,$b){
	if($a>$b)
	{
		$result= $a-$b;
	}
	else $result= $b-$a;
	
	echo "Subtraction of the two numbers is : $result";
}
 
 echo "<br>";
 subFunction(4,7);

?>

//Take a number and print it reversely till 0.
<?php

 $num=10;

while($num>=0){
	echo "$num";
	echo "<br>";
	$num--;
}
?>

//Find even numbers between 1 to 20.

<?php

$num1=1;
$num2=20;
$result=[];
for($num1=1;$num1<=$num2;$num1++){
	if($num1%2==0){
		array_push($result,$num1);
	}
}
print_r($result); 
?>

//Multiplication Table of 22 and 40

<?php

$num1=22;
$num2=40;

echo "Multiplication table of 22:<br>";

for($i=1;$i<=10;$i++){
	
	echo "$num1*$i= ".$i*$num1;
	echo "<br>";
}

echo "Multiplication table of 40:<br>";
for($i=1;$i<=10;$i++){
	
	echo "$num2*$i= ".$i*$num2;
	echo "<br>";
}

?>


