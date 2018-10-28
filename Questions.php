</!DOCTYPE html>
<html>
<head>
	<title>Doc2Doc</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  	Bootstrap 
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

  <!----------------------------------------------------
  Creating a Database Connection
------------------------------------------------------->

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

             if(isset($_SESSION['username'])){
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
    <a class="nav-link " href="News.php">Whats Hot?</a>

  </li>

  <li class="nav-item">
    <a class="nav-link" href="Comments.php">Enquiries for the Creator</a>
  </li>

</ul>

<!--
	Questions Tab Navigation
-->
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Ask a Question</a></li>
  <li><a data-toggle="tab" href="#menu1">Review your Questions</a></li>
  <li><a data-toggle="tab" href="#menu2">Questions you could Answer</a></li>
  <li><a data-toggle="tab" href="#menu3">Questions based on Categories</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">

  	<!-------------------------------------------
		Posting Question
  	-------------------------------------------->
    <h3>Ask a Question</h3>
    
    <form class="form-group" action="ask_question.php" name="askquestion_form" method="POST">
		<br>

      <label for="topic">Topic:</label>
      <input type="text" class="form-control" id="topic" name="topic"><br>

      <label for="content">Content:</label>
	    <textarea class="form-control" name=question id="textarea" rows="3" placeholder="Ask a Question Here">
	    </textarea><br>

	    <button type="submit" class="btn btn-primary">Post</button>

    </div>
	 </form>

  	<!--------------------------------------------
		Review posted Questions
  	--------------------------------------------->

  <div id="menu1" class="tab-pane fade" >

    <h3>Questions you Asked</h3>

    <div name = "question_view">
      
      <?php  
      
        $user_id = $_SESSION['user_id'];

        $sql = "SELECT user.username, question.question, question.topic, question.time FROM question INNER JOIN user ON question.user_id = user.user_id WHERE question.user_id='$user_id'";
        $res = $conn->query($sql);

        while ( $r = mysqli_fetch_assoc($res))  {         
        ?>
        <p>
          <?php 
            echo $r['username'];  ?>    <br> <?php
            echo $r['topic'];     ?>    <br> <?php
            echo $r['question'];  ?>    <br> <?php
            echo $r['time'];      ?>    <br> <?php

          ?> 
        </p><br>
      <?php } ?>
    </div>
    
  </div>

  <!----------------------------------------------
		Answer asked Questions
  ------------------------------------------------>
  <div id="menu2" class="tab-pane fade">
    <h3>Questions you could Answer</h3>
    <p></p>
  </div>

</div>

<!------------------------------------------------
  Prompt for Questions Based on Categories
-------------------------------------------------->
<div id="menu1" class="tab-pane fade" >

</div>
<!----------------------
		Footer
-------------------------->

</body>

</html>