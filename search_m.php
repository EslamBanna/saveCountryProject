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
               <a class="navbar-brand" href="about_us.php">About us</a>
            </ul>
        </nav>
     <div class="card ar">
  <div class="card-header">
    البحث بواسطة
  </div>
  <div class="card-body">
      <form action="search_id.php" method="post"><input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/> <button type="submit" class="btn btn-primary btn-lg btn-block">ID</button></form>
      <form action="search_phone.php" method="post"><input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/><button type="submit" class="btn btn-success btn-lg btn-block">رقم التليفون</button></form>
      <form action="search_name.php" method="post"><input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/><button type="submit" class="btn btn-secondary btn-lg btn-block">اسم العضو</button></form>
  </div>
</div>
                       <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>

    </body>
</html>
