<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'dbcon.php';  

    $name =$_POST['name'];
    $address =$_POST['address'];
    $id =$_POST['id'];
    $age =$_POST['age'];
    $specialization=$_POST['specialization'];
    $id=$_POST['id'];
    $phone=$_POST['phone'];
     $sql = "UPDATE doctors SET name='$name', address='$address', specialization='$specialization', age='$age' WHERE id='$id'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
include'db_close.php';
    $GLOBALS['id']=$id;
    $GLOBALS['name']=$name;
    $GLOBALS['address']=$address;
    $GLOBALS['specialization']=$specialization;
    $GLOBALS['phone']=$phone;
    $GLOBALS['age']=$age;
    include'doctor_main.php';
echo "<script>alert('تم تحديث البيانات بنجاح');</script>";
}
else{
    include 'index.php';
}
?>