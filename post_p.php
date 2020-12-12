<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'dbcon.php';
    $type=$_POST['type'];
    $subject=$_POST['news'];
    $title=$_POST['title'];
     $sql = "INSERT INTO posts (who, date, validity, subject)
  VALUES ('$title', NOW(), '$type', '$subject')";
  $conn->exec($sql);
if($type=='member')
{
   
    $stmt = $conn->prepare("SELECT * FROM members where members.name='$title'");
  $stmt->execute();
    $v=$stmt->fetch();
    $GLOBALS['id']=$v['id'];
    $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['job']=$v['job'];
    $GLOBALS['status']=$v['status'];
    $GLOBALS['phone']=$v['phone'];
    $GLOBALS['age']=$v['age'];
    include 'member_main.php';
    echo "<script> alert('تم نشر الخبر في اخر الأخبار بنجاح'); </script>";
}
    else if($type=='admin')
    {
       $stmt = $conn->prepare("SELECT * FROM admins where admins.name='$title'");
  $stmt->execute();
    $v=$stmt->fetch();
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['phone']=$v['phone'];
        include 'admin.php';
            echo "<script> alert('تم نشر الخبر في اخر الأخبار بنجاح'); </script>";

    }
    else if($type=='doctor'){
         $stmt = $conn->prepare("SELECT * FROM doctors where doctors.name='$title'");
  $stmt->execute();
    $v=$stmt->fetch(); 
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['specialization']=$v['specialization'];
    $GLOBALS['phone']=$v['phone'];
    $GLOBALS['age']=$v['age'];
        include 'doctor_main.php';
            echo "<script> alert('تم نشر الخبر في اخر الأخبار بنجاح'); </script>";

    }
        include 'db_close.php';

}
else{
    include 'index.php';
}

?>