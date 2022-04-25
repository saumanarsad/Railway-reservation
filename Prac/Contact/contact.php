<?php
if (isset($_POST['submit'])){
 
 $name=trim($_POST['name']);
 $email=trim($_POST['email']);
 $subject=trim($_POST['subject']);
 $message=trim($_POST['message']);
 $myMail="saumanarshad@live.co m";

 $header ="From: " . $email;
 $message2 = "You have recieved a message from ". $name . ". \n\n" . $message;

mail($myMail,$subject, $message2,$header);
header("Location: index.php?mailsent");
}



?>


