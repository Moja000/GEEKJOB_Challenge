<?php
/*以下の課題を、PHPからのPDOを用いて実現してください。
Challenge_dbへのエラーハンドリングを含んだ接続の確立を行ってください*/

//データベースへの接続
try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');
}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}

//処理
echo'PDO クラスによる接続に成功しました。';


//切断
$pdo = null;

?>
