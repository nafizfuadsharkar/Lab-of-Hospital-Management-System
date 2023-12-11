<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Laboratory</title>
    
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
				<a href="errorlogin.php"> Home </a> 
				<a href="errorlogin.php" style="margin-left: 20px;"> Test List </a> 
				<a href="errorlogin.php" style="margin-left: 20px;"> New Test </a> 
			</div>
		</div>
	</section>


	    <section">
			      <div class="container-fluid px-0 top-banner">
      <div class="row">  
        <div class="col-md-6 p-5 ajaira-text">
          <h1>Do You Want<br> <span class="text-primary text"><b>To Enter Our Laboratory?</b></span></h1>
              <h2 class="text-success"><b>Please, log in...!</b></h2>
              <p>If you don't have username and password:</p>
              <div class="mt-4"><button class="btn btn-primary width-5" ><a href="signupfront.php"><b>Sign Up</b></a></button></div>
        </div>
        <div class="col-md-6 mx-auto textcolor" style="text-align: left"> 
					<form action="signin.php" class="form_design_1 " method="post">
			Username: <input type="text" name="fname"> <br/>
			Password: <input type="password" name="pass"> <br/> <br/>
			<input type="submit" value="Sign In">
		</form>
  </div>
</div>

        </div>
		</div>

    </section>
<!-- 
	    <section id="home">
      <div class="container-fluid px-0 top-banner">
        <div class="container">
		<div class="row">
          <div class="row col-lg-6">
            <div class="col-lg-5 col-md-6">
              <h1>Do <br> <span class="text-warning text">You Want</span></h1>
              <h2 class="text-success"><b>To Enter Our Laboratory</b></h2>
              <p>Please, Sign in below</p>
              <div class="mt-4"><button class="btn btn-primary width-5" ><a href="#login"><b>Enter</b></a></button></div>
            </div> 
          </div>
		</div>
		<div class="col-lg-6">

		</div>
        </div>
      </div>
    </section> -->
	
	<!-- <section id = "section1">
		<div class="title text-warning bg-dark" id="login" > SIGN IN </div>
		
		<form action="signin.php" class="form_design" method="post">
			Username: <input type="text" name="fname"> <br/>
			Password: <input type="password" name="pass"> <br/> <br/>
			<input type="submit" value="Sign In">
		</form>
	</section> -->

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

