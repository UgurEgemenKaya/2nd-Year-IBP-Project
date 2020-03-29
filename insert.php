<?php session_start(); ?>
<?php
header("Location: login.php", true, 301);
$servername = "fdb23.awardspace.net";
$username = "2811815_itp";
$password = "egemen2395";
$dataB="2811815_itp";
$name=$_POST['name'];
$email=$_POST['email']; 
$surname=$_POST['surname']; 
$pass=$_POST['pass'];
$conn = mysqli_connect($servername, $username, $password,$dataB);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Connection Failed";
}

$sql = "INSERT INTO kullanici (AD, SOYAD, EMAIL, SIFRE) VALUES ('$name', '$surname', '$email', '$pass')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>