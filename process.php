<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'dbcon.php';
$phone=$_POST['phone'];
$pwd=$_POST['password'];
$phone=stripslashes($phone);
$pwd=stripslashes($pwd);
$stmt = $conn->prepare("SELECT * FROM members where members.phone ='$phone'");
  $stmt->execute();
 $v=$stmt->fetch();
    if (password_verify($pwd,$v['password']))
    {
         $GLOBALS['id']=$v['id'];
    $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['job']=$v['job'];
    $GLOBALS['status']=$v['status'];
    $GLOBALS['phone']=$v['phone'];
    $GLOBALS['age']=$v['age'];
    include 'db_close.php';
    include 'member_main.php';
    }
    else{
        include 'login1.php';       
        echo"<script> alert('عفوا بيانات التسجيل الخاصة بك غير صحيحة الرجاء اعادة المحاولة وفي حالة تكرار المشكلة قم بالتواصل مع الأدمن');</script>";
    }
}
else{
    include 'login1.php';
}
?>