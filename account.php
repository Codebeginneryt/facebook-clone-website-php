<?php
include 'C:\xampp\htdocs\facebook/users.php';
session_start();
include 'C:\xampp\htdocs\facebook/db.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<link rel="stylesheet" type="text/css" href="CSS/account.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');
</style>
<body>
<!-- Account page navbar--->
<div class="navbar">
	<div class="logo">
		<h1>facebook</h1>
	</div>
	<div class="item">
		<a href="home.php"><i class="fa-sharp fa-solid fa-house"></i></a>
		<a href=""><i class="fa-solid fa-tv"></i></a>
		<a href="index.php"><i class="fa-regular fa-plus"></i></a>
	</div>
</div>
<div class="profile">
	<div class="photo">
		<label for="file" id="uplodbtn"><img src="images/loko.jpg" id="photo"></label>
		<input type="file" name="image" id="file" accept="image/jpeg, image/png, image/jpg" style="display: none;">
	</div>
	<div class="name">
		<p><?php 

			echo $_SESSION['email'];

			?></p>
	</div>
</div>
<!-- <?php
/*

if (isset($_FILES["image"]["name"])) {
	$email = $_POST["email"];

	$imageName = $_FILES["image"]["name"];
	$imageSize = $_FILES["image"]["size"];
	$tmpName = $_FILES["image"]["tmp_name"];

	$validImageExtension = ['jpg', 'jpeg', 'png'];
	$imageExtension = explode('.', $imageName);
	$imageExtension = strtolower(end($imageExtension));
	if (!in_array($imageExtension, $validImageExtension)) {
		echo "
		<script>
		alert('Invalid Image Extension');
		document.location.href = '../updateimageprofile';
		</script>
		";
	}
	elseif ($imageSize > 1200000) {
		echo "
		<script>
		alert('Image size is so large');
		document.location.href = '../updateimageprofile';
		</script>
		";
	}
	else{
		$newImageName .- "." . $imageExtension;
		$query = "UPDATE login SET image = '$newImageName' WHERE email = $email";
		mysql_query($conn, $query);
		move_uploaded_file($tmpName, 'images/' . $newImageName);
	}
}

*/
?>
-->
<div class="option">
	<button>Edit</button>
	<button>Photos</button>
	<button>Videos</button>
</div>
<script type="text/javascript" src="javascript/home.js"></script>
</body>
</html>