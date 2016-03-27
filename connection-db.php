 <?php
$error="Connection error";
$host='localhost';
$user='root';
$pass='';
$db='iad';
$connect=mysql_connect($host,$user,$pass);
$connect_db=mysql_select_db($db);
	if($connect && $connect_db){
		}
	else echo $error;
?>