 <?php
$error="Connection error";
$host='localhost';
$user='root';
$pass='';
$db='iad';
$connect=mysqli_connect($host,$user,$pass,$db);
	if($connect){
		}
	else echo $error;
?>
