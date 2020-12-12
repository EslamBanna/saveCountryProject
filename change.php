<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'dbcon.php';
   session_start();
    $id=$_POST['id'];
    $stmt = $conn->prepare("SELECT name, address, job, age, status,phone FROM members where members.id ='$id'");
  $stmt->execute();
 $v=$stmt->fetch();
    $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['job']=$v['job'];
    $GLOBALS['status']=$v['status'];
    $GLOBALS['age']=$v['age'];
    $GLOBALS['status']=$v['status'];
    $GLOBALS['phone']=$v['phone'];
    include 'db_close.php';
}
else{
    include 'index.php';
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>تعديل بيانات العضو</title>
    <meta charset="utf-8"/>
<meta name="description" content="tanta"/>
    <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="shortcut icon" href="images/title.jpg" type="image/x-icon"/>    
    </head>
    <body>
   <div class="container">
        <nav class="navbar navbar-dark bg-dark">
  <img src="images/title.jpg" width="60" height="60" alt="" loading="lazy"/>
           <ul>
               <a class="navbar-brand" href="index.php">تسجيل الخروج</a>
               <a class="navbar-brand" href="about_us.php">About us</a>
            </ul>
        </nav>
       <form action="save_change1.php" method="post">
     <div class="card x">
  <div class="card-header">
    البيانات الخاصة بالعضو
  </div>
  <div class="card-body">
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" readonly name="id" value='<?php echo $GLOBALS['id']; ?>'/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" readonly name="phone" value='<?php echo $GLOBALS['phone']; ?>'/>
    </div>
  </div>
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">اسم العضو</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" autocomplete="off" autofocus value='<?php echo $GLOBALS['name']; ?>'/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" autocomplete="off"  value='<?php echo $GLOBALS['address']; ?>'/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">السن</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="age" autocomplete="off" value='<?php echo $GLOBALS['age']; ?>'/>
    </div>
  </div>
        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">الوظيفة</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="job" autocomplete="off" value='<?php echo $GLOBALS['job']; ?>'/>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">الحالة</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="status" autocomplete="off" value='<?php echo $GLOBALS['status']; ?>'/>
    </div>
  </div>
              <button type="sumit" class="btn btn-warning">حفظ</button>

            </div>
</div>
       </form>
               <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>
        </div>
    </body>
</html>