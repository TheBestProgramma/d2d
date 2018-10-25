</!DOCTYPE html>
<html>
<head>
	<title>Doc2Doc</title>


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
  <link rel = "stylesheet" type = "text/css" href = "Questions.css">
	
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
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav">
        <li><a href="Home.php">Home</a></li>
        <li class="active"><a href="#">Questions</a></li> 
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

	<!--
		Sub-Navigation Bar 
	-->
	

	<!--
		Trending Topics
	-->
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="News.php">Whats Hot?</a>
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
    <a class="nav-link" href="Comments.php">Ask Anything</a>
  </li>

</ul>





</body>

</html>