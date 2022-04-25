<?php 

if (isset($_POST['submit'])){
	require'databse.php';

	$username = $_POST['username'];
    $password = $_POST['password'];
	$confirmpass = $_POST['confirmPassword'];


      if (empty($username) || empty($password)|| empty($confirmpass)){

	     header("Location: ../register.php?error=emptyfields&username=" . $username);
	     exit();
    }
    elseif(!preg_match("/^[a-zA-z0-9]*/", $username)){
    	 header("Location: ../register.php?error=invalidusername&username=" . $username);
	     exit();

    }
    elseif ($password!==$confirmpass) {
    header("Location: ../register.php?error=passworddoesnotmatch&username=" . $username);
	     exit();

    }
    else{
    	$sql="SELECT username FROM users WHERE username=?";
    	$stmt =mysqli_stmt_init($conn);

    	if(!mysqli_stmt_prepare($stmt,$sql)){
    		 header("Location: ../register.php?error=sqlerror" );

	     exit();

    	}
    	else{ 
    		mysqli_stmt_bind_param($stmt,"s",$username);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		$rowcount=mysqli_stmt_num_rows($stmt);
    		if ($rowcount>0){
    			header("Location: ../register.php?error=usernametaken" );
    		}
    		 else{
    		 	$sql="+++++";
    		 	$stmt =mysqli_stmt_init($conn);
    		 	if(!mysqli_stmt_prepare($stmt,$sql)){
    		 header("Location: ../register.php?error=sqlerror" );
    		 exit();
    		 }else{
    		 	mysqli_stmt_bind_param($stmt,"ss",$username,$password);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		 header("Location: ../login.php?" );
    		 }

    		}


    	}

    }

}


?>