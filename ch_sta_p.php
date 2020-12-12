<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
 include 'dbcon.php';
    $one=$_POST['all1'];
    $two=$_POST['all2'];
    $three=$_POST['all3'];
    $admin=$_POST['id'];
      $sql = " TRUNCATE TABLE sta  ";
  $conn->exec($sql);
   $sql = "INSERT INTO sta (all_cases, all_deaths, recovery_cases)
VALUES ('$one', '$two', '$three')";
  $conn->exec($sql);    
    $stmt = $conn->prepare("SELECT * FROM admins where admins.id='$admin'");
  $stmt->execute();
    $v=$stmt->fetch();
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['phone']=$v['phone'];
        include 'db_close.php';
        include 'admin.php';
        echo"<script> alert('تم تعديل البيانات بنجاح');</script>";      
}
else{
    include 'index.php';
}

?>