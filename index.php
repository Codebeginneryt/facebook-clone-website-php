<?php
$login = false;
$showError = false;
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include 'C:\xampp\htdocs\facebook/db.php';
   include 'C:\xampp\htdocs\facebook/users.php';
   $email = $_POST["email"];
   $password = $_POST["password"];
   $sql = "select * from login where email='$email' AND password='$password'";
   $result = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($result);
   if ($num == 1) {
   	   	   $login = true;
   	   	   session_start();
   	   	   $_SESSION['loggedin'] = true;
               $_SESSION['email'] = $email;
   	   	   $_SESSION['fname'] = $fname;
               $_SESSION['sname'] = $sname;
   	   	   header("location: home.php");
          $showAlert = true;
   	   }
   	   else{
   	   	$showError = true;
   	   	echo "<p style='color:red; background:pink; padding:10px;'><b>WARNING !</b> Check Username and Password not correctly.</p>";
   	   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Socialbook</title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/indexstyle.css">
<body>
<div class="main">
	<div class="container">
	<div class="logo-text">
		<h2>facebook</h2>
		<p>Connect with friends and the world<br>around you on facebook.</p>
	</div>
	<div class="form-box">
		<form action="/facebook/index.php" method="POST">
		<input type="text" name="email" placeholder="Email or Phone Number" id="email"><br>
		<input type="password" name="password" placeholder="Password" id="password"><br>
		<button class="log" type="submit">Log In</button><br><br>
		<a href="home.php">Forgot Password?</a><br><br>
		<center><hr width="80%"></center><br>
		<button class="new"><a href="signup.php">Create New Account</a></button>
	</form>
	</div>
</div>
</div>
</body>
</html>