<?php
session_start();
include "library.php"; 

if(isset($_POST['userID']))
{
	$userID= htmlspecialchars($_POST["userID"]);
	$password = htmlspecialchars($_POST["password"]);
	$sql= "SELECT * FROM users WHERE username= '".$userID."' and password ='". $password."';";
	$allResults= mysql_query($sql);
	$numrows= mysql_num_rows($allResults);
	If ($numrows == 1)
	{$record = mysql_fetch_assoc ($allResults);
	$_SESSION['userId'] = $record ['username'];
	$_SESSION ['usertype'] = $record ['usertype'];
	echo "welcome user ".$userID."...";
	}
	 else
{header ("location: login.php");}
}