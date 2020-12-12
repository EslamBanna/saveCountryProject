
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'dbcon.php';
$phone=$_POST['phone'];
$pwd=$_POST['password'];
$phone=stripslashes($phone);
$pwd=stripslashes($pwd);
$stmt = $conn->prepare("SELECT * FROM admins where admins.phone ='$phone'");
  $stmt->execute();
 $v=$stmt->fetch();
 if (password_verify($pwd,$v['password']))
    {
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['phone']=$v['phone'];
    include 'db_close.php';
    include 'admin.php';
    }
    else{
        include 'loginform3.php';       
        echo"<script> alert('عفوا بيانات التسجيل الخاصة بك غير صحيحة الرجاء اعادة المحاولة وفي حالة تكرار المشكلة قم بالتواصل مع الأدمن');</script>";
    }
   

include 'db_close.php';
}
else{
        include 'loginform3.php';       
}
?>