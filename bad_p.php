<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
include 'dbcon.php';
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$age=$_POST['age'];
$id=$_POST['id'];
$type=$_POST['name_come'];
$sql = "INSERT INTO cases (name, phone, address, age, date)
  VALUES ('$name', '$phone', '$address', '$age',NOW())";
  $conn->exec($sql);
    if($type=='admin')  
    {
       $stmt = $conn->prepare("SELECT * FROM admins where admins.id='$id'");
  $stmt->execute();
    $v=$stmt->fetch();
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['phone']=$v['phone'];
        include 'admin.php';
     echo "<script> alert('تم اضافة الحالة بنجاح'); </script>";
        include 'db_close.php';

    }
    else if($type=='doctor'){
         $stmt = $conn->prepare("SELECT * FROM doctors where doctors.id='$id'");
  $stmt->execute();
    $v=$stmt->fetch(); 
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['specialization']=$v['specialization'];
    $GLOBALS['phone']=$v['phone'];
    $GLOBALS['age']=$v['age'];
        include 'doctor_main.php';
     echo "<script> alert('تم اضافة الحالة بنجاح'); </script>";
        include 'db_close.php';

    }
}
else{
    include 'index.php';
}
?>