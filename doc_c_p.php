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
      $stmt = $conn->prepare("SELECT * FROM admins where admins.id='$admin_id'");
  $stmt->execute();
    $v=$stmt->fetch();
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['phone']=$v['phone'];
        include 'db_close.php';
        include 'admin.php';
        echo"<script> alert('تم اضافة الحساب بنجاح');</script>";   
}
else{
    include 'index.php';
}
?>