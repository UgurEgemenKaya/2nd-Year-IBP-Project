<?php session_start(); ?>
<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
<title>Welcome to fun!</title>
<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Roboto" rel="stylesheet">
<link href="style.css" rel="stylesheet"/>
</head>

<body>
	<header>
        <?php
$servername = "fdb23.awardspace.net";
$username = "2811815_itp";
$password = "egemen2395";

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Connection Failed";
}

?>
		
		<nav id="mainMenu">
			<a href="index.php" id="logo"><strong>STYRANDE</strong></a>
				<ul>
					<li><a href="index.php"><strong>Home Page</strong></a></li>
					<li><a href="about.php"><strong>About Us</strong></a></li>
					<li><a href="contact.php"><strong>Contact</strong></a></li>	
		<?php 		if($_SESSION["login"]=="true") {
						echo "<li><a href='#' ><strong> Welcome, ".$_SESSION["adi"]."</strong></a></li>";
						echo '<li><a href="logout.php"><strong> LogOut </strong></a></li></ul>';
						
					}
					else {
						echo '<li><a href="register.php"><strong>Register</strong></a></li>';
						echo '<li><a href="login.php"><strong>LogIn</strong></a></li>';
						echo '<li><input type="text" placeholder="Search.."></li>';
						echo '</ul>';
					}
		?>
		</nav>
	</header>
	
	<div id="sideSection">
		<nav id="sideBar">
			<ul>
				<li><a href="animals.php"><img src="images/animals.png"><strong> Animals</strong></a></li>
				<li><a href="cars.php"><img src="images/cars.png"><strong> Cars</strong></a></li>
				<li><a href="foods.php"><img src="images/foods.png"><strong> Food & Drinks</strong></a></li>
				<li><a href="funny.php"><img src="images/funny.png"><strong> Funny</strong></a></li>
				<li><a href="nature.php"><img src="images/nature.png"><strong> Nature</strong></a></li>
				<li><a href="sci-tech.php"><img src="images/sci-tech.png"><strong> Sci-Tech</strong></a></li>
				<li><a href="sports.php"><img src="images/sports.png"><strong> Sports</strong></a></li>
			</ul>
		
	</div>
	
	<div id="centerSection">
		<div id="post">
			<ul>
				
				<li><h1>Funny</h1><video width="500" height="auto" controls>
				<source src="https://img-9gag-fun.9cache.com/photo/a8o4vxd_460sv.mp4" type="video/mp4">
				</video></li><strong>Exploding Skier</strong>
				<p><button id="upVote" type="button"><img src="images/upVote.png"></button> <button id="downVote" type="button"><img src="images/downVote.png"></button>
				<button id="comment" type="button"><strong>Comment</strong></button></p>
				
				<li><video width="500" height="auto" controls>
				<source src="https://img-9gag-fun.9cache.com/photo/azXyvzm_460svvp9.webm" type="video/mp4">
				</video></li><strong> Kung-fu Panda</strong>
				<p><button id="upVote" type="button"><img src="images/upVote.png"></button> <button id="downVote" type="button"><img src="images/downVote.png"></button>
				<button id="comment" type="button"><strong>Comment</strong></button></p><br>
				
				<li><video width="500" height="auto" controls>
				<source src="https://img-9gag-fun.9cache.com/photo/aQ3bDOw_460svvp9.webm" type="video/mp4">
				</video></li><strong> They See Me Rolling..</strong>
				<p><button id="upVote" type="button"><img src="images/upVote.png"></button> <button id="downVote" type="button"><img src="images/downVote.png"></button>
				<button id="comment" type="button"><strong>Comment</strong></button></p><br>
				
				<li>
				<img src="https://img-9gag-fun.9cache.com/photo/aMj1XwG_460swp.webp" width="500" height="420">
				</li><strong> Metric System Rules!</strong>
				<p><button id="upVote" type="button"><img src="images/upVote.png"></button> <button id="downVote" type="button"><img src="images/downVote.png"></button>
				<button id="comment" type="button"><strong>Comment</strong></button></p><br><br>
				
				<li>
				<img src="https://img-9gag-fun.9cache.com/photo/anMZ0EB_460swp.webp" width="500" height="530">
				</li><strong> Aw Gawd Harry..</strong>
				<p><button id="upVote" type="button"><img src="images/upVote.png"></button> <button id="downVote" type="button"><img src="images/downVote.png"></button>
				<button id="comment" type="button"><strong>Comment</strong></button></p><br><br>
				
			</ul>
			
			
		</div>

	</div>
	<footer>
		Made by Egemen - 2012010217049 This website prepared on <time>31.08.2018</time>.
	</footer>
</body>
</html>
