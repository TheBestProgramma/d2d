<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "d2d");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$post = $mysqli->real_escape_string($_REQUEST['post']);
$tags = $mysqli->real_escape_string($_REQUEST['tags']);
$username = $mysqli->real_escape_string($_REQUEST['username']);
// attempt insert query execution
$sql = "INSERT INTO posts (post,tags) VALUES ('$post','$tags')";
if($mysqli->query($sql) === true){
	header("location:post.php");
    echo '<script language="javascript">';
	echo 'alert("Post uploaded successfully!")';
	echo '</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>