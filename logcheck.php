<?php
session_start();
$servername = "fdb23.awardspace.net";
$username = "2811815_itp";
$password = "egemen2395";
$dataB="2811815_itp";
$email=$_POST['email'];
$pass=$_POST['pass'];
$conn = mysqli_connect($servername, $username, $password,$dataB);
$sonuc="";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Connection Failed";
}
	
	$sql_check = mysqli_query($conn,"SELECT * FROM kullanici WHERE EMAIL='".$email."' AND SIFRE='".$pass."' ");
	
	while( $sonuc=mysqli_fetch_row($sql_check) ){
                
    $_SESSION["adi"]=$sonuc[1];      //ISIM
    $_SESSION["soyadi"]=$sonuc[2];   	//SOYISIM
  
}
	
	if(mysqli_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $email;
    $_SESSION["pass"] = $pass;
    header("Location:index.php");
}
	else {
		if($email=="" or $pass=="") {
		echo "Lutfen kullanici adi ya da sifreyi bos birakmayiniz..!";
    }
    else {
        echo "Kullanici Adi/Sifre Yanlis.<br>";
    }
}

?>