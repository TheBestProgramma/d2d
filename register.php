<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "d2d");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$username = $mysqli->real_escape_string($_REQUEST['username']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password','$email')";
if($mysqli->query($sql) === true){
    echo "User Added Successfully";
    header("location: Questions.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>