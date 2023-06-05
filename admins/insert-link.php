<?php
session_start();
include "register/config/db.php";

if (isset($_POST['link'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$link = validate($_POST['link']);

	if (empty($link)) {
		header("Location: index.php?error=User Name is required&$user_data");
	    exit();
	
    }
	else{



	    $sql = "SELECT * FROM socials WHERE link='$link' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=The link is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO socials(link) VALUES('$link')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location:index.php?success=Your account has been created successfully");
	         exit();
           }
}}}else {
		header("Location: index.php?error=unknown error occurred&$user_data");
	 exit();
}
