<?php require_once 'admin/config/connect.php'; ?>
<!DOCTYPE html>
<html lang="ru" >
<head>
  <meta charset="UTF-8">
  <title>login</title>
 
<link rel="stylesheet" href="css/registrationlogin.css">

</head>
<body>

<div id="login-form-wrap"> <!-- Форма входа -->
  <h2>Вход</h2>
  <form id="login-form" action="admin/vendor/singin.php" method="post">
    <p>
    <input type="text" id="username" name="login" placeholder="Логин" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="email" name="password" placeholder="Пароль" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Войти">
    </p>
    <div id="create-account-wrap">
    <p>Еще не зарегистрированы? <a href="registration.php">Создать аккаунт</a> <a href="index.php">Вернуться на главную</a><p>
  </div>
</div>
<?php
if ($_SESSION ['message']) {
echo  '<p class="msg"> '. $_SESSION ['message'] .' </p>';
}

unset($_SESSION ['message']);
?>
  </form>
  

  
</body>
</html>
