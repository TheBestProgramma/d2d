</!DOCTYPE html>
<html>
<head>
	<title> Home</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  	Bootstrap 
  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--
	Home Stylesheet
  -->
  <link rel = "stylesheet" type = "text/css" href = "Home.css">

  <!--
	Favicon
  -->
  <link rel="icon" type="image/png" href="Images/Icons/Doc2Doc.png">

</head>
	
<body>
	
	<!-----------------------------
		Navbar 1
	------------------------------>
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
         <?php
            session_start();
             if(isset($_SESSION['username']))
            {
             <li class="active"><a href="Home.php">Home</a></li>
        <li><a href="Login2.html">Feed</a></li> 
        <li><a href="Login2.html">Make a Post!</a></li> 
            }
            else{ 
       <li class="active"><a href="Home.php">Home</a></li>
        <li><a href="Login2.html">Feed</a></li> 
      <li><a href="Login2.html">Make a Post!</a></li> }
            ?>  
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">
              <?php
            session_start();
             if(isset($_SESSION['username']))
            {
              echo $_SESSION['username']; 
            }
            ?>  
            </a>
        </li>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="Sign Up.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="Login2.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      </ul>

    </div>
  </div>
</nav>

<!-----------------------------------
	SLIDESHOW
------------------------------------->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  
  <!-- Indicators -->
<ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>|			
</ol>

  <!-- Wrapper for slides -->
<div class="carousel-inner">
    <div class="item active">
      <img src="Images/Primary Care/PC3.jpg" alt="We Uncover what is Hidden" >
    </div>

    <div class="item">
      <img src="Images/Primary Care/PC1.jpg" alt="We Prevent the Undesirable">
    </div>

    <div class="item">
      <img src="Images/Primary Care/PC2.jpg" alt="We Make it Easy">
    </div>
</div>

  <!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
</a>

<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</div>

<div class = "row" >

<!--
  Article 1
-->
<div class = "col-sm-3" >
<div class="card">
  <div class="card-body">
    <h3 class="card-title">Discoveries</h3>
    <h4 class="card-subtitle">Doctor's find a New Solution to Malaria in Kwale </h4>
    <p class="card-text">Doctors have come up with a vaccine to counter Mosquito-related diseases. The vaccine can last up to 6months. </p>
    <div class="panel panel-default">
      <div class="panel-heading">Post your Comment</div>
        <div class="panel-body">
          <form method="post" action="commentform.php">
          <div class="form-group">
            <textarea name="subject" class="form-control" id="exampleInputEmail1" placeholder="Type your comment here..." rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Post</button>
        </form>
        </div>
      </div>
  </div>
</div>
</div> 


<!--
  Article 2
-->
<div class = "col-sm-3">
<div class="card">
  <div class="card-body">
    <h3 class="card-title">New Infections</h3>
    <h4 class="card-subtitle">Fluoroquinolones and risk of hypoglycemia and central nervous system dysfunction (August 2018) </h4>
    <p class="card-text">Although fluoroquinolones are among the most commonly prescribed antibiotics, they are associated with a wide array of adverse effects. </p>
  
<div class="panel panel-default">
  <div class="panel-heading">Post your Comment</div>
    <div class="panel-body">
      <form method="post" action="commentform.php">
      <div class="form-group">
        <textarea name="subject" class="form-control" id="exampleInputEmail1" placeholder="Type your comment here..." rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Post</button>
    </form>
    </div>
  </div>
  </div>
</div>
</div> 

<!--
  Article 3
-->
<div class = "col-sm-3">
<div class="card">
  <div class="card-body">
    <h3 class="card-title">Research</h3>
    <h4 class="card-subtitle">More Funding Towards Finding the Cure of AIDS </h4>
    <p class="card-text">The World Health Organisation has decided to put in more funding to look for a cure in HIV/AIDS. The head of the Organisation, Mr.Pulis, has said not only finding the cure  will be the main aim but only to reduce the increasing spread of HIV/AIDS.  </p>
    <div class="panel panel-default">
      <div class="panel-heading">Post your Comment</div>
        <div class="panel-body">
          <form method="post" action="commentform.php">
          <div class="form-group">
            <textarea name="subject" class="form-control" id="exampleInputEmail1" placeholder="Type your comment here..." rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Post</button>
        </form>
        </div>
      </div>
  </div>
</div>
</div> 




</div>
<!--End of Body-->
</body>

</html>