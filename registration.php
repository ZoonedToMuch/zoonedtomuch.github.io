<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/registrationlogin.css">
  <title>Document</title>
</head>
<body>
 


<div id="login-form-wrap"> <!-- Форма регистрации -->
  <h2>Регистрация</h2>
  <form id="login-form" method="post" action="admin/vendor/singup.php">
    <p>
    <input type="text" id="username" name="login" placeholder="Логин" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="email" id="username" name="email" placeholder="Элетронная почта" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="username" name="number" placeholder="Номер телефона" required><i class="validation"><span></span><span></span></i>
    </p>
   
    <p>
    <input type="password" id="username" name="password" placeholder="Пароль" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="username" name="password_confirm" placeholder="Подтвердите пароль" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Зарегистрироваться">
    </p>
    <div id="create-account-wrap">
    <p>Уже зарегистрированы? <a href="login.php">Войти</a>  <a href="index.php">Вернуться на главную</a><p>
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