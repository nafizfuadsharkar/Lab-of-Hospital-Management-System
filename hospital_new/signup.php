<?php

// include('DBconnect.php');
// session_start();
// require_once('DBconnect.php');
// if (! isset($_SESSION['is_login'])){


// 	if(isset($_REQUEST['username'])){
// 		$u=trim($_REQUEST['username']);
// 		$p=$_REQUEST['password'];

// $sql = " INSERT INTO users VALUES( '$u', '$p') ";
//   $sql = "SELECT * FROM users WHERE username='".$u."' AND password='".$p."' limit 1";
// 	$result = mysqli_query($conn, $sql);
// //   $result=$conn->query($sql);
//   if($result->num_rows==1){
//     $_SESSION['is_login']=true;
//     $_SESSION['username']=$u;
//   echo"<script> location.href='index.php'; </script>";
//   exit;
//  } else{
//     $msg='<div class="alert alert-warning mt-2"> Enter Valid Email and Password</div>';
//  }
// }
// } else {
//     echo"<script> location.href='signup.php'; </script>";

// }

// Close your database connection at the end of the file if needed

include('DBconnect.php');
session_start();
require_once('DBconnect.php');

// if (!isset($_SESSION['is_login'])) {
    if (isset($_REQUEST['username'])) {
        $u = trim($_REQUEST['username']);
        $p = $_REQUEST['password'];

        // Hash the password before inserting it into the database
        // $hashedPassword = password_hash($p, PASSWORD_DEFAULT);

        // Insert user into the database
        $insertSql = "INSERT INTO users (username, password) VALUES ('$u', '$p')";
        mysqli_query($conn, $insertSql);

        // Check if the user exists in the database
        $selectSql = "SELECT * FROM users WHERE username='$u' LIMIT 1";
        $result = mysqli_query($conn, $selectSql);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = $u;
            echo "<script> location.href='index.php'; </script>";
            exit;
        } else {
            $msg = '<div class="alert alert-warning mt-2"> Enter Valid Email and Password</div>';
        }
    }
// } else {
    // echo "<script> location.href='signup.php'; </script>";
// }



?>
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
				<a href="errorlogin.php"> Home </a> 
				<a href="errorlogin.php" style="margin-left: 20px;"> Test List </a> 
				<a href="errorlogin.php" style="margin-left: 20px;"> New Test </a> 
			</div>
		</div>
	</section>
	<section id = "section1">
		<div class="title text-warning bg-dark" > SIGN UP </div>
		
		<form action="signup.php" class="form_design" method="post">
			Username: <input type="text" name="username"> <br/>
			Password: <input type="password" name="password"> <br/> <br/>
			<input type="submit" value="Sign Up">
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
