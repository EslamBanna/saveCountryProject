<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'dbcon.php';
    $res_name=$_POST['name'];
    $res_phone=$_POST['phone'];
    $id=$_POST['id'];
   $type=$_POST['who'];
    $stmt = $conn->prepare("SELECT * FROM needs where needs.id ='$id'");
  $stmt->execute();
 $v=$stmt->fetch();
    $name=$v['who'];
    $phone=$v['phone'];
    $subject=$v['subject'];
    if($id==$v['id'])
    {
    $sql = "INSERT INTO answer (who_need, n_phone, who_answer, a_phone, subject)
VALUES ('$name', '$phone', ' $res_name', ' $res_phone', '$subject')";
  $conn->exec($sql); 
    $sql = "DELETE FROM needs WHERE id='$id'";
  $conn->exec($sql);
    if($type=='member')
    {
            $stmt = $conn->prepare("SELECT * FROM members where members.phone='$res_phone'");
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
       else if($type=='doctor'){
         $stmt = $conn->prepare("SELECT * FROM doctors where doctors.phone='$res_phone'");
  $stmt->execute();
    $v=$stmt->fetch(); 
    $GLOBALS['id']=$v['id'];
     $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['specialization']=$v['specialization'];
    $GLOBALS['phone']=$v['phone'];
    $GLOBALS['age']=$v['age'];
          include 'db_close.php';
           include 'doctor_main.php';
    echo "<script> alert('شكرا علي دعمك لأبناء القرية'); </script>";

    }
    }
else
{
    include 'index.php';
}
}

?>