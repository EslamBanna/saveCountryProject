<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'dbcon.php';  
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $pwd=$_POST['password'];
    $address =$_POST['address'];
    $job =$_POST['job'];
    $age =$_POST['age'];
   $stmt = $conn->prepare("SELECT phone FROM members where members.phone ='$phone'");
  $stmt->execute();
 $v=$stmt->fetch();
if($phone==$v['phone'])
{
    include 'error1.php';
}
    else{
      $pwd=password_hash($pwd,PASSWORD_BCRYPT);  
$sql = "INSERT INTO members (name, password, address, age, phone, job,status)
VALUES ('$name', '$pwd', '$address', '$age', '$phone', '$job','0')";
  $conn->exec($sql);  
    $GLOBALS['name']=$name;
    $GLOBALS['phone']=$phone;
    $GLOBALS['address']=$address;
    $GLOBALS['job']=$job;
    $GLOBALS['age']=$age;
    $GLOBALS['id']= $conn->lastInsertId();
    $GLOBALS['status']='0';
        include 'db_close.php';
        include 'login1.php';
        echo"<script> alert('تم اضافة الحساب بنجاح,,, قم بكتابة رقم الهاتف وكلمة السر التي قومت بادخلها في الحقول التالية');</script>";

    }
        
}
else{
    include 'db_close.php';
    include 'create_m.php';
}

?>