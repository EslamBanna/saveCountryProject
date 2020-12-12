
<!DOCTYPE html>
<html>
<head>
   <title>الحالات المصابة</title>
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
            <th>ID</th>
            <th>اسم المصاب</th>
            <th>رقم التليفون</th>
            <th>العنوان</th>
            <th>السن</th>
            </tr>
       <?php
       include 'dbcon.php';
       $stmt = $conn->prepare("SELECT * FROM cases");
       $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $v)
    {
        echo "<tr>";
          echo "<td>".$v['id']."</td>";
          echo "<td>".$v['name']."</td>";
          echo "<td>".$v['phone']."</td>";  
          echo "<td>".$v['address']."</td>";  
          echo "<td>".$v['age']."</td>";  

        echo "</tr>";
      }
       ?>
        </table> 
      <div class="card">
  <div class="card-header">
    اضافة حالة
  </div>
  <div class="card-body">
      
        <div class="card-body">
        <form action="bad.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>
                  <input type="hidden" name="name" value="doctor"/>        
            <button type="submit"  class="btn btn-danger btn-lg btn-block" >اضافة حالة ايجابية</button>
            </form>

  </div>
  </div>
</div>
       <br>
       <form action="del_case.php" method="post">   
       <div class="card">
  <div class="card-header">
    حذف حالة
  </div>      
        <div class="card-body">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autofocus name="fol">
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">        
        <input type="hidden" name="name" value="doctor">        
        <button type="submit" class="btn btn-primary">حذف</button>
        </div>
  </div>
  </div>
</div>
       </form>
       
       
     
                       <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>
    </body>
</html>
