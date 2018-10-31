</!DOCTYPE html>
<html>
<head>
	<title>Post</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  	Bootsrap 
  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--
	Questions Stylesheet
  -->
  <link rel = "stylesheet" type = "text/css" href = "Post.css">
	
</head>

<body>
	
	<!--
		Navbar 1
	-->
	<nav class="navbar navbar-inverse">
  
  	<div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="Home.php">Doc2Doc</a>
	<img src="Images/Icons/Doc2Doc.png" height="40px" width="40px" style="left: 0px;">
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav">
        <li><a href="Home.php">Home</a></li>
        <li><a href=" News.php">Feed</a></li> 
        <li class="active"><a href="Post.php">Make a Post!</a></li> 
      </ul>
      
       <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">
              <?php
            session_start();

             if(
              isset($_SESSION['username'])){
              echo $_SESSION['username']; 
            }
            ?>  
            </a>
        </li>
        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>

    </div>
  </div>
</nav>

</ul>


<div class="panel panel-default">
  <div class="panel-heading">Submit Your Post</div>
    <div class="panel-body">
      <form method="post" action="Postform.php">
      <div class="form-group">
        <label for="exampleInputPassword1">Post</label>
        <textarea name="post" class="form-control" id="exampleInputEmail1" placeholder="Type your post here..." rows="3"></textarea>
        <label for="exampleInputPassword1">Tags</label>
        <textarea name="tags" class="form-control" id="exampleInputEmail1" placeholder="Type your tags here..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Post</button>
    </form>
    </div>
  </div>


</body>

</html>