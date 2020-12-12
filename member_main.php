
<!DOCTYPE html>
<html>
<head>
   <title>الصفحة الرئيسية للعضو</title>
    <meta charset="utf-8"/>
<meta name="description" content="tanta"/>
    <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="shortcut icon" href="images/title.jpg" type="image/x-icon"/>     
    </head>
    <body>
        <div class="container">
            <div style="text-align: center">
            <nav class="navbar navbar-dark bg-dark">
  <img src="images/title.jpg" width="60" height="60" alt="" loading="lazy"/>
           <ul>
                <a class="navbar-brand" href="index.php">تسجيل الخروج</a>
               <a class="navbar-brand" href="about_us.php">About us</a>
            </ul>
        </nav>
       <form action="change.php" method="post">
                <div class="card x">
  <div class="card-header">
    البيانات الخاصة بالعضو
  </div>
  <div class="card-body">
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" readonly name="id" value="<?php echo $GLOBALS['id']; ?>" />
    </div>
  </div>
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">اسم العضو</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" readonly value='<?php echo $GLOBALS['name']; ?>'/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">رقم التيلفون</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" readonly value='<?php echo $GLOBALS['phone']; ?>' name="phone">
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" readonly value='<?php echo $GLOBALS['address']; ?>'/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">السن</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" readonly value='<?php echo $GLOBALS['age']; ?>'/>
    </div>
  </div>
        <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">الوظيفة</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" readonly value='<?php echo $GLOBALS['job']; ?>'/>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">الحالة</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" readonly value='<?php echo $GLOBALS['status']; ?>'/>
    </div>
  </div>
              <button type="submit" class="btn btn-warning">تعديل البيانات</button>

            </div>
</div>
                </form>
            </div>
            <div class="clearfix"></div>
<br>
        
            <div class="card another d-xs-block d-sm-block d-md-block d-lg-block d-xl-block">
  <div class="card-header">
    صلاحياتي
  </div>
  <div class="card-body">
      <form style="display:inline;" action="post.php" method="post"><input type="hidden" name="m_name" value="<?php echo $GLOBALS['name'] ?>"/><button class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">كتابة منشور</button></form>
      <form action="lastnews.php" style="display:inline;" method="post"><button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">اخر االأخبار</button></form>    
      <form action="contact_w_doc.php" style="display:inline;" method="post"><button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">التواصل مع الدكاترة</button></form>
     <form action="positive_stre.php" style="display:inline;" method="post"><button type="submit" class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">الشوارع التي بها حالات</button></form>
      <form action="request.php" method="post" style="display:inline;"><input type="hidden" name="m_name" value="<?php echo $GLOBALS['name'] ?>"/><input type="hidden" name="m_phone" value="<?php echo $GLOBALS['phone'] ?>"/><button  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">طلب مساعدة من أهل القرية</button></form>
     <form action="positive.php" method="post" style="display:inline;"><input type="hidden" name="id" value="<?php echo $GLOBALS['id'] ?>"/><button  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">ابلاغ الدكاترة عن اصابتي</button></form>
           <form action="hager.php" style="display:inline;" method="post"><button  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">نصائح للوقاية من فيروس كورونا المستجد</button></form>
     <form action="https://www.facebook.com/egypt.mohp/.php" targer="_blank" style="display:inline;"><button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">وزارة الصحة والسكان المصرية</button></form>
     <form action="https://www.who.int/ar" target="_blank" style="display:inline;"><button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">منظمة الصحة العالمية</button></form>
     <form action="statistics.php" style="display:inline;" method="post"><button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">احصائيات الاصابات في القرية</button></form>
        <form action="listneed.php" method="post" style="display:inline;"><input type="hidden" name="m_name" value="<?php echo $GLOBALS['name'] ?>"/><input type="hidden" name="m_phone" value="<?php echo $GLOBALS['phone'] ?>"/><button class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">قائمة طلبات المساعدة في القرية</button></form>
       <form action="volunteers.php" method="post" style="display:inline;"><input type="hidden" name="id" value="<?php echo $GLOBALS['id'] ?>"/><button class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">الأنضمام الي الشباب المتطوعين</button></form>     
     <form action="pharmacy.php" style="display:inline;" method="post"><button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">الصيدليات</button></form>
                </div>
</div>
            <footer style="background-color:#343A40"> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>
    </body>
</html>
