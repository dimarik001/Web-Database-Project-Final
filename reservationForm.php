<?php 
		session_start();
   		
   ?>
   
  
<html>
<head>
   <title>My Grand Hotel</title>
   <link href="pcg.css" rel="stylesheet" type="text/css" />
    <link href="sform.css" rel="stylesheet" type="text/css" />
</head>

<body>


   <div id="header">
 
	  <h1>My Grand Hotel</h1>
   </div>


 <div id="leftColumn">
     
	<a href="subscription.php"><b>Home page</b></a><br/>
	<a href="reservationForm.php"><b>Reservation</b></a><br/>
	<a href="costs.php"><b>Cost</b></a><br/>
	<a href="rentCar.php"><b>Rent Car</b></a><br/>
	<a href="resturant.php"><b>Restaurant</b></a><br/>
	<a href="contactUs.php"><b>Contact Us</b></a><br/>
	<a href="Gallery.html"><b>Gallery</b></a><br/>
	
	

   </div>

   <div id="rightColumn">
		<form method="POST" action="reservation.php">
		<div style="width: 400px;">
		</div>
		<div style="padding-bottom: 18px;font-size : 21px;">Hotel Reservation</div>
		<div style="display: flex; padding-bottom: 18px;width : 450px;">
		<div style=" margin-left : 0; margin-right : 1%; width : 49%;">First name<span style="color: red;"> *</span><br/>
		<input type="text" id="name" name="name" style="width: 100%;" class="form-control"/>
		</div>
		<div style=" margin-left : 1%; margin-right : 0; width : 49%;">Last name<span style="color: red;"> *</span><br/>
		<input type="text" id="lastname" name="lastname" style="width: 100%;" class="form-control"/>
		</div>
		</div><div style="padding-bottom: 18px;">Phone<span style="color: red;"> *</span><br/>
		<input type="text" id="tel" name="tel" style="width : 450px;" class="form-control"/>
		</div>
		<div style="padding-bottom: 18px;">Email<span style="color: red;"> *</span><br/>
		<input type="text" id="email" name="email" style="width : 450px;" class="form-control"/>
		</div>
		<div style="padding-bottom: 18px;">Password<span style="color: red;"> *</span><br/>
		<input type="text" id="password" name="password" style="width : 450px;" class="form-control"/>
		</div>
		<div style="padding-bottom: 18px;">Arrival date<span style="color: red;"> *</span><br/>
		<input type="date" id="arrival" name="arrival" style="width : 250px;" class="form-control"/>
		</div>
		<div style="padding-bottom: 18px;">Departure date<span style="color: red;"> *</span><br/>
		<input type="date" id="departure" name="departure" style="width : 250px;" class="form-control"/>
		</div>
		
		<div style="padding-bottom: 18px;">Number of adults<span style="color: red;"> *</span><br/>
		<input type="number" id="number" name="number" style="width : 250px;" class="form-control"/>
		</div>
		<div style="padding-bottom: 18px;">Type of room<br/>
			
		
		</div>
		<input type="checkbox" name="resturunt" value="resturunt">I wish to use resturant service(+100$)<br>
		<input type="checkbox" name="rentCar" value="rentCar">I wish to use resturant service(+100$)<br> 
		
		<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>

		</form>

	</body>
</html>