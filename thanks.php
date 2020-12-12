<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'dbcon.php';
    $subject=$_POST['subject'];
    $phone=$_POST['phone'];
    $name=$_POST['name'];
    echo "subject ".$subject;
$sql="INSERT INTO come (who, phone,subject) VALUES ('$name', '$phone', '$subject')";
  $conn->exec($sql);
    include 'db_close.php';
}
else{
    include 'index2.php';
}
?>