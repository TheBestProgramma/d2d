<?php

session_start();

$mysqli = new mysqli("localhost", "root", "", "d2d");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security

$user_id = $_SESSION['user_id'];
$question = $mysqli->real_escape_string($_REQUEST['question']);
$topic = $mysqli->real_escape_string($_REQUEST['topic']);
 
// attempt insert query execution
$sql = "INSERT INTO question (user_id, question, topic) VALUES ('$user_id', '$question','$topic')";
if($mysqli->query($sql) === true){
    echo "Question Added Successfully";
    header("location: Questions.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>