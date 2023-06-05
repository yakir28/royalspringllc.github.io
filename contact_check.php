<?php
session_start();
include "db.php";

if (isset($_POST['name']) && isset($_POST['email'])
    && isset($_POST['phone']) && isset($_POST['mess'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$phone = validate($_POST['phone']);
	$message = validate($_POST['mess']);
	$_SESSION['mess'] = $message;
	
	if (empty($name)) {
		header("Location: index.php?error=Name is required&$user_data");
	    exit();
	}else if(empty($phone)){
        header("Location: index.php?error=phone number is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: index.php?error=email account is required&$user_data");
	    exit();
	}

	else if(empty($message)){
        header("Location: index.php?error=your message is required&$user_data");
	    exit();
	}


	else{



           $sql2 = "INSERT INTO contact(name, phone, email, mess) VALUES('$name', '$phone', '$email', '$message')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location:assets/thank.php?success=Your message has been deliverd");
	         exit();
           }
}}else {
		header("Location: index.php?error=unknown error occurred&$user_data");
	 exit();
}
