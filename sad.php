<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'dbcon.php';
    $people=$_POST['people'];
    $id=$_POST['id'];
    $stmt = $conn->prepare("SELECT * FROM members where members.id='$id'");
  $stmt->execute();
    $v=$stmt->fetch();
    $GLOBALS['id']=$v['id'];
    $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['job']=$v['job'];
    $GLOBALS['phone']=$v['phone'];
    $GLOBALS['age']=$v['age'];
    $GLOBALS['status']='1';
    $name=$v['name'];
        $address=$v['address'];
        $phone=$v['phone'];
        $age=$v['age'];
 $sql = "UPDATE members SET status='1' WHERE id='$id'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
    $sql = "INSERT INTO cases (name, address, phone, age, date)
  VALUES ('$name', '$address', '$phone', '$age', NOW())";
  $conn->exec($sql);
     $sql = "INSERT INTO friction (name)
  VALUES ('$people')";
  $conn->exec($sql);
    include 'member_main.php';
    echo "<script> alert('تم ابلاغ الدكاترة بالأمر ونتعهد بالسرية التامة لهذا الأمر وندعوا الله ان يتم عليك بالشفاء العاجل') </script>";
}
else{
    include 'index.php';
}

?>