<?php
include 'connection.php';
include 'functions.php';
$row = select_all($_GET['id']);
?>
<form action="update.php"  method="post">
Модель: <input type="text" name="model" value="<?= $row["model"] ?>"/><br/>
Бренд: <input type="text" name="brand" value="<?= $row['brand'] ?>"/><br/>
Цена: <input type="number" name="price" value="<?= $row['price'] ?>"/><br/>
Категория: <input type="text" name="category" value="<?= $row['category'] ?>"/><br/>
О товаре: <input type="text" name="about" value="<?= $row['about'] ?>"/><br/>
<input type="hidden" name="id" value="<?= $row['id'] ?>"/><br/>
<input type="submit" name="submit" />
</form>
