<?php

/*以下の課題を、PHPからのPDOを用いて実現してください。
nameに「茂」を含む情報を取得し、画面に取得した情報を表示してください*/
try{
$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');
}catch(PDOException $Exception){
  die('接続に失敗しました:'.$Exception->getMessage());
}//処理
echo'PDO クラスによる接続に成功しました。<br>';

$sql = "select *from profiles where name like '%茂%';";
$query=$pdo->prepare($sql);
$query->execute();
$result = $query->fetchall(PDO::FETCH_ASSOC);

foreach($result as $value){
  foreach($value as $value2){
    echo $value2.'<br>';
  }
}





//切断
$pdo = null;


?>
