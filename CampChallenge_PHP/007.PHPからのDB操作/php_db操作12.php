<?php
/*
以下の課題を、PHPからのPDOを用いて実現してください。
検索用のフォームを用意し、名前、年齢、誕生日を使った複合検索ができるようにしてください。*/

?>
<html>
<head>
  <title>PHP/DB操作12</title>
</head>

<body>
  <!--フォームの設定-->
<form name="serch_form" action="php_db操作12.php" method="POST">
キーワードを入力してください。<br>
<br>
名前:
  <input type="text" name="name">
  <br>
年齢:
  <input type="number" min="0" max="99" name="age">
  <br>
誕生日:
  <br>
  <input type="text" name="bd">
  <br>
  <br>
  <input type="submit" value="検索！">

<?php

//フォームの値を取得
$name=$_POST['name'];
$age=$_POST['age'];
$bd=$_POST['bd'];


if($name != null || $age != null || $bd != null){
try{
  //DB接続
  $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');

//SQL文
  $sql = "SELECT *FROM profiles WHERE name LIKE '%$name%' AND age LIKE '%$age%' AND birthday LIKE '%$bd%';";

//実行
  $query = $pdo->prepare($sql);
  $query->execute();

}catch(PDOExeption $Exeption){
  die('接続失敗'.$Exeption->getMessage());
}

echo '<BR><H3>検索結果:</H3><br>';

//検索結果の取得
$result=$query->fetchAll(PDO::FETCH_ASSOC);
//検索結果の表示
foreach($result as $value){
  foreach($value as $value2){
    echo $value2.'<BR />';
  }
  }
}else{
  echo "値を入力してください!";

}
?>

</form>

</body>

</html>
