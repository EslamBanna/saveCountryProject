<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'dbcon.php';  
    $street_name =$_POST['street_name'];
   $admin_id=$_POST['id'];
 $sql = "INSERT INTO streets (name)
  VALUES ('$street_name')";
  $conn->exec($sql);
  $stmt = $conn->prepare("SELECT * FROM admins where admins.id='$admin_id'");
  $stmt->execute();
    $v=$stmt->fetch();
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['phone']=$v['phone'];
        include 'db_close.php';
        include 'admin.php';
        echo"<script> alert('تم اضافة العنوان بنجاح');</script>";   
}
else{
    include 'index.php';
}
?>