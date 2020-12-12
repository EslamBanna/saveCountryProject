<?php
echo $_POST['id'];
?>
<!DOCTYPE html>
<html>
<head>
   <title>ادارة ازمات قرية ميت حبيش البحرية</title>
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
               <a class="navbar-brand" href="about_us.php">عن الموقع</a>
            </ul>
        </nav>
<form action="bad_p.php" method="post">
       <div class="card">
  <div class="card-header">
    املا بيانات المريض
  </div>
  <div class="card-body">
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">اسم الحالة</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autofocus name="name" autocomplete="off"/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">رقم التيلفون</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="phone" autocomplete="off"/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="address" autocomplete="off"/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">السن</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="age" autocomplete="off"/>
    </div>
  </div>
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>        
        <input type="hidden" name="name_come" value="<?php echo $_POST['name'] ?>"/>        
      <button type="submit" class="btn btn-danger btn-lg ">اضافة</button>

              </div>
</div>
       </form>
       
       
                       <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>
        </div>        
    </body>
</html>
