 <?php
$error="Connection error";
$host='sql6.freemysqlhosting.net';
$user='sql6112634';
$pass='9zdQqiq6ml';
$db='sql6112634';
try {
    $connect = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
