<?php
session_start();
include "register/config/db.php";

if (isset($_POST['date']) && isset($_POST['bd'])
    && isset($_POST['br']) && isset($_POST['price'])
    && isset($_POST['county']) && isset($_POST['text']) && isset($_POST['name']) ) {

		

			function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;	
			}

			$date = validate($_POST['date']);
			$br = validate($_POST['br']);
			$bd = validate($_POST['bd']);
			$county = validate($_POST['county']);
			$text = validate($_POST['text']);
			$price = validate($_POST['price']);
			$name = validate($_POST['name']);


			
			
			if (empty($date)) {
				header("Location: index.php?error=date is required&$user_data");
				exit();
			}else if(empty($br)){
				header("Location: index.php?error=br is required&$user_data");
				exit();
			}
			else if(empty($bd)){
				header("Location: index.php?error=bd account is required&$user_data");
				exit();
			}

			else if(empty($price)){
				header("Location: index.php?error=your price is required&$user_data");
				exit();
			}
			else if(empty($text)){
				header("Location: index.php?error=your text is required&$user_data");
				exit();
			}
			else if(empty($county)){
				header("Location: index.php?error=your couty is required&$user_data");
				exit();
			}
			else if(empty($name)){
				header("Location: index.php?error=your name is required&$user_data");
				exit();
			}
			else{

				$fileName = $_FILES["image"]["name"];
				$fileSize = $_FILES["image"]["size"];
				$tmpName = $_FILES["image"]["tmp_name"];
			
				$validImageExtension = ['jpg', 'jpeg', 'png'];
				$imageExtension = explode('.', $fileName);
				$imageExtension = strtolower(end($imageExtension));
				if ( !in_array($imageExtension, $validImageExtension) ){
				 header("location:index.php?error-image-not-valid");
				}
				else if($fileSize > 1000000){
					header("location:index.php?error-image-is-to-big");
		
				}
				else{
				  $newImageName = uniqid();
				  $newImageName .= '.' . $imageExtension;	
				  move_uploaded_file($tmpName, 'img/' . $newImageName);
		

				$sql2 = "INSERT INTO house(name, image, date, text, br ,bd, price, county ) VALUES( '$name', '$newImageName','$date', '$text', '$br', '$bd' , '$price' , '$county')";
				$result2 = mysqli_query($conn, $sql2);
				if ($result2) {
					header("Location:index.php?success=Your message has been deliverd");
					exit();
				}
		}}}else {
				header("Location: index.php?error=unknown error occurred&$user_data");
			exit();
		}
