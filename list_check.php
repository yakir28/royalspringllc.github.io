<?php
session_start();

include "db.php";


if (isset($_POST['text']) && isset($_POST['bd'])
&& isset($_POST['county']) && isset($_POST['br'])
&& isset($_POST['price']) && isset($_POST['date'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$text = validate($_POST['text']);
	$br = validate($_POST['br']);
    $bd = validate($_POST['bd']);
	$date = validate($_POST['date']);
    $price = validate($_POST['price']);
	$county= validate($_POST['county']);
	$headline= validate($_POST['headline']);
	$image= validate($_POST['image']);
	$name= validate($_POST['name']);

	if (empty($text)) {
		header("Location: house_list.php?error=text is required");
	    exit();
	}else if(empty($br)){
        header("Location: house_list.php?error=br is required");
	    exit();
	}else if(empty($bd)){
        header("Location: house_list.php?error=bd is required");
	    exit();
	}else if(empty($date)){
        header("Location: house_list.php?error=date is required");
	    exit();
	}else if(empty($price)){
        header("Location: house_list.php?error=price is required");
	    exit();
	}else if(empty($county)){
        header("Location: house_list.php?error=county is required");
	    exit();
	}else if(empty($image)){
        header("Location: house_list.php?error=image is required");
	    exit();
	}else if(empty($name)){
        header("Location: house_list.php?error=name is required");
	    exit();
	}
    else{
		


		$sql = "SELECT * FROM house WHERE text='$text' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['text'] === $text && $row['date'] === $date) {
            	$_SESSION['text'] = $row['text'];
				$_SESSION['price'] = $row['price'];
                $_SESSION['bd'] = $row['bd'];
				$_SESSION['br'] = $row['br'];
				$_SESSION['date'] = $row['date'];
				$_SESSION['county'] = $row['county'];
				$_SESSION['headline'] = $row['headline'];
				$_SESSION['image'] = $row['image'];
				$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location:house-details.php");
		        exit();
            }else{
				header("Location: house_list.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: house_list.php?error=Incorect User name or password");
	        exit();
		}
	}

}else{
	header("Location: house_list.php");
	exit();
}