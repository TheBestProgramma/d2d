<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "d2d");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$name = $mysqli->real_escape_string($_REQUEST['name']);
$subject = $mysqli->real_escape_string($_REQUEST['subject']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO comments (name, email, subject, status) VALUES ('$name', '$email','$subject', 'draft')";
if($mysqli->query($sql) === true){
	header("location:Comments.html");
    echo '<script language="javascript">';
	echo 'alert("message successfully sent")';
	echo '</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>