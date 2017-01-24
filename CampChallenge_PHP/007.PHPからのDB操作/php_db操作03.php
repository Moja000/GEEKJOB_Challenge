<?php

//データベースへの接続
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');

//SQL文を記述
$sql = "select *from profiles;";

//SQLの実行準備
$query=$pdo->prepare($sql);

//SQLを実行
$query->execute();

//結果を
$result = $query->fetchall(PDO::FETCH_ASSOC);

foreach($result as $value){
  echo '<br>';
  foreach($value as $value2){
    echo $value2.'<br>';
  }
}

//DB接続解除
$pdo = NULL;
?>
