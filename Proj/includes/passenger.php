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
    $source=$_POST['from'];
    $dest=$_POST['to'];
    $trainname=$_POST['trainopt'];
    $ticketid=rand(0,100);
        	 
   if ($trainname=="tez"){
   $trainid=20;
   }
   elseif($trainname=="pkex"){
    $trainid=50;
   }
   else{
    $trainid=70;
   }


    if (empty($fname) || empty($cnic))  {
        header("Location: ../index.php?error=eumptyfields");
        exit();
    } else{
    	 $sql = "SELECT * FROM passenger_data WHERE CNIC = ? or name=? or Phone_num=? or Companions=? or gender=? or age=? ";
        $stmt = mysqli_stmt_init($conn);

    	if(!mysqli_stmt_prepare($stmt,$sql)){
    		 header("Location: ../register.php?error=sqLerror" );

	     exit();

    	}
    	else{ 

    		mysqli_stmt_bind_param($stmt,"isiisi" ,$cnic,$fname,$phone,$companions,$gender,$age);
    		mysqli_stmt_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		$rowcount=mysqli_stmt_num_rows($stmt);
    		if ($rowcount<0){
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
    	





    		 $sql2 = "SELECT * FROM ticket WHERE Ticket_ID = ? or Train_ID=? or CNIC=? or Source=? or Destination=?  ";
        $stmt2 = mysqli_stmt_init($conn);


        if(!mysqli_stmt_prepare($stmt2,$sql2)){
             header("Location: ../register.php?error=sqlerror" );


         exit();


        }
        else{ 
        	

            mysqli_stmt_bind_param($stmt2,"iiiss" ,$ticketid,$trainid,$cnic,$source,$dest);
            mysqli_stmt_execute($stmt2);
            mysqli_stmt_store_result($stmt2);
            $rowcount2=mysqli_stmt_num_rows($stmt2);
            if ($rowcount2<0){
                header("Location: ../register.php?error=usernametaken" );
            }
             else{
                $sql2="INSERT INTO ticket(Ticket_ID,Train_ID,CNIC,Source,Destination) VALUES(?,?,?,?,?)";
                $stmt2 =mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt2,$sql2)){
             header("Location: ../register.php?error=sqlerror" ); 
             exit();
             }else{
                     

                    mysqli_stmt_bind_param($stmt2,"iiiss",$ticketid,$trainid,$cnic,$source,$dest);
                      mysqli_stmt_execute($stmt2);
                      mysqli_stmt_store_result($stmt2);









             $sql3 = "SELECT * FROM train WHERE Ticket_ID = ? or Name=?";
        $stmt3 = mysqli_stmt_init($conn);


        if(!mysqli_stmt_prepare($stmt3,$sql3)){
             header("Location: ../register.php?error=sqlerror" );


         exit();


        }
        else{ 
            

            mysqli_stmt_bind_param($stmt3,"is" ,$ticketid,$trainname);
            mysqli_stmt_execute($stmt3);
            mysqli_stmt_store_result($stmt3);
            $rowcount3=mysqli_stmt_num_rows($stmt3);
            if ($rowcount3<0){
                header("Location: ../register.php?error=usernametaken" );
            }
             else{
                $sql3="INSERT INTO train(Ticket_ID,Name) VALUES(?,?)";
                $stmt3 =mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt3,$sql3)){
             header("Location: ../register.php?error=sqlerror" ); 
             exit();
             }else{
                     

                     mysqli_stmt_bind_param($stmt3,"is" ,$ticketid,$trainname);
                      mysqli_stmt_execute($stmt3);
                      mysqli_stmt_store_result($stmt3);















             $sql4 = "SELECT * FROM booking_details WHERE CNIC=? or Ticket_ID = ? or Train_ID=?";
        $stmt4 = mysqli_stmt_init($conn);


        if(!mysqli_stmt_prepare($stmt4,$sql4)){
             header("Location: ../register.php?error=sqlerror" );


         exit();


        }
        else{ 
            

            mysqli_stmt_bind_param($stmt4,"iii" ,$cnic,$ticketid,$trainid);
            mysqli_stmt_execute($stmt4);
            mysqli_stmt_store_result($stmt4);
            $rowcount4=mysqli_stmt_num_rows($stmt4);
            if ($rowcount4<0){
                header("Location: ../register.php?error=usernametaken" );
            }
             else{
                $sql4="INSERT INTO booking_details(CNIC,Ticket_ID,Train_ID) VALUES(?,?,?)";
                $stmt4 =mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt4,$sql4)){
             header("Location: ../register.php?error=sqlerror" ); 
             exit();
             }else{
                     

                     mysqli_stmt_bind_param($stmt4,"iii" ,$cnic,$ticketid,$trainid);
                      mysqli_stmt_execute($stmt4);
                      mysqli_stmt_store_result($stmt4);

                    }







    		 }

    		}


    	}

    }

}
       
}
}
}
}
}
}
}
}
?>

	