<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'dbcon.php';  
    $street_id =$_POST['street_id'];
   $admin_id=$_POST['id'];
  $sql = "DELETE FROM streets WHERE id='$street_id'";
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
        echo"<script> alert('تم حذف العنوان بنجاح');</script>";   
}
else{
    include 'index.php';
}
?>