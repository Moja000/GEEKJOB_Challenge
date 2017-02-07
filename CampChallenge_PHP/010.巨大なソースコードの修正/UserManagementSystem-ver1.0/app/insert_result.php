<?php require_once '../common/scriptUtil.php'; //ユーザー定義関数の読み込み?>
<?php require_once '../common/dbaccesUtil.php';
session_start();
?>



<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>

    <?php
    //直リンクされた場合にエラー文を表示
    if(empty($_POST['access'])){
      echo 'このリンクは無効です。登録画面に値を入力してください';
    }else{

      $name = $_SESSION['name'];
      $birthday = $_SESSION['birthday'];
      $type = $_SESSION['type'];
      $tell = $_SESSION['tell'];
      $comment = $_SESSION['comment'];

    //db接続を確立
    $insert_db = connect2MySQL();

    //データベースにデータを格納
    $insert=insertToMysql($insert_db,$name,$birthday,$tell,$type,$comment);


    //db接続解除
    disconnectDB();


    ?>

<?php
//データの注入に失敗した際に登録結果を表示しないように設定
if(!empty($insert)){
?>

    <h1>登録結果画面</h1><br>
    名前:<?php echo $name;?><br>
    生年月日:<?php echo $birthday;?><br>
    種別:<?php echo $type?><br>
    電話番号:<?php echo $tell;?><br>
    自己紹介:<?php echo $comment;?><br>
    以上の内容で登録しました。<br>

    <?php
  }
    ?>




    <!-- 直リンク防止if文閉じタグ -->
    <?php } ?>

    <?php echo '<br>'.return_top(); ?>

</body>

</html>
