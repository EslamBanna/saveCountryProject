<!DOCTYPE html>
<html>
<head>
   <title>اخر الأخبار</title>
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
       $stmt = $conn->prepare("SELECT * FROM posts ORDER BY date");
       $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $v)
    {
        $who=$v['who'];
        $validity=$v['validity'];
        $date=$v['date'];
        $subject=$v['subject'];
        echo '<div class="card">
  <h5 class="card-header">
       
      <details>
        <summary>تفاصيل المنشور</summary>
                <label>اسم الناشر: '.$who.'</label><br/>
                <label>الصلاحية: '.$validity.'</label><br/>
                <label>التاريخ: '.$date.'</label>
      </details>
            </h5>
  <div class="card-body">
    <p>'.$subject.'</p>
   
  </div>
</div>
       <br/>';
      }
     include 'db_close.php';
       ?>
      
       
       <footer style="background-color:#343A40"> All CopyRights&copy;Eslam Elbanna 2020</footer>
        </div>
    </body>
</html>
