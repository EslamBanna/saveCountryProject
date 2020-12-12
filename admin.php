<?php
$one=$GLOBALS['id'];
$two=$GLOBALS['name'];
$three=$GLOBALS['phone'];
$four=$GLOBALS['address'];
?>
<!DOCTYPE html>
<html>
<head>
   <title>الصفحة الرئيسية للمشرف</title>
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
        <div class="card x">
  <div class="card-header">
    البيانات الخاصة بالمشرف
  </div>
  <div class="card-body">
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly placeholder='<?php echo $one; ?>'/>
    </div>
  </div>
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">اسم المشرف</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly placeholder='<?php echo $two;  ?>'/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">رقم التيلفون</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly placeholder='<?php echo $three; ?>'/>
    </div>
  </div>
       <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" readonly  placeholder='<?php echo $four; ?>'/>
    </div>
  </div>
            </div>
</div>
            </div>
        
            <div class="card">
  <div class="card-header">
    صلاحياتي
  </div>
  <div class="card-body">
       <form action="post3.php" method="post" style="display:inline;">
           <input type="hidden" name="m_name" value="<?php echo $GLOBALS['name']; ?>"/>
           <button class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">كتابة منشور</button>
      </form>
          
      <form action="lastnews.php" method="post" style="display:inline;">
               <button  type="submit" class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">اخر الأخبار</button>
      </form>
      
      <form action="friction.php" style="display:inline;" method="post">
          <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/>
          <button type="submit" class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">قائمة المخالطين</button>
      </form>
    
      <form action="vol_list.php" style="display:inline;" method="post">
         <button type="submit" class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">قائمة المتطوعين</button>
      </form>
     
      <form action="copm_list.php" style="display:inline;" method="post">
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">قائمة الشكاوي</button>
      </form>
      
      <form action="cases2.php" style="display:inline;" method="post">
          <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/><button class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">الحالات</button>
      </form>
    
   
      <form action="https://www.who.int/ar" style="display:inline;" target="_blank">
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">منظمة الصحة العالمية</button>
      </form>
     
      <form action="https://www.facebook.com/egypt.mohp/" style="display:inline;" target="_blank">
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">وزارة الصحة والسكان المصرية</button>
      </form>
     
      <form action="create_doc.php" method="post" style="display:inline;">
          <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/>
          <button class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">اضافة حساب دكتور</button>
      </form>
       <form action="contact_w_doc.php" style="display:inline;" method="post">
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">التواصل مع الدكاترة</button>
      </form>
      <form action="admin_street.php" method="post" style="display:inline;">
        <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/>
        <button class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">الشوارع التي بها حالات</button>
      </form>
    
      <form action="search_m.php" method="post" style="display:inline;">
         <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/>
         <button class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;" type="submit">البحث عن عضو</button>
      </form>      
     
      <form action="hager.php" style="display:inline;">
          <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">نصائح عامة للوقاية من فيروس كورونا المستجد</button>
      </form>
    
    
    
      <form action="all_m.php" style="display:inline;" method="post">
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">عرض كل الأعضاء</button>
      </form>
     
      <form action="listneed.php" style="display:inline;" method="post">
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">قائمة طلبات المساعدة</button>
      </form>
     
         <form action="respopn.php" style="display:inline;" method="post">
         <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/>
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">قائمة تلبية المتطلبات</button>
      </form>
      <form action="pharmacy.php" style="display:inline;" method="post">
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">صيدليات القرية</button>
      </form>
    
   
    
      <form action="create_pharmacy.php" style="display:inline;" method="post">
         <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/>
         <button type="submit" class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">اضافة صيدلية</button>
      </form>
       <form action="statistics.php" style="display:inline;" method="post">
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">احصائيات القرية</button>
      </form>
      <form action="ch_sta.php" style="display:inline;" method="post">
           <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/>
          <button  type="submit" class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">تعديل احصائيات القرية</button>
      </form>
       <form action="create_admin.php" style="display:inline;" method="post">
         <input type="hidden" name="id" value="<?php echo $GLOBALS['id']; ?>"/>
         <button type="submit" class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">اضافة ادمن</button>
      </form>
       <form action="ad.php" style="display:inline;" method="post">
         <button type="submit"  class="btn btn-secondary" style=" margin-left: 10px;margin-bottom: 10px;">مسؤولوا الموقع</button>
      </form>
                </div>
</div>
            <footer style="background-color:#343A40"> All CopyRights&copy;Eslam Elbanna 2020</footer>

        </div>
    </body>
</html>
