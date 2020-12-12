<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
 include 'dbcon.php';   
    $id_s=$_POST['value'];
    $id_admin=$_POST['id'];
    $stmt = $conn->prepare("SELECT * FROM admins where admins.id='$id_admin'");
   $stmt->execute();
    $v=$stmt->fetch();
    $GLOBALS['id']=$v['id'];
    $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['phone']=$v['phone'];
    $stmt = $conn->prepare("SELECT * FROM members where members.id ='$id_s'");
  $stmt->execute();
 $k=$stmt->fetch(); 
    if($id_s==$k['id'])
{
        $GLOBALS['id']=$k['id'];
    $GLOBALS['name']=$k['name'];
    $GLOBALS['address']=$k['address'];
    $GLOBALS['job']=$k['job'];
    $GLOBALS['status']=$k['status'];
    $GLOBALS['phone']=$k['phone'];
    $GLOBALS['age']=$k['age'];
        include 'db_close.php';
        include 'member_data.php'; 
}
    else{
        include 'db_close.php';
        include 'admin.php';
    echo "<script> alert ('عفوا هذا الحساب غير موجود في قاعدة البيانات');</script>";
    }
}
else{
    include 'index.php';
}
?>