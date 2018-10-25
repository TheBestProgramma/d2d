<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  	Bootstrap 
  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "d2d";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

?>



	<div class="panel panel-default">
	<div class="panel-heading">Comments</div>
	<table class="table table-striped"> 
		<thead> 
			<tr> 
				<th>Comment ID</th> 
				<th>Name</th> 
				<th>Comment</th> 
				<th>Time</th> 
				<th>Status</th> 
				<th>Operations</th> 
			</tr> 
		</thead> 

<?php
	$sql = "SELECT * FROM comments";
	$res = $conn->query($sql);

	while ( $r = mysqli_fetch_assoc($res)) {
?>
		<tbody> 
			<tr> 
				<td><?php echo $r['id']; ?></td> 
				<td><?php echo $r['name'] ?></td> 
				<td><?php echo $r['subject']; ?></td> 
				<td><?php echo $r['submittime']; ?></td> 
				<td><?php if(isset($r['status']) & !empty($r['status'])){echo $r['status'];}else{echo "NA";} ?></td> 
				<td><a href="editcomment.php?id=<?php echo $r['id']; ?>">Edit</a> 
					<a href="commentstatus.php?id=<?php echo $r['id']; ?>&status=publish">Approve</a> 
					<a href="commentstatus.php?id=<?php echo $r['id']; ?>&status=draft">Disapprove</a> 
					<a href="delcomment.php?id=<?php echo $r['id']; ?>">Delete</a>
				</td> 
			</tr> 
		</tbody> 
		<?php } ?>

	</table>
</div>




</body>
</html>