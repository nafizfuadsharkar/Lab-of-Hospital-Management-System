<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> THE TITLE </title>
    
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
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title" color="black"> Add a New Test  </div>
		
		<form action="insert_patient.php" class="form_design" method="post" >
			Patient ID: <input type="text" name="pid"> <br/>
			Patient Name: <input type="text" name="pname"> <br/> 
			Phone Number: <input type="text" name="pphone"> <br/>
			Test Name: <input type="text" name="test_name"> <br/>
			Cost: <input type="number" name="test_cost"> <br/>
			<br/>
			<input type="submit" value="Add Test" border-radius="15px">
		</form>
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

