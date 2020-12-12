<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'dbcon.php';  
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $pwd=$_POST['password'];
    $address =$_POST['address'];
    $spc =$_POST['spc'];
    $age =$_POST['age'];
   $admin_id=$_POST['id'];
      $pwd=password_hash($pwd,PASSWORD_BCRYPT);  
$sql = "INSERT INTO doctors (name, password, address, age, phone, specialization)
VALUES ('$name', '$pwd', '$address', '$age', '$phone', '$spc')";
        $conn->exec($sql);  
        include 'db_close.php';
        include 'loginform2.php';
        echo"<script> alert( 'تم اضافة الحساب بنجاح,,, قم بكتابة رقم الهاتف وكلمة السر التي قومت بادخلها في الحقول التالية');</script>";
}
else{
    include 'index.php';
}
?>