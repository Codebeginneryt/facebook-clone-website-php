<?php
include 'C:\xampp\htdocs\facebook/users.php';
include 'C:\xampp\htdocs\facebook/upload.php';
session_start();
include 'C:\xampp\htdocs\facebook/db.php';
//$query = mysql_query("select * from login where fname = $email");
//$row = mysql_fetch_array($query);
//print_r($row);

?>

<!DOCTYPE html>
<html>
<head>
	<title>facebook.com</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap');
</style>
<body>
	<!-- facebook website navbar created -->
	<div class="navbar" style="position: sticky;">
		<div class="logo">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
		</div>
		<div class="search-bar">
			<input type="text" name="" placeholder="Search facebook">
		</div>
		<div class="items">
			<a href=""><i class="fa-sharp fa-solid fa-house"></i></a>
			<a href=""><i class="fa-solid fa-tv"></i></a>
			<a href=""><i class="fa-solid fa-shop"></i></a>
			<a href=""><i class="fa-solid fa-user-group"></i></a>
			<a href=""><i class="fa-sharp fa-solid fa-gamepad"></i></a>
		</div>
		<div class="account"> 
			<a href="account.php"><img src="images/loko.jpg"></a>
			<a href="account.php" style="text-decoration: none; color: black;"><p style="color: black;"><?php 

			echo $_SESSION['email'];

			?></p></a>
			<a href="index.php"><i class="fa-regular fa-plus"></i></a>
			<a href=""><i class="fa-solid fa-bell"></i></a>
			<a href="#"><i class="fa-solid fa-user" id="accountbtn"></i></a>
		</div>
	</div>
	<div class="account-box" id="showaccount">  
		<div class="some">
			<a href="account.php"><img src="images/loko.jpg"></a>
			<a href="account.php"><p><?php 

			echo $_SESSION['email'];

			?><br><span>See your profile</span></p></a>
		</div>
		<hr>
		<div class="some">
			<a href="index.php"><i class="fa-regular fa-plus"></i></a>
			<a href="index.php"><p>Add other account<br><span>New account</span></p></a>
		</div>
		<div class="some">
			<a href=""><i class="fa-solid fa-gear"></i></a>
			<a href=""><p>Settings & Privacy</p></a>
		</div>
		<div class="some">
			<a href=""><i class="fa-solid fa-circle-question"></i></a>
			<a href=""><p>Help & Support</p></a>
		</div>
		<div class="some">
			<a href="index.php"><i class="fa-solid fa-right-from-bracket"></i></a>
			<a href="index.php"><p>Log Out</p></a>
		</div>
	</div>
	<div class="main">
	    <div class="left-box">
	    	<div class="list">
	    	<a href="account.php"><img src="images/loko.jpg"></a>
	    	<a href="account.php"><p><?php 

			echo $_SESSION['email'];

			?></p></a>
	    </div>
	    <div class="list">
	    	<a href=""><img src="images/covid.jpg"></a>
	    	<a href=""><p>COVID-19 Information Center</p></a>
	    </div>
	     <div class="list">
	    	<a href=""><img src="images/friend.png"></a>
	    	<a href=""><p>Friends</p></a>
	    </div>
	       <div class="list">
	    	<a href=""><img src="images/messenger.png"></a>
	    	<a href=""><p>Messenger</p></a>
	    </div>
	     <div class="list">
	    	<a href=""><img src="images/page.jpg"></a>
	    	<a href=""><p>Pages</p></a>
	    </div>
	     <div class="list">
	    	<a href=""><img src="images/market.jpg"></a>
	    	<a href=""><p>Marketplace</p></a>
	    </div>
	     <div class="list">
	    	<a href=""><img src="images/video.png"></a>
	    	<a href=""><p>Videos</p></a>
	    </div>
	     <div class="list">
	    	<a href=""><img src="images/event.png"></a>
	    	<a href=""><p>Events</p></a>
	    </div>
	     <div class="list">
	    	<a href=""><img src="images/down.png"></a>
	    	<a href=""><p>See More</p></a>
	    </div>
        </div>
        <div class="middle-box">
        	<div class="story">
        		<div class="story-box">
        			<div class="image">
        				<img src="images/loko.jpg">
        			</div>
        			<div class="text">
        				<a href=""><i class="fa-regular fa-plus"></i></a>
        				<a href="">Create story</a>
        			</div>
        		</div>
        		
 </div>
        	<div class="upload">
        		<div class="user-text">
        			<img src="images/loko.jpg">
        			<input type="text" name="" placeholder="What's in your mind ?">
        		</div>

        		<div class="item">
        			<a><label for="photo"><i class="fa-regular fa-image" style="color: red; font-size: 30px; cursor: pointer;"></i></label> Photo</a>
        			<a><label for="submit"><i class="fa-solid fa-paper-plane" style="color:rgb(20,180,40); font-size: 30px; margin-left: 200px;"></i></label> Upload</a>
        		</div>
        	</div>
        	<form action="/facebook/home.php" method="POST" enctype="multipart/from-data">
        	<div class="post">
        		<div class="post-user">
        			<a href="account.php"><img src="images/loko.jpg"></a>
	    	<a href="account.php"><p><?php 

			echo $_SESSION['email'];

			?></p></a>
        		</div>
        		<div class="post-photo">
        				<input type="file" name="photo" class="form-control" value="" style="display: none;" id="photo">
        			<img src="images/rohit1.jpg" >
        		</div>
        		<div class="like">
        			<a><i class="fa-solid fa-thumbs-up" id="like"></i> Like</a>
        			<a href="" style="margin-left: 250px;"><i class="fa-regular fa-comment"></i> Comment</a>
        			<button type="submit" name="submit" id="submit" style="cursor: pointer; display: none;">word</button>
        		</div>
        	</div>
        </form>
        	<div class="post">
        		<div class="post-user">
        			<a href=""><img src="images/loko.jpg"></a>
	    	<a href=""><p>Rohit Sharma</p></a>
        		</div>
        		<div class="post-photo">
        			<img src="images/rohit2.jpg">
        		</div>
        		<div class="like">
        			<a><i class="fa-solid fa-thumbs-up" id="like"></i> Like</a>
        			<a href="" style="margin-left: 250px;"><i class="fa-regular fa-comment"></i> Comment</a>
        		</div>
        	</div>
        	
        </div>
       
        <div class="right-box" id="right-box">
        	<div class="sponserd">
        		<h1>Sponsored</h1>
        		<div class="banner">
        		<a href="#"><img src="images/banner1.png"></a>
        		<a href="#"><p>Learn Programing According our choice in one click.</p></a>
        	</div>
        	<div class="banner">
        		<a href="#"><img src="images/banner2.jpg"></a>
        		<a href="#"><p>Learn HTML, CSS and Javascript in one click.</p></a>
        	</div>
        	</div>
        	<div class="contact">
        		<h1>Contacts</h1>
        			<?php
				$sql = "select * from login";
				$list = mysqli_query($conn, $sql);
				while($result = mysqli_fetch_array($list)){
				?>
        		<div class="list">
	    	<a href="account.php"><img src="images/loko.jpg"></a>
	    	<a href="account.php"><p><?php echo $result['email']; ?></p></a>
	    </div>
	    <?php 
			      }
				?>
        	</div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="javascript/home.js"></script>
</html>