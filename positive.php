
<!DOCTYPE html>
<html>
<head>
   <title>التبليغ</title>
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
نأسف لسماع هذا الخبر,,,,ندعوا الله ان يمن عليك بالشفاء العاجل ونرجوا من حضرتك كتابة اسماء الاشخاص الذين قمت بالاختلاط معهم مؤخرا في الصندوق التالي لأتخاذ الأجرائات الازمه ونتعهد علي خصوصية البلاغ:
            </div>
<div class="form-group">
    <form action="sad.php" method="post">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" autofocus name="people"></textarea>
        <button type="submit" class="btn btn-primary">ارسال</button>
        <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>"/>
    </form>
            </div>
    </div>
         <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>
        </div>
    </body>
</html>
