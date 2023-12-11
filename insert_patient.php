<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['pid']) && isset($_POST['pname']) && isset($_POST['pphone']) && isset($_POST['test_name']) && isset($_POST['test_cost'])){
	// write the query to check if this username and password exists in our database
	$u = $_POST['pid'];
	$p = $_POST['pname'];
	$c = $_POST['pphone'];
	$a = $_POST['test_name'];
	$b = $_POST['test_cost'];

	
	$sql = " INSERT INTO patient_test VALUES( '$u', '$p', '$c', '$a', $b ) ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		// echo "Inseted Successfully";
		header("Location: show_patients.php");
	}
	else{
		// echo "Insertion Failed";
		header("Location: new_patient.php");
	}
	
}


?>