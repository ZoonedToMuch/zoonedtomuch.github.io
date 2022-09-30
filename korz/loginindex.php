<?php
error_reporting(-1);
session_start();
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';
$products = get_products();
?>
<?php require_once '../admin/config/connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" type="text/html" href="korz/assets/css/main.css">
    <link rel="stylesheet" type="text/html" href="css/style.css">
    <link rel="stylesheet" type="text/html" href="css/product.css">
	<title>Document</title>
</head>
<?php include '../header.php'; ?> <!-- Подключение php -->
<body>
 <div class="modal-cart-content">

            
	<?php require_once 'cart-modal.php'?>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>