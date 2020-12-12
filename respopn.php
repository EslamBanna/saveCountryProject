<!DOCTYPE html>
<html>
<head>
   <title> قائمة التلبية</title>
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
        <table>
        <tr>
            <th>رقم الموضوع</th>
            <th>اسم الطالب</th>
            <th>رقم التليفون</th>
            <th>اسم المساعد</th>
            <th>رقم التليفون</th>
            <th>الطلب</th>
            </tr>
         <?php
       include 'dbcon.php';
       $stmt = $conn->prepare("SELECT * FROM answer");
       $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $v)
    {
        echo "<tr>";
          echo "<td>".$v['id']."</td>";
          echo "<td>".$v['who_need']."</td>";
          echo "<td>".$v['n_phone']."</td>";  
          echo "<td>".$v['who_answer']."</td>";
          echo "<td>".$v['a_phone']."</td>";
          echo "<td>".$v['subject']."</td>"; 
        echo "</tr>";
      }
       ?>
        </table>
              <div class="card">
  <div class="card-header">
    حذف موضوع
  </div>
  <form action="del_answer.php" method="post">
           <div class="card-body">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">رقم الموضوع</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputEmail3" autofocus name="subject"/>
        <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/>       
        <button type="submit" class="btn btn-primary">حذف</button>
        </div>
  </div>
  </div>
           </form>
      </div>
       
                 <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>
    </body>
</html>
