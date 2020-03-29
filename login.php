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
$dataB="2811815_itp";
$name = $email = $surname = $pass = "";
$conn = mysqli_connect($servername, $username, $password,$dataB);

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
					<li><a href="register.php"><strong>Register</strong></a></li>
					<li><a href="login.php"><strong>Log In</strong></a></li>
					<li><input type="text" placeholder="Search.."></li>
				</ul>
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
				
			<form method="post" action="logcheck.php">
			E-Mail: <input type="text" name="email" value="<?php echo $email;?>">
			<br><br>
			Password: <input type="password" name="pass" value="<?php echo $pass;?>">
			<br><br>
			<input type="submit" name="submit" value="Submit">  
			</form>
			<br><br><br><br><br><br><br><br><br><br><br><br>
		</div>

	</div>
	<footer>
		Made by Egemen - 2012010217049 This website prepared on <time>31.08.2018</time>.
	</footer>
</body>
</html>
