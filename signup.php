<?php
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
   include 'C:\xampp\htdocs\facebook/db.php';
   $fname = $_POST["fname"];
   $sname = $_POST["sname"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $cpassword = $_POST["cpassword"];
   $dob = $_POST["dob"];
   $exists = false;
   if(($password == $cpassword) && $exists==false){
   $sql = "INSERT INTO `login` (`fname`, `sname`, `email`, `password`, `cpassword`, `dob`, `dt`) VALUES ('$fname', '$sname', '$email', '$password', '$cpassword', '$dob', current_timestamp());";
   $result = mysqli_query($conn, $sql);
   if($result){
   $showAlert = true;
   header('location: index.php');
}
}
else{
	$showError = "Passwords do not match";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Facebook - Signup</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/signupstyle.css">
<body>
	<div class="navbar">
		<div class="logo">
			<h1>facebook</h1>
		</div>
		<div class="login">
			<button><a href="index.php">Log in to Existing Account</a></button>
		</div>
	</div>
	<div class="main">
		<div class="form-box" style="margin-top: 50px;">
			<h1>Create a new account</h1>
			<p><span>It's quick and easy.</span></p>
			<form action="/facebook/signup.php" method="POST">
			<input type="text" name="fname" placeholder="First name" id="fname">
			<input type="text" name="sname" placeholder="Surname" id="sname"><br>
			<input type="text" name="email" placeholder="Mobile number and email address" id="email"><br>
			<input type="password" name="password" placeholder="New password" id="password"><br>
			<input type="password" name="cpassword" placeholder="Confirm password" id="cpassword"><br>
			<p><span>Birthday</span></p>
			<input type="date" name="dob" id="dob"><br>
			<p><span>Gender</span></p>
			<div class="gender" style="display: inline-flex;">
			<p>Female</p><input type="radio" name="">	
			<p>Male</p>	<input type="radio" name="">
			<p>Other</p><input type="radio" name="">
			</div>
			<p><span>By clicking Sign Up, you agree to our <a href="">Terms, Data Policy</a> and <a href="">Cookie Policy</a>. You can easily access our account through Log In.</span></p>
			<button>Sign Up</button>				
			</form>
		</div>
	</div>
</body>
</html>