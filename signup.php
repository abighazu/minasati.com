<!DOCTYPE html>
<html>
<head>
	<title>التسجـــيل</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>التسجـــيل على المنصة</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label> :المستوى</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="المستوى"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="القسم"><br>
          <?php }?>

          <label> :اللقب و الاسم</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="اللقب و القسم"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="اللقب و القسم"><br>
          <?php }?>

     	<label>كلمة السر</label>
     	<input type="password" 
                 name="password" 
                 placeholder="كلمة السر"><br>

          <label>اعادة كتابة كلمة السر</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="اعادة كتابة كلمة السر"><br>

     	<button type="submit">تأكيد التسجيل</button>
          <a href="login.php" class="ca">جاهز لدخول ؟</a>
     </form>
</body>
</html>