<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'dbcon.php';  
    $subject =$_POST['subject'];
   $admin_id=$_POST['id'];
   $sql = "DELETE FROM answer WHERE id='$subject'";
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
        echo"<script> alert('تم حذف العنصر بنجاح');</script>";   
}
else{
    include 'index.php';
}
?>