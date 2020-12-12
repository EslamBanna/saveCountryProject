<!DOCTYPE html>
<html>
<head>
   <title>تسجيل الدخول</title>
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
               <a class="navbar-brand" href="index.php">الصفحة الرئيسية</a>
               <a class="navbar-brand" href="about_us.php">About us</a>
            </ul>
        </nav>
<div class="card">
  <div class="card-header">
    بيانات تسجيل الدخول للمنصة
  </div>
  <div class="card-body">
<form action="process.php" method="post">
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">رقم التيلفون</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autofocus name="phone" autocomplete="off"/>
    </div>
  </div>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">كلمة السر</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputEmail3" autocomplete="off" name="password"/>
    </div>
  </div>
      <input class="btn btn-primary" type="submit" value="تسجيل"/>
      </form>
      <p>اذا كانت هذة أول زيارة لك في المنصة وليس لديك حساب عليها اضغط علي الزر التالي...</p>
              <div class="end"> <button type="button" class="btn btn-success"><a href="create_m.php" class="return">انشاء حساب جديد</a></button></div>

  </div>
</div>
       
       <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>
    </body>
</html>
