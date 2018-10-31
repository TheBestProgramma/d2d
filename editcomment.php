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
	$mysqli = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($mysqli->connect_error) {
	    die("Connection failed: " . $mysqli->connect_error);
	}
  

?>

<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

<div class="panel panel-default">
  <div class="panel-body">
  	<form method="post">
  		<?php
  	if(isset($_GET['id']) & !empty($_GET['id'])){
	//select query
	$id = $_GET['id'];
	$selsql = "SELECT * FROM comments WHERE id=$id";
	$selres = mysqli_query($mysqli, $selsql);
	$selr = mysqli_fetch_assoc($selres);
	if(mysqli_num_rows($selres) <= 1){

	}
	}else{
	}
	?>


	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Title" value="<?php echo $selr['name']; ?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">EMail</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $selr['email']; ?>">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Comment</label>
	    <textarea name="subject" class="form-control" rows="6"><?php echo $selr['subject']; ?></textarea>
	  </div>
	  <div class="form-group">
		  <div class="row">
				<div class="col-md-6">
				<label>Post Status</label>

					<select name="status" multiple class="form-control">
  						<option value="draft" <?php if($selr['status'] == "draft"){ echo "selected"; } ?>>Draft</option>
  						<option value="published" <?php if($selr['status'] == "published"){ echo "selected"; } ?>>Published</option>
					</select>
				</div>
			  </div>
		  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
  </div>
  <a href="viewcomments.php">Back to Comments Form</a>
</div>

<?php 

	if(isset($_POST) & !empty($_POST)){
	//print_r($_POST);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$subject = mysqli_real_escape_string($mysqli, $_POST['subject']);
	$status = $_POST['status'];
 
	$sql = "UPDATE comments SET name='$name', email='$email', subject='$subject', status='$status' WHERE id=$id";
	$res = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
	//$lid = mysqli_insert_id($connection);
	if($res){
		$smsg = "Comment updated Successfully";
		header("location: editcomment.php?id=$id");
	}else{
		$fmsg = "Failed to update Comment";
	}
} ?>

</body>
</html>