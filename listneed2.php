<!DOCTYPE html>
<html>
<head>
   <title>قائمة الخير</title>
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
        <div class="card" style="text-align: center">
  <div class="card-header">
    شكرا
  </div>
  <div class="card-body">
   نشكر سيادتكم للاقبال علي تقديم الخير والمساعدة للأبناء قرية ميت حبيش البحرية,,,كما موضح في الصفحة هذة قائمة بالأحتياجات المطلوبة لدي القرية واذا كان لديك القدرة علي اتمام اي طلب من الطلبات الرجاء كتابة رقم الموقوع في الصندوق التالي وسوف يتم مراسلتك من خلال الادمن في الفتره المقبلة...
 
            </div>
          <form action="good.php" method="post">
            <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"> رقم الموضوع</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autofocus autocomplete="off" name="id"/>
        <input type="hidden" name ="name" value="<?php echo $_POST['m_name'];?> "/>     
         <input type="hidden" name ="phone" value="<?php echo $_POST['m_phone'];?> "/>     
         <input type="hidden" name ="who" value="doctor"/>     
        <button type="submit" class="btn btn-primary">تأكيد</button>
                </div>
            </div>
            </form>
            <?php
       include 'dbcon.php';
       $stmt = $conn->prepare("SELECT subject, id FROM needs");
       $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $v)     
    {
        echo    ' 
        <div class="om">
        <div class="card text-white bg-secondary mb-3">
  <div class="card-header">رقم الموضوع: '.$v['id'].'</div>
  <div class="card-body">
    <p class="card-text">'.$v['subject'].'</p>
  </div>
</div> 
</div>';      
        
    }
  include 'db_close.php';
            
            ?>
  
            </div>
                
       <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>
        </div>
    </body>
</html>
