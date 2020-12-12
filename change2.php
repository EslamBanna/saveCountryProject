<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'dbcon.php';
    $id=$_POST['id'];
    $stmt = $conn->prepare("SELECT name, address, specialization, age,phone FROM doctors where doctors.id ='$id'");
  $stmt->execute();
 $v=$stmt->fetch();
    $GLOBALS['name']=$v['name'];
    $GLOBALS['address']=$v['address'];
    $GLOBALS['id']=$id;
    $GLOBALS['age']=$v['age'];
    $GLOBALS['specialization']=$v['specialization'];
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
   <title>تعديل بيانات الدكتور</title>
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
               <a class="navbar-brand" href="complaints2.php">suggestions</a>
               <a class="navbar-brand" href="about_us.php">About us</a>
            </ul>
        </nav>
       <form action="save_change2.php" method="post">
        <div class="card x">
  <div class="card-header">
    البيانات الخاصة بالعضو
  </div>
  <div class="card-body">
         <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly name="id" value='<?php echo $GLOBALS['id']; ?>'/>
    </div>
  </div>
           <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3"  readonly name="phone" value='<?php echo $GLOBALS['phone']; ?>'/>
    </div>
  </div>
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">اسم الدكتور</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name" autofocus autocomplete="off" value='<?php echo $GLOBALS['name']; ?>'/>
    </div>
  </div>
         <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">التخصص</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="specialization" autocomplete="off"  value='<?php echo $GLOBALS['specialization']; ?>'/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="address" autocomplete="off" value='<?php echo $GLOBALS['address']; ?>'/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">السن</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="age" autocomplete="off" value='<?php echo $GLOBALS['age']; ?>'/>
    </div>
  </div>
 
              <button type="submit" class="btn btn-warning">تعديل البيانات</button>

            </div>
</div>
       </form>
             
       <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>
        </div>
    </body>
</html>