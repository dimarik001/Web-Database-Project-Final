<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword= "";
$dbdatabasename="newhotel";
$conn = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbdatabasename,$conn);

function mainMenu()
{
	if ( ! isset($_SESSION['userid']))
	{ echo "<br> You are a guest ( not logged in).......";
		$usertype= "";
	}
else
	{ 
	echo "<br> Welcome ".$_SESSION['userid']." ...
	Type" .$_SESSION['usertype'];
	if ($_SESSION['usertype'] == 'Admin')
		$usertype= 'Admin';
	else
		$usertype= 'Customer';
}
	echo '<ul>';
	echo '<li> <a href = "index.php"> Home </a></li>';
	echo '<li> <a href = "register.php"> Register </a></li>';
	echo '<li> <a href = "login.php"> Login </a></li>';
	if ($usertype == 'Admin')
	echo '<li> <a href = "addProduct.php"> Add Product (Admin only) </a></li>';
	echo '<li> <a href = "ListProducts.php"> List Products </a></li>';
	echo '<li> <a href = "Makeorder.php"> Order Product </a></li>';
	echo '<li> <a href = "Logout.php"> Log Out </a></li>';
	echo '<ul>';
}// end of the function


?>