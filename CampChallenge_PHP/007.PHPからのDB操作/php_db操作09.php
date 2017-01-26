<html>
<head>
  <title>PHP/DB操作09</title>
  <body>
    <!--FORMの作成-->
    <form name ="form1" action="php_db操作09.php" method="POST">
      ProfilesID:
      <input type="number" min="0" max="99" name="ID" ><br>
      Name:
      <input type="text" name="name" ><br>
      Tell:
      <input type="text" name="tell" ><br>
      Age:
      <input type="number" min="18" max ="100" name="age" ><br>
      Birthday:
      <input type="text" name="birthday" ><br>
      <br>
      <input type="submit" value="作成!">
    </form>


<?php
//変数の初期化処理
$id = $_POST["ID"];
$name = $_POST["name"];
$tell = $_POST["tell"];
$age = $_POST["age"];
$bd = $_POST["birthday"];

//DB接続
try{$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');
}catch(PDOExeption $Exeption){
  die('接続失敗'.$Exeption->getMessage());
}echo '接続成功<br>';

//SQL文の記述
$sql = "insert into profiles values ($id, '$name','$tell',$age,'$bd')";
//実行
$query = $pdo->prepare($sql);
$query->execute();

//実行結果の確認
if($query->execute()==1){
echo "以下のプロフィールを追加しました。<br><br>";
$result_sql=$pdo->query("select * from profiles where profilesID = $id;");
$result = $result_sql->fetch(PDO::FETCH_ASSOC);
foreach($result as $value){
  echo $value.'<br>';
}
}else{
  echo '値を入力してください！';
}


?>


  </body>
</head>
</html>
