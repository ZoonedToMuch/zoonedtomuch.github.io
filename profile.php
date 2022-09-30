<?php
session_start();
$users1 = $_SESSION['user']['id'];
if (!$_SESSION['user']) {
    header('Location: /register.php');
}
require_once 'admin/config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <?php 
include'header2.php';
?>
    <!-- Профиль -->
    <section>
        <div class="image">
<div class="lih">
<div class="myinf">
       <h1>Мои данные</h1> 
       <table>
    <tr>
        <td>Мой логин:</td>
        <td><?= $_SESSION['user']['login'] ?></td>
    </tr>
    <tr>
        <td>Мой e-mail:</td>
        <td><?= $_SESSION['user']['email'] ?></td>
    </tr>
</table>
        <a href="logout.php" class="logout">Выход</a> 
</div>
</div>
</div>
    <div class="content">
<h1>Мои заказы</h1> 
<div class="table-1">
<table class="table"> 
        <tr>
            <th>ID</th>
            <th>Имя фамилия</th>
            <th>Адрес</th>
            <th>Способ оплаты</th>
            <th>Способ доставки</th>
            <th>Товар</th>
            <th>Статус заказа</th>
        </tr>

        <?php
            $zakaz = mysqli_query($connect, "SELECT * FROM zakaz WHERE id_u='$users1' ");
            $zakaz = mysqli_fetch_all($zakaz);
            foreach ($zakaz as $zakazs) {
                ?>
                    <tr>
                        <td><?= $zakazs[0] ?></td>
                        <td><?= $zakazs[3] ?> <?= $zakazs[2] ?></td>
                        <td><?= $zakazs[4] ?></td>
                        <td><?= $zakazs[5] ?></td>
                        <td><?= $zakazs[6] ?></td>
                        <td><?= $zakazs[7] ?></td>
                        <td><?= $zakazs[8] ?></td>
                        <script type="text/javascript">
                          function confirmation(){
                            return confirm('Вы уверены что хотите удалить, нажмите ок'
                            )
                          }
                          </script>
                        <td><a style="color: red;" href="admin/vendor/deletezusersoplata.php?id=<?= $zakazs[0] ?>" onclick="return confirmation()" >Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
</section></div>
</div>
</div></div>

<?php 
include'footer.php';
?>

</body>
</html>