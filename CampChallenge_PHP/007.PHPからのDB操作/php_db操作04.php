<?php
/*
以下の課題を、PHPからのPDOを用いて実現してください。
前回の課題「テーブルの作成とinsert」で作成したテーブルからprofileID=1の情報を取得し、画面に取得した情報を表示してください
*/

//データベースへの接続
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');

//SQL文を記述
$sql = "select *from profiles where profilesID=1;";

//SQLの実行準備
$query=$pdo->prepare($sql);

//SQLを実行
$query->execute();

//結果を
$result = $query->fetchall(PDO::FETCH_ASSOC);

foreach($result as $value){
  foreach($value as $value2){
    echo $value2.'<br>';
  }
}


//DB接続解除
$pdo = NULL;

?>
