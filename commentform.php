<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "d2d");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$comment = $mysqli->real_escape_string($_REQUEST['comment']);
$tags = $mysqli->real_escape_string($_REQUEST['tags']);
$postID = $mysqli->real_escape_string($_REQUEST['PostID']);
// attempt insert query execution
$sql = "INSERT INTO comments (commentID,comment,tags) VALUES ('$commentID','$comment','$tags')";
if($mysqli->query($sql) === true){
	header("location:Comments.php");
    echo '<script language="javascript">';
	echo 'alert("comment successfully posted")';
	echo '</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>