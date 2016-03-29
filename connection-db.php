 <?php
$error="Connection error";
$host='sql6.freemysqlhosting.net';
$user='sql6112634';
$pass='9zdQqiq6ml';
$db=' sql6112634';
$connect=mysqli_connect($host,$user,$pass,$db);
	if($connect){
		}
	else echo $error;
?>
