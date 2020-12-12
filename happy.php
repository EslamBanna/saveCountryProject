<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
 include 'dbcon.php';
    $id=$_POST['id'];   
  $sql = "UPDATE members SET volunteer ='1' WHERE id='$id'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
    $stmt = $conn->prepare("SELECT * FROM members where members.id='$id'");
  $stmt->execute();
    $v=$stmt->fetch();
    $GLOBALS['id']=$v['id'];
    $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['job']=$v['job'];
    $GLOBALS['status']=$v['status'];
    $GLOBALS['phone']=$v['phone'];
    $GLOBALS['age']=$v['age'];
          include 'db_close.php';
        include 'member_main.php';
    echo "<script> alert('شكرا علي دعمك لأبناء القرية'); </script>";
}
else{
    include 'index.php';
}
?>