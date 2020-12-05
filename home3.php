<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
	<title>3iem anné</title>
	<link rel="stylesheet" href="style/home4m.css">
</head>
<body>

    <div class="container">
    <div class="heading">
    <h1>في المنصة الخاصة للتلاميذ <?php echo $_SESSION['user_name']; ?> مرحبا بك </h1>
    <h2>السنة الثالثة متوسط</h2>
    </div>
    <div class="row">
      <div class="card">
        <div class="card-header">
          <h1>البرنامج السنوي</h1>
        </div>
        <div class="card-body">
          <p> عليك بكتابة البرنامج السنوي في أخر الدفتر و تحضير الدرس لكل حصة
          </p>
          <a href="programme/prg3.png" class="btn">انقر هنا</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h1>الدروس</h1>
        </div>
        <div class="card-body">
          <p> عليك بكتابة الدروس و مراجعتها قبل الفروض و الاختبارات للحصول على نتائج جيدة
          </p>
          <a href="#" class="btn"> انقر هنا</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h1>تمارين</h1>
        </div>
        <div class="card-body">
          <p>لتحسن مستواك يجب عليك حل التمارين و تطبيق العمل على جهاز الحاسوب
          </p>
          <a href="#" class="btn"> انقر هنا</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h1>فيديوهات</h1>
        </div>
        <div class="card-body">
          <p>مشاهدة الفيديوهات التطبيقية تحسن من مستواك التطبيقي على جهاز الحاسوب
          </p>
          <a href="#" class="btn"> انقر هنا</a>
        </div>
      </div>
    </div>
    <a href="logout.php"> خروج من المنصة</a>
  </div>

     
         
</body>
</html>

<?php 
}else{
     header("Location: ind.php");
     exit();
}
 ?>