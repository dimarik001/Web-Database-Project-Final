   <?php 
	/*	session_start();
   		$user = $_SESSION['userName'];
		$login = $_SESSION['login']; 
	
		if($login == "true"){
			echo "<p><b>Welcome ".$user."</b></p>";
			echo '<a href="logout.php">LogOut</a><br/>';
		}else{
			echo '<a href="login.html">Login</a><br/>';	
		}*/
			
   ?>

<html>
<!-- 
	Dmitri Atanasov


   

   Filename:         subscription.htm
   Supporting files: parch.jpg, pcg.css, pcglogo.jpg, sform.css
-->

   <title>My Grand Hotel</title>
   <link href="pcg.css" rel="stylesheet" type="text/css" />
    <link href="gallary.css" rel="stylesheet" type="text/css" />
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
	<a href="login.html"><b>Login</b></a><br/>
    <a href="logout.php"><b>Logout</b></a><br/>
	

   </div>

   <div id="rightColumn">
     <div class="responsive">
  <div class="img">
    <a target="_blank" href="img/01.jpg">
      <img src="img/01.jpg" alt="my hotel" width="600" height="400">
    </a>
    <div class="desc">My Grand Hotel</div>
  </div>
</div>


<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/02.jpg">
      <img src="img/02.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">My Grand Hotel</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/03.jpg">
      <img src="img/03.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">My Grand Hotel</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="img/04.jpg">
      <img src="img/04.jpg" alt="" width="600" height="400">
    </a>
    <div class="desc">My Grand Hotel</div>
  </div>
</div>

<div class="clearfix"></div>
   </div>

</body>

</html>