<?php
session_start();

include "db.php";


if (isset($_POST['video_url']) && isset($_POST['name'])
&& isset($_POST['sum'])&& isset($_POST['id']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$video_url = validate($_POST['video_url']);
	$sum = validate($_POST['sum']);
	$name = validate($_POST['name']);
	$id = validate($_POST['id']);

	if (empty($video_url)) {
		header("Location: lessons.php?error= video_url is required");
	    exit();
	}else if(empty($sum)){
        header("Location: lessons.php?error=sum is required");
	    exit();
	}else if(empty($name)){
        header("Location: lessons.php?error=name is required");
	    exit();
	}else if(empty($id)){
        header("Location: lessons.php?error=id is required");
	    exit();
	}else{
		// hashing the password


		$sql = "SELECT * FROM videos WHERE video_url='$video_url'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['id'] === $id) {
            	$_SESSION['video_url'] = $row['video_url'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['sum'] = $row['sum'];
            	$_SESSION['id'] = $row['id'];
            	header("Location:video_inside.php#list");
		        exit();
            }else{
				header("Location: lessons.php?error=Incorect User video_url or password");
		        exit();
			}
		}else{
			header("Location: lessons.php?error=Incorect User video_url or password");
	        exit();
		}
	}

}else{
	header("Location: lessons.php?error");
	exit();
}