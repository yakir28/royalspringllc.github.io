<?php
session_start();
include "../db.php";

if (isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	
	if (empty($email)) {
		header("Location: ../index.html?error=email is required&$user_data");
	    exit();
	}
	
	else{



           $sql2 = "INSERT INTO email(email) VALUES('$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location:../index.html?success=Your email has been deliverd");
	         exit();
           }
}}else {
		header("Location: ../index.html?error=unknown error occurred&$user_data");
	 exit();
}
