<?php
/*
以下の課題を、PHPからのPDOを用いて実現してください。
profileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください
*/

//データベースへ接続
try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');
}catch(PDOExeption $Exeption){
  die('接続失敗'.$Exeption->getMessage());
}echo '接続成功！<br>';


//MySQLコマンドの実行
$sql = "update profiles set profilesID=1,name='松岡 修造',age=48,birthday='1967-11-06' where profilesID=1;";
 $query = $pdo->prepare($sql);
 $query->execute();


 //実行結果の確認
 $sql = "select *from profiles;";
   $query = $pdo->prepare($sql);
   $query->execute();


$result=$query->fetchall(PDO::FETCH_ASSOC);
foreach($result as $value){
  echo '<br>';{
    foreach($value as $value2){
      echo $value2;
  }
}
}
?>
