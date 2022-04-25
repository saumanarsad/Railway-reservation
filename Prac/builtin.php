 <?php
 /*$personalinfo=array("Name"=>"Sauman","City"=>"Lahore");
 $moreinfor=array("study"=>"Student");
 $personalinfo=array_merge($personalinfo,$moreinfor);

 foreach ($personalinfo as $key => $value) {
 	print_r(array_values($personalinfo));
 }
 */
/*
$cars=array("audi","suzuki");
array_push($cars, "cultus");

print_r($cars);
echo count($cars);
echo "<br>";
echo date('H,i,s ');

$x=100;
$y=200;

function add(){
	$GLOBALS['z'] = $GLOBALS['x'] +$GLOBALS['y'];
}
add();
echo $z;

if (isset($_POST)){
echo $_POST['name']. "Your name is submitted";
}
 ?>
}
<form action="builtin.php" method="post">
	<input type="text" name="name">;
	<input type="text" name="age">;
	<button type="submit">SUBM</button>
</form>

setcookie("name","sauman",time()-86400*30);
print_r($_COOKIE); 
echo "<br>";
echo $_COOKIE['name'];
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Document</title>
</head>
<body>
<?php
$sql = "SELECT *FROM users where id=1";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);

if($rowcount>0){
   
   while($row=mysqli_fetch_assoc($result)){

    echo $row['username']."<br>";

   }

}
else{
    echo"No results";
}
?>
</body>
</html>
*/
echo $name=$_FILES['file']['name'];
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Submit</button>

	 
</form>