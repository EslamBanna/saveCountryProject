<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'dbcon.php';
    $m_name=$_POST['m_name'];
    $subject=$_POST['subject'];
    $m_phone=$_POST['m_phone'];
     $sql = "INSERT INTO needs (who, date, phone, subject)
  VALUES ('$m_name', NOW(), '$m_phone', '$subject')";
  $conn->exec($sql);
    $stmt = $conn->prepare("SELECT * FROM members where members.phone='$m_phone'");
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
    echo "<script> alert('تم اضافة الطلب بنجاح'); </script>";
        include 'db_close.php';

}
else{
    include 'index.php';
}

?>