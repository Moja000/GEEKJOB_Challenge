<?php
require_once 'class.php';
?>

<h1>新規商品登録</h1><br>
<form action="registar_item.php" method = "POST">
  品番：
  <br>
　<input type = "number" name = "id" min = "0" max = "99" absolute>
  <br>
  商品名：
  <br>
  <input type = "text" name = "name" absolute>
  <br>
  単価：
  <br>
  <input type = "number" name = "price" min = "0" absolute>
  <br>
  在庫数：
  <br>
  <input type = "number" name = "stock" min = "0" max = "255" absolute>
  <br>
  <br>
  <input type = "submit" value="新規登録" >
</form>

<a href="http://localhost:8888/php_08/php_Object_oriented_04/main.php" >戻る</a>
<a href ="http://localhost:8888/php_08/php_Object_oriented_04/item-lists.php">商品一覧

  <?php
$items = new Items();
$items->id = $_POST['id'];
$items->name = $_POST['name'];
$items->price = $_POST['price'];
$items->stock = $_POST['stock'];

$items->ItemRegistar($items->id,$items->name,$items->price,$items->stock);




   ?>
