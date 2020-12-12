<?php
$GLOBALS['name']=$_POST['name'];
$GLOBALS['phone']=$_POST['phone'];
?>
<!DOCTYPE html>
<html>
<head>
   <title>التبرع</title>
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
    <form action="thanks.php" method="post">    
    <div class="card">
  <div class="card-header">
  نشكرك لكرم سيادتكم ونرجوا كتابة الأمر الذي تريد ان تتبرع به لأهل القرية  لمساعدتنا في القضاء علي فيروس كورونا المستجد(مال, ملبس, ادوية, كمامات....وغيرها) في خلال الصندوق التالي:
  </div>
<div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" autofocus name="subject"></textarea>
        <input type="hidden" id="custId" name="phone" value='<?php echo $GLOBALS['phone'];?>'/>
                <input type="hidden" id="custId" name="name" value='<?php echo $GLOBALS['name'];?>'/>
        <button type="submit" class="btn btn-primary">ارسال</button>
            </div>
    </div>
    </form>
         <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>
    </body>
</html>
