<!DOCTYPE html>
<html>
<head>
   <title>التواصل مع الدكاتره</title>
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
            <th>اسم الدكتور</th>
            <th>رقم التليفون</th>
            <th>التخصص</th>
            </tr>
       <?php
       include 'dbcon.php';
       $stmt = $conn->prepare("SELECT * FROM doctors");
       $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach($stmt->fetchAll() as $v)
    {
        echo "<tr>";
          echo "<td>".$v['id']."</td>";
          echo "<td>".$v['name']."</td>";
          echo "<td>".$v['phone']."</td>";
          echo "<td>".$v['specialization']."</td>";
          echo "</tr>";
      }
       ?>
        </table>     
       <footer style="background-color:#343A40"> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>
    </body>
</html>
