<?php
/*
以下の機能を満たすロジックを作成してください。

在庫管理システムを作成します。
まず、DBにユーザー情報管理テーブルと、商品情報登録テーブルを作成してください。
その上で、下記機能を実現してください。

①ユーザーのログイン・ログアウト機能
ログインに成功した場合メインページへのリンクを表示
リダイレクトを実装したかったが、機能せず。原因不明のため上記の措置を実施。

②商品情報登録機能
完了！！！

③商品一覧機能
完了！！！



※各テーブルの構成は各自の想像で作ってみてください。
*/
//ログイン画面の表示と認証の機能を実装

require_once 'class.php';

?>
<html>
<head>
  <title>LOGIN</title>
</head>
<body>
<!--フォームの作成-->
  <h1>商品管理ページログイン</h1>
<form action="login.php" method="POST">
  ID:<br />
  <input type="text" name="login_id" /></br>
  PASS:<BR />
  <input type = "text" name = "login_pass" /><br />
  <br />
  <input type = "submit" value = "LOGIN" />
</form>

<?php
//入力された値を取得
$login_id = $_POST['login_id'];
$login_pass = $_POST['login_pass'];


//dbへ接続
$pdo=new PDO('mysql:host=localhost;dbname=Obj_db;charset=utf8','test','test');
$sql="SELECT email, pass FROM user WHERE email='$login_id' AND pass='$login_pass';";
$query=$pdo->prepare($sql);
$query->execute();

//結果をテーブルとして出力
$result=$query->fetchAll(PDO::FETCH_ASSOC);

if(empty($login_id) || empty($login_pass)){
  echo 'IDとパスワードを入力してください!';
}elseif(!empty($result)){
 echo 'ログインに成功しました！';
 echo '<a href="main.php">メインページへ';
}else{
  echo 'ログイン失敗！正しいIDとパスワードを入力してください！';

}
?>

</body>
</html>
