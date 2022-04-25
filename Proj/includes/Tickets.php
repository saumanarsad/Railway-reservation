<?php

if (isset($_POST['submit'])){
echo "Submitted successfully";
    require 'databse.php';

    $fname=$_POST['fname'];
    $cnic=$_POST['cnic'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $companions=$_POST['Companions'];
    $source=$_POST['']


    if (empty($fname) || empty($cnic))  {
        header("Location: ../index.php?error=eumptyfields");
        exit();
    } else{
    	 $sql = "SELECT * FROM passenger_data WHERE CNIC = ? or name=? or Phone_num=? or Companions=? or gender=? or age=? ";
        $stmt = mysqli_stmt_init($conn);

    	if(!mysqli_stmt_prepare($stmt,$sql)){
    		 header("Location: ../register.php?error=sqlerror" );

	     exit();

    	}
    	else{ 

    		mysqli_stmt_bind_param($stmt,"isiisi" ,$cnic,$fname,$phone,$companions,$gender,$age);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		$rowcount=mysqli_stmt_num_rows($stmt);
    		if ($rowcount>0){
    			header("Location: ../register.php?error=usernametaken" );
    		}
    		 else{
    		 	$sql="INSERT INTO passenger_data(CNIC,name,Phone_num,Companions,gender,age) VALUES(?,?,?,?,?,?)";
    		 	$stmt =mysqli_stmt_init($conn);
    		 	if(!mysqli_stmt_prepare($stmt,$sql)){
    		 header("Location: ../register.php?error=sqlerror" );
    		 exit();
    		 }else{
    		 	mysqli_stmt_bind_param($stmt,"isiisi",$cnic,$fname,$phone,$companions,$gender,$age);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
            
    		 }

    		}


    	}

    }
       
}

*/	?>

