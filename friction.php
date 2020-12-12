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
            <th>اسماء المخالطين</th>
            </tr>
       <?php
       include 'dbcon.php';
       $stmt = $conn->prepare("SELECT * FROM friction");
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
       <form action="delete_col.php" method="post"> 
       <div class="card">
  <div class="card-header">
    حذف صف
  </div>      
        <div class="card-body">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" autofocus autocomplete="off" name="sub"/>
        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>"/>       
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
