
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'dbcon.php';
$phone=$_POST['phone'];
$pwd=$_POST['password'];
$phone=stripslashes($phone);
$pwd=stripslashes($pwd);
$stmt = $conn->prepare("SELECT * FROM doctors where doctors.phone ='$phone'");
  $stmt->execute();
 $v=$stmt->fetch();
        if (password_verify($pwd,$v['password']))
        {
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['specialization']=$v['specialization'];
    $GLOBALS['phone']=$v['phone'];
    $GLOBALS['age']=$v['age'];
    include 'db_close.php';        
    include 'doctor_main.php';
        }
   
    else{
        include 'loginform2.php';       
        echo"<script> alert('عفوا بيانات التسجيل الخاصة بك غير صحيحة الرجاء اعادة المحاولة وفي حالة تكرار المشكلة قم بالتواصل مع الأدمن');</script>";
    }
}
else{
        include 'loginform2.php';       
}
?>