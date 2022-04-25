
	<?php


/*$name="Sauman";
$age=24;

echo "My name is $name <br>";
echo "My age is" .$age;

$cars=array("Bmw","AUdi","Mercidees");

echo "<br>";
echo $cars[1];
print_r($cars);

echo"<br>"; 
$cars2=array("suzuki" => 10,"cultus" =>20);
$cars=array_merge($cars,$cars2);
print_r($cars);

foreach ($cars2 as $key => $value) {
	echo"My". $key ."has ". $value;
}
*/
//Multi dimensional array

/*$cars=array("Expensive"=>array("Audi","Mercedees"),
	"Inexpensive"=>array("Folgo","fort","toyota")
);

echo $cars["Inexpensive"][0];
*/

/*Operators

$x=100;
$y=200;
echo $x.$y;
echo "<br>";
if(!$x>50 && 1==2){
echo "the value is".$x;
}
else{
	echo "the value is no";
}
*/
//Conditional
 /*$role="Visi";

 switch($role){
 	case 'Visitor':
 	echo"You are a visitor";
break;
 case 'User':
 		echo "You are a user";

 		break;
 		default : 
 		echo "No role is there";
 		break;
 }
*/
// loops
 /*function:
 camel case 
 every word after the first one is a capital
 myFunction

 lower case
 all lower case underscore in bw
my_function

 pascal case
 every word is capitalized
MyFunction
*/
 /*
 define("COMPANY_NAME", "Apple");
 echo COMPANY_NAME;

const MY_NAME="sauman";
echo MY_NAME;
*/
require 'head.php';
include 'Includes/header.php'; 
?>
<h1><?php myfunction(); ?></h1>
<?php
include 'Includes/footer.php';
?>