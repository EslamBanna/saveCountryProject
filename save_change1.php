<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'dbcon.php';  

    $name =$_POST['name'];
    $address =$_POST['address'];
    $job =$_POST['job'];
    $age =$_POST['age'];
    $status=$_POST['status'];
    $id=$_POST['id'];
    $phone=$_POST['phone'];
     $sql = "UPDATE members SET name='$name', address='$address', job='$job', age='$age', status='$status' WHERE id='$id'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
include'db_close.php';
    $GLOBALS['id']=$id;
    $GLOBALS['name']=$name;
    $GLOBALS['address']=$address;
    $GLOBALS['job']=$job;
    $GLOBALS['status']=$status;
    $GLOBALS['phone']=$phone;
    $GLOBALS['age']=$age;
    include'member_main.php';
echo "<script>alert('تم تحديث البيانات بنجاح');</script>";
}
else{
    include 'index.php';
}
?>