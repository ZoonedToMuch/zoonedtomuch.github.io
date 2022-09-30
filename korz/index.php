<?php
error_reporting(-1);
session_start();
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$products = get_products();
?>
<?php require_once '../admin/config/connect.php';
 ?>
<!doctype html>
<html lang="en">
<?php include '../header.php'; ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/product.css">
</head>
<body>


<?php //debug($_SESSION); //session_destroy(); ?>




<div class="box-container"> <!-- Главный блок с карточкой "разрешение" -->


   <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
  <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center filter-" style="background-image: url('../admin/<?= $product['img'] ?>');">
        <div class="inner color-white">
          <h3 class="flip-box-header"><?= $product['title'] ?></h3>
          <p><?= $product['description'] ?></p>
          <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
        </div>
      </div>
      <div class="flip-box-back text-center" style="background-image: url('../admin/<?= $product['img'] ?>');">
        <div class="inner color-white">
          <h3 class="flip-box-header"><?= $product['description'] ?></h3>
          <p>Цена: <?= $product['id'] ?></p>
         
                                <a href="?cart=add&id=<?= $product['id'] ?>" class="btn btn-info btn-block add-to-cart" data-id="<?= $product['id'] ?>">
                                    <i class="fas fa-cart-arrow-down"></i> Купить
                                </a>
           
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
                <?php endif; ?>
</div>






<!-- Modal -->

<div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-cart-content">

            </div>

        </div>
    </div>></div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
<?php include '../footer.php' ?> <!-- Подключение php -->
</html>
