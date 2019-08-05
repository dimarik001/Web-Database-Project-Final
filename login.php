<html>
<?php
session_start();
include "library.php"; 
?>
	<body>
		<?php 
		  	
			if($_POST[SignIn]=="SignIn");
			{
				$email= $_POST['email'];
				//reload page if one of the item is null
				if(($_POST['password'] == "") || ($_POST['email'] == "") )
				{
					header("Location:login.html");
					exit;
				}
				
			$connectionString = mysql_connect("localhost", "root", "");
			mysql_select_db("newhotel");
			$query = "Select * from user1 where emailAdress = '$email'";
			
			
			while ( $row = odbc_fetch_array($queryexe)) {
				$password = odbc_result($queryexe, password);
				$user = odbc_result($queryexe, username);
			}
			
			
			if($password == ""){
				echo "<p>This email address not register</p>";
				echo "<p><a href='login.html'>Return to Login page<a></p>";
			}else if($password != $_POST[password]){
				echo "<p>Wrong Password";
				echo "<p><a href='login.html'>Return to Login page<a></p>";
			}else if($password == $_POST[password]){
				echo "<p>Login Successfully</p>";
				session_start();
				$_SESSION[login] = "true";
				$_SESSION[userName] = $user;
				header("Location:subscription.php");
			}
				
			
			
			else if($_POST['Register']=="Register")
			{
				header("Location:reservationForm.php");
			}
			
		
			odbc_close($connectionString);
			}
			
		?>
	<body>
</html>