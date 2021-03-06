</!DOCTYPE html>
<html>
<head>
	<title>Comments</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  	Bootsrap 
  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

  <!--
	Questions Stylesheet
  -->
  <link rel = "stylesheet" type = "text/css" href = "Questions.css">
	
</head>

<body>
	
	<!---------------------------------------------------
		Navbar 1
	----------------------------------------------------->
	<nav class="navbar navbar-inverse">
  
  	<div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	<a class="navbar-brand" href="#">Doc2Doc</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav">
        <li><a href="Home.html">Home</a></li>
        <li class="active"><a href="Questions.php">Questions</a></li> 
        <li><a href="#">About Us</a></li> 
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

	<!----------------------------------------------------
		Sub-Navigation Bar 
	------------------------------------------------------>
	

	<!--
		Trending Topics
	-->
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="News.html">Whats Hot?</a>
  </li>

  <!--
  
		Categories
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Primary Care</a>
      <a class="dropdown-item" href="#">Hospitalism</a>
      <a class="dropdown-item" href="#">Surgery</a>
      <a class="dropdown-item" href="#">Cardiology</a>
      <a class="dropdown-item" href="#">Dermatology</a>
      <a class="dropdown-item" href="#">Endicronology</a>
      <a class="dropdown-item" href="#">Gastroenterology</a>
      <a class="dropdown-item" href="#">Infectious Diseases</a>
      <a class="dropdown-item" href="#">Opthamology</a>
      <a class="dropdown-item" href="#">Gynecology</a>
      <a class="dropdown-item" href="#">E.N.T</a>
      <a class="dropdown-item" href="#">Pediatrics</a>
      <a class="dropdown-item" href="#">Pulmomology</a>
      <a class="dropdown-item" href="#">Psychology</a>
      <div class="dropdown-divider"></div>
    </div> 
  </li>
-->
  <li class="nav-item">
    <a class="nav-link" href="#">Ask Anything</a>
  </li>

</ul>


<div class="panel panel-default">
<div class="panel-heading">Submit Your comment</div>
  <div class="panel-body">
    <form method="post" action="commentform.php">
      <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Comment</label>
      <textarea name="subject" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>



</body>

</html>