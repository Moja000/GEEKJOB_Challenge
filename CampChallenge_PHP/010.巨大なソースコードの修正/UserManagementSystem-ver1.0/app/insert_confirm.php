<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';//ユーザー定義関数の読み込み
session_start();//セッションスタートを頭へ移動！
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>

</head>
  <body>
    <?php



    if(!empty($_POST['name']) && !empty($_POST['year']) &&
    !empty($_POST['month']) && !empty($_POST['day']) &&
    !empty($_POST['type'])&& !empty($_POST['tell']) && !empty($_POST['comment'])){

        $post_name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
        $post_type = $_POST['type'];
        $post_tell = $_POST['tell'];
        $post_comment = $_POST['comment'];

        //セッション情報に格納

        // session_start();　セッションスタートをスクリプトの頭に移動！
        $_SESSION['name'] = $post_name;
        $_SESSION['birthday'] = $post_birthday;
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;

        // 入力漏れがあった際、フォームに値を保持するためのセッション。
        $_SESSION['year'] = $_POST['year'];
        $_SESSION['month'] = $_POST['month'];
        $_SESSION['day'] = $_POST['day'];


    ?>

        <h1>登録確認画面</h1><br>
        名前:<?php echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:<?php echo $post_type?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">

          <!-- 直リンク防止用の値を送信 -->
          <input type="hidden" name="access" value="yes">
          <input type="submit" name="yes" value="はい">

        </form>
        <form action="<?php echo INSERT ?>" method="POST">

            <input type="submit" name="no" value="登録画面に戻る">

        </form>

    <?php }else{ ?>

      <!--課題 3 どの項目が不足しているのか表示されていない。 -->
        <h1>入力項目が不完全です</h1><br>
        再度入力を行ってください
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>
    <?php
    //トップページへ戻るリンクを作成
    echo return_top()."<br>";
          //問題！sessionの値がresultに渡せていない　→　session_start();をスクリプトの頭に持ってくことで解決！！(PHPの仕様)
    ?>
</body>
</html>
