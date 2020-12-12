<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $comp=$_POST['comp'];
    include 'dbcon.php';
    $sql = "INSERT INTO complaints (subject,date)
  VALUES ('$comp',NOW())";
  // use exec() because no results are returned
  $conn->exec($sql);
    include 'db_close.php';
    include 'complaints2.php';
    echo "<script> alert('تم اضافة الاقتراح بنجاح');</script>";
}
else{
    
    include 'complaints2.php';
}


?>