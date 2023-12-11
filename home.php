<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Laboratory </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px; color: #F2674A;"> Laboratory </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home.php"> Home </a> 
				<a href="show_patients.php" style="margin-left: 20px;"> Test List </a> 
				<a href="new_patient.php" style="margin-left: 20px;"> New Test </a> 
        <a href="logout.php" style="margin-left: 20px;"> Log out </a> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title "> Welcome to Our Laboratory </div>
    <section class="container">
      <div class="row">  
        <div class="col-md-6" style="text-align: left">
          <div class="card" style="width: 18rem;">
  <img src="./img/1 (3).jpg" class="card-img-top rounded" width="300px" alt="...">
  <div class="card-body">
    <h5 class="card-title">Add new test</h5>
    <p class="card-text">If you want  to add a new test, click here.</p>
    <a href="new_patient.php" class="btn btn-primary">Add Test</a>
  </div>
</div>
        </div>
        <div class="col-md-6 mx-auto" style="text-align: left"> 
        <div class="card" style="width: 18rem;">
  <img src="./img/1 (7).jpg" class="card-img-top rounded" width="300px" >
  <div class="card-body" >
    <h5 class="card-title">List of test</h5>
    <p class="card-text">If you want  to see the list of lab, click here.</p>
    <a href="show_patients.php" class="btn btn-primary">Full List</a>
  </div>
</div>

        </div>
		</div>

    </section>
		
		
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

