<!DOCTYPE html>
<html>
<head>
   <title>اضافة صيدلية</title>
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
       <form action="add_pharmacy_p.php" method="post">  
       <div class="card x">
  <div class="card-header">
    البيانات الخاصة بالعضو
  </div>
  <div class="card-body">
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">اسم الصيدلية</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autocomplete="off" autofocus name="name"/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">رقم التيلفون</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autocomplete="off" name="phone"/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autocomplete="off" name="address"/>
    </div>
  </div>
               <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>        
                <button type="submit" class="btn btn-primary">انشاء</button>

              </div>

       </div>
       </form>       
       <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>

    </body>
</html>
