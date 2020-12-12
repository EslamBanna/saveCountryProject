<!DOCTYPE html>
<html>
<head>
   <title>الشوارع التي بها حالات</title>
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
            <th>اسم الشارع</th>
            </tr>
       <?php
       include 'dbcon.php';
       $stmt = $conn->prepare("SELECT * FROM streets");
       $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $v)
    {
        echo "<tr>";
          echo "<td>".$v['id']."</td>";
          echo "<td>".$v['name']."</td>";
        echo "</tr>";
      }
       ?>
        </table>
       
       <form action="del_street.php" method="post">
                  <div class="card">
  <div class="card-header">
    حذف شارع
  </div>      
        <div class="card-body">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autofocus autocomplete="off" name="street_id"/>
      <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>
        <button type="submit" class="btn btn-primary">حذف</button>
        </div>
  </div>
  </div>
</div>
       </form>
       <br/>
       <form action="insert_street.php" method="post">
        <div class="card">
  <div class="card-header">
    اضافة شارع
  </div>      
        <div class="card-body">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">اسم الشارع</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autocomplete="off" name="street_name"/>
              <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>        
        <button type="submit" class="btn btn-danger">اضافة</button>
        </div>
  </div>
  </div>
</div>       
       </form> 
       <footer> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>
    </body>
</html>
