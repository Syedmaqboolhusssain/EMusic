 <?php
$error="Connection error";
$host='sql6.freemysqlhosting.net';
$user='sql6112634';
$pass='9zdQqiq6ml';
$db=' sql6112634';
$port='3306';
$connect=mysqli_connect($host,$user,$pass,$db,$port);
	if($connect){
		}
	else echo $error;
?>
