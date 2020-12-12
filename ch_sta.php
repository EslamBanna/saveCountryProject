<!DOCTYPE html>
<html>
<head>
   <title>احصائيات الاصابات في القرية</title>
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
    <?php
      include 'dbcon.php';
      $stmt = $conn->prepare("SELECT * FROM sta");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
      foreach($stmt->fetchAll() as $v)
 {
$GLOBALS['one']=$v['all_cases'];
 $GLOBALS['two']=$v['all_deaths'];
 $GLOBALS['three']=$v['recovery_cases'];
 }
      ?>
      <form action="ch_sta_p.php" method="post">
      <div class="card">
  <div class="card-header">
    احصائيات الاصابات في القرية:
  </div>
  <div class="card-body">    
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">اجمالي عدد الأصابات</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autocomplete="off"  value='<?php echo $GLOBALS["one"]; ?>' name="all1"/>
    </div>
  </div>
         <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">اجمالي عدد الوفيات</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3"  autocomplete="off" value='<?php echo $GLOBALS["two"]; ?>' name="all2"/>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">عدد حالات الشفاء</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autocomplete="off"  value='<?php echo $GLOBALS["three"]; ?>' name="all3"/>
    </div>
  </div>
         <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>                        
      <button type="submit" class="btn btn-primary">حفظ التغيرات</button>      
          </div>
      </div>
      </form>
      <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>
    </body>
</html>
