<?php

session_start();

$mysqli = new mysqli("localhost", "root", "", "d2d");

 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}


if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$pwd=md5($pwd);
	

	$select = "SELECT * FROM `user` WHERE username = '$username'";

	$result = $mysqli->query($select);

	if(mysqli_num_rows($result)>0){
		echo 'username ok';
		while($row = mysqli_fetch_array($result)){

			$stored_pwd = $row['password'];
			if($stored_pwd == $pwd){
				echo'Success';
				
				//Get the user data 
				$_SESSION['username']=$username;

				header("refresh:1; url= Home.php");
			}else{
				echo "Invalid Password";
			}

		}


	}else{
		echo "Invalid username";
	}


}

?>