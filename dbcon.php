 <?php
$servername = "sql304.eb2a.com";
$username = "eb2a_26080184";
$password = "123456789";
$option=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8');
try {
  $conn = new PDO("mysql:host=$servername;dbname=eb2a_26080184_country", $username, $password,$option);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 