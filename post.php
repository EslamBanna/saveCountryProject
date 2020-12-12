
<!DOCTYPE html>
<html>
<head>
   <title>كتابة منشور</title>
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
<form action="post_p.php" method="post">
       <div class="card">
  <div class="card-header">
what's in your mind  </div>
<div class="form-group">
    <form action="post_p.php" method="post">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" autofocus placeholder="قم بكتابة المنشور هنا حتي يستفيد الجميع" name="news"></textarea>
        <input type="hidden" name="type" value="member"/>
                <input type="hidden" name="title" value="<?php echo $_POST['m_name'] ?>"/>
        <button type="submit" class="btn btn-primary">نشر</button>
    </form>
            </div>
    </div>
       </form>
       
                <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>

    </body>
</html>
