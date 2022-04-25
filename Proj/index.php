
<?php
require_once 'includes/header.php';
?>

<?php
if (!isset($_SESSION['sessionID'])){
	echo "Correct Password !. You are logged in";
}
else{
	echo "k";
}

?>

<!DOCTYPE html >
<html lang="en" >
<head>

    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Railways Booking Form</title>
    <link rel="stylesheet" href="style2.css">


     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container"><!--container-->

        <form class="form-group" action="includes/passenger.php" action="includes/Tickets.php" method="post"><!--form-->
            <h1 class="text-center" style="color: black">Railway reservation  Form</h1>

            <div id="form" ><!--form-->
                <h3 class="text-white">Booking Details</h3>

            <div id="input" style="background:black;"><!--input-->
                <input type="text" id="input-group" name="from" placeholder="From">
                <input type="text" id="input-group" name="to" placeholder="To">
                <input type="text" id="input-group" placeholder="Departure Date">
                <input type="text" id="input-group" placeholder="Departure Time">
                <select  id="input-group" name="trainopt" style="background: black;">
                    <option value="">Preffered Train</option>
                    <option value="tez" >Tezgaam ( Train number: 1 - 30)</option>
                    <option value="pkex">Pakistan Express ( Train number: 31 - 59)</option>
                    <option value="aiex">Allama Iqbal Express ( Train number: 60 - 100)</option>
                </select>
                <select  id="input-group" style="background: black;">
                    <option value="">Preffered Seating</option>
                    <option value="">Economy Class</option>
                    <option value="">Business Class</option>
                    <option value="">First Class</option>
                </select>
				 <select  id="input-group" name="payment" style="background: black;">
                    <option value="" >Method Of Payment</option>
                    <option value="online">Online</option>
                    <option value="cash">Cash In hand</option>
            
                </select>
                </div><!--input-->
                
                <div id="input2" style="background:black;"><!--input2-->
                <div class="inputs" >
                    <input type="number" id="input-group" name="Companions" placeholder="Accompanying passengers">
                   <!-- <input type="number" id="input-group" placeholder="Children(2-11years)">
                    <input type="number" id="input-group" placeholder="infant(under 2years)">
                -->
                </div>
                </div><!--input2-->

              <!--  <div id="input3" style="background: black;">
                    <span id="input-group" class="text-primary">Select Your Fare</span> 
                    <input type="radio" id="input-group" name="r" >
                    <label class="text-white" for="input-group" >One Way</label>
                    <input type="radio" id="input-group" name="r">
                    <label class="text-white" for="input-group">Round Trip</label>
                </div>
            -->

              <!--  <div id="input4"style="background: black;">
                    <input type="text" id="input-group" placeholder="Return Date" >
                    <input type="text" id="input-group" placeholder="Return time">
                    <input type="text" id="input-group1" placeholder="Any Message">
                </div>input4
            -->
                <div id="input5"style="background: black"><!--input5-->
                    <h3 class="text-white">Personal Details</h3>
                </div><!--input5-->
                
                <div id="input6"style="background: black"><!--input6-->
                    <input type="text" id="input-group" name="fname" placeholder="Full Name">
                    <input type="text" id="input-group" name="cnic" placeholder="ID Card Number">
                    <input type="text" id="input-group" name="phone"  placeholder="Phone Number">
                    <input type="Number" id="input-group" name="age" placeholder="Age">
					<input type="Gender" id="input-group" name="gender"  placeholder="Gender">
					
                </div><!--input6-->
				
                <button type="submit" class="btn btn-warning text-white" name="submit">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>

             <!--  <h1 id="Alltotalprice">Total-->
           
            </div><!--form-->
			
         
           
        </form><!--form-->

    </div><!--container-->
</body>
</html>
