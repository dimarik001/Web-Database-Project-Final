 <?php 
		session_start();
   
   $name= htmlspecialchars($_POST["name"]);
	$password = htmlspecialchars($_POST["password"]);
		$email = htmlspecialchars($_POST["email"]);
	$tel = htmlspecialchars($_POST["tel"]);
		$lastname = htmlspecialchars($_POST["lastname"]);
				$number = htmlspecialchars($_POST["number"]);

				$arrival = htmlspecialchars($_POST["arrival"]);
				$departure = htmlspecialchars($_POST["departure"]);


	
			//Insert user data in data table;
			$connectionString = mysql_connect("localhost", "root", "");
			$db= mysql_select_db("newhotel");
		
			$query = "INSERT INTO user1 (UserName, password, emailAdress, TelNumber) 
			VALUES('".$name."','".$password."', '".$email."', '".$tel."')";
			$queryexe = mysql_query($query);
			
			
			$query1 = "INSERT INTO reservation (UserName, NumberofPerson, ArrivalDate, DepartureDate) 
			VALUES('".$lastname."','".$number."', '".$arrival."', '".$departure."')";
			$queryexe = mysql_query($query1);
			
			
			//calculate number of days;
			$arrival = date_create("$_POST[arrival]");
			$departure = date_create("$_POST[departure]");
			$diff = date_diff($arrival, $departure);
			$days = $diff->format("%a");
			
			//$totalPrice = ($roomPrice * $days * $_POST[number] ) + ( $days * $serviceCost);
			//echo "<p>You are going to stay $days days at our hotel .";
			//echo "<p>For each day should pay '$roomPrice'$ for $_POST[RoomSelected]  ";
			
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
     
	<a href="subscription.php">Home page</a><br/>
	<a href="reservationForm.php">Reservation</a><br/>
	<a href="costs.php">Cost</a><br/>
	<a href="rentCar.php">Rent Car</a><br/>
	<a href="resturant.php">Restaurant</a><br/>
	<a href="contactUs.php">Contact Us</a><br/>
	<a href="Gallery.html"><b>Gallery</b></a><br/>
	

   </div>

   <div id="rightColumn">
   
	

	</body>
</html>

