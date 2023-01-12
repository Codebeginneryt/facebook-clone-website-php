<?php
include 'C:\xampp\htdocs\facebook/db.php';
if (isset($_POST['submit'])) {
	@$photo = $_FILES['photo'];

	//print_r($photo);
	$filename = @$photo['name'];
	$filepath = @$photo['tmp_name'];
	$fileerror = @$photo['error'];
	if ($fileerror == 0) {
		$destfile = 'images/'.$filename;
		//echo $destfile;
		move_uploaded_file($filepath, $destfile);
		$insertuery = "INSERT into post(image ,dt) values('$destfile', current_timestamp());";
		$query = mysqli_query($conn, $insertuery);
	}
}

?>