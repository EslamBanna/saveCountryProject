<!DOCTYPE html>
<html>
<head>
   <title>نتيجة البحث</title>
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
       <div class="card">
  <div class="card-header">
    بيانات العضو
  </div>
  <div class="card-body">
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly value="<?php echo $GLOBALS['id'] ?>"/>
    </div>
  </div>
              <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">الأسم</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly value="<?php echo $GLOBALS['name'] ?>"/>
    </div>
  </div>
               <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">رقم التليفون</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly value="<?php echo $GLOBALS['phone'] ?>"/>
    </div>
  </div> 
         <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly value="<?php echo $GLOBALS['address'] ?>"/>
    </div>
  </div>
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">الوظيفة</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" readonly value="<?php echo $GLOBALS['job'] ?>"/>
    </div>
  </div>
   
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">السن</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly value="<?php echo $GLOBALS['age'] ?>"/>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">الحالة</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly value="<?php echo $GLOBALS['status'] ?>"/>
    </div>
  </div>

  </div>
</div>      
                 <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>
        </div>
    </body>
</html>
