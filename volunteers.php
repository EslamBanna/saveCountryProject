<!DOCTYPE html>
<html>
<head>
   <title>تطوع</title>
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
<form action="happy.php" method="post">
       <div class="card">
  <div class="card-header">
    شكرا
  </div>
  <div class="card-body">
      <p>للتأكيد انضمامك للشباب المتطوعين في مجموعة ادارة ازمة كورونا في قرية ميت حبيش البحرية الرجاء الضغط علي الزر التالي</p>
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>          
      <button type="submit" class="btn btn-primary">التأكيد</button>
    </div>
</div>
       </form>

               <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>
        </div>
    </body>
</html>
