<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>document</title>
</head>
<body>

	<?php
$filepath="upload/file.txt";
$output=file_get_contents($filepath);
echo $output;

/*
if (isset($_POST['submit']))
{
	$myfile=fopen("upload/file.txt","a");

$txt="My age is " . $_POST['age']. "\n";
fwrite($myfile, $txt); 
fclose($myfile);

}
*/





?>
<form action="finput.php" method="post">
	<input type="text" name="age">
	<input type="submit" name="submit">

</form>
</body>
</html>