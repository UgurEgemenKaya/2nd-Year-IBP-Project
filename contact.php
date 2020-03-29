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
		<div id="notPost">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001.2550114756!2d32.64944681495948!3d41.21621291455287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354ac4492953f%3A0xab3b48ed0392a743!2sKarab%C3%BCk+%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1471528432043"></iframe>
			<br>Adress:	Balıklar Kayası Mevkii Demir Çelik Kampüsü Karabük<br>
			Telephone: +90370 444 0 478
		</div>

	</div>
	<footer>
		Made by Egemen - 2012010217049 This website prepared on <time>31.08.2018</time>.
	</footer>
</body>
</html>
