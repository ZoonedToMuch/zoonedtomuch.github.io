<?php require_once 'admin/config/connect.php';
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header2.css">
	
	<title>Document</title>
</head>
<body>
<header class="header" id="header">
    <a href="#" title="Вернуться наверх" class="topNubex"> Вернуться </a>
    <div class="container">
        <a href="index.php">
        <div class="header__inner">
            <div class="header__logo" data-scroll="#intro"><img src="../image/logo.png"
            width="80"></div></a>

            <nav class="nav" id="nav">
                <a class="nav__link" href="index.php" data-scroll="#about">Главная</a>
                <a class="nav__link" href="product.php" data-scroll="#services">Товары</a>
                <a class="nav__link" href="news.php" data-scroll="#blog">Новости</a>
                <a class="nav__link" href="aboutus.php" data-scroll="#works">О нас</a>
                <?php if (isset($_SESSION['user'])):?>              
    <a class="nav__link" href="profile.php" data-scroll="#footer">Корзина</a>
    <a class="nav__link" href="logout.php">Выход</a>
    <a class="nav__link" href="profile.php">Логин:<?= $_SESSION['user']['login']?></a>
     <?php endif;?>

<?php if (empty($_SESSION['user'])):?>
            <a class="nav__link" href="registration.php">Регистрация</a>
            <a class="nav__link" href="login.php">Вход</a>
<?php endif;?>
<a class="nav__link" href="svyaz.php" data-scroll="#works">+7(950)5284033</a>
<a class="nav__link" href="#" data-scroll="#footer"></a>
                <a class="nav__link" class="nav__link" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <a class="nav__link" class="nav__link" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </nav>
        </div>
    </div>
</header>
 </body>
 </html>