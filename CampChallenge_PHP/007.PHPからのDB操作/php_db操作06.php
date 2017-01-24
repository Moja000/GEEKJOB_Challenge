<?php
/* 以下の課題を、PHPからのPDOを用いて実現してください。
課題「テーブルへ情報を格納」でINSERTしたレコードを指定して削除してください。SELECT*で結果を表示してください*/
try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');
}catch(PDOException $Exeption){
  die('接続失敗:'.$Exeption->getMessage());
}
echo '接続成功！<br>';

$sql = "delete from profiles where profilesID = 5;";
$query = $pdo->prepare($sql);
$query->execute();

$sql = "select* from profiles;";
$query = $pdo->prepare($sql);
$query->execute();



$result=$query->fetchALL(PDO::FETCH_ASSOC);
foreach($result as $arr){
  echo '<br>';
  foreach($arr as $value){
    echo $value;
  }
}
$pdo=null;

?>
