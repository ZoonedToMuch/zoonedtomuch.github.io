<?php require_once 'admin/config/connect.php'; 
// Подключение к базе данных
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/product.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Document</title>
</head>
<?php include 'header2.php'; ?> <!-- Подключение php -->
<body>
	


<div class="box-container"> <!-- Главный блок с карточкой "разрешение" -->

<!-- Делаем запрос в БД к таблице products а вытаскиваем из нее по ключам каждый элемент -->
  <?php
         $products = mysqli_query($connect, "SELECT * FROM `products`"); 
         $products = mysqli_fetch_all($products); 
        foreach ($products as $product) {
        ?>
        
  <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center filter-" style="background-image: url('../admin/<?= $product[3] ?>');">
        <div class="inner color-white">
          <h3 class="flip-box-header"><?= $product[1] ?></h3>
          
          <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
        </div>
      </div>
      <div class="flip-box-back text-center" style="background-image: url('../admin/<?= $product[3] ?>');">
        <div class="inner color-white">
          <p class="flip-box-header"><?= $product[4] ?></p>
          <p>Цена: <?= $product[2] ?> руб.</p>
          <?php if (isset($_SESSION['user'])):?> <!-- Появление кнопок для авторизированного пользователя --> 
          <button class="flip-box-button" href="admin/vendor/singin.php"><p><a href="admin/oplata.php?title=<?=$product[1] ?>">Заказать</a></p></button>
          <?php endif;?>
          <!-- Кнопки для незарегистрированного пользователя -->
          <?php if (empty($_SESSION['user'])):?>
            <button class="flip-box-button"><a href="registration.php">Зарегистрироваться</a></button>
            <?php endif;?>
        </div>
      </div>
    </div>
  </div>
    <?php
            }
        ?>
</div>


</body>

<?php include 'footer.php' ?> <!-- Подключение php -->
</html>