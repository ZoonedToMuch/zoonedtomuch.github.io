<?php
require_once 'admin/config/connect.php';
session_start();

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header2.css">
    <link rel="stylesheet" href="../css/oplata.css">
    <link rel="stylesheet" href="css/svyaz.css">
    <title>Ronin</title>
</head>
<body>
    <?php
    include 'header2.php';
    ?>
 
        <div class="cus">


        <form>
        <p>Фамилия</p>
        <input  type="text"name="name" required>
        <p>Имя</p>
        <input type="text" name="name"required>
        <p>Отчетво</p>
        <input type="text" name="name"required>
        <p>Адрес электронной почты</p>
        <input type="text" name="name"required>
        <p>Телефон</p>
        <input type="text" name="name"required>
<br>

        <button type="submit" class="submit">Отправить сообщение</button>
    </form>  
        </div>




      <?php
    include 'footer.php';
    ?>
</body>
</html>