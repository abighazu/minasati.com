<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>الدخـــــول</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>اللقب و الاسم</label>
     	<input type="text" name="uname" placeholder="اللقب و الاسم"><br>

     	<label>كلمة السر</label>
     	<input type="password" name="password" placeholder="كلمة السر"><br>

     	<button type="submit">دخــول</button>
          <a href="signup.php" class="ca">لم أسجل بعد ؟</a>
     </form>
</body>
</html>