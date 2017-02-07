<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';//ユーザー定義関数の読み込み
session_start();
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
    <form action="<?php echo INSERT_CONFIRM ?>" method="POST">
    名前:
    <input type="text" name="name" <?php if(!empty($_SESSION['name'])){
      echo 'value = "'.$_SESSION['name'].'"';
    }  ?>>
    <br><br>

    生年月日:　
    <select name="year">

        <!-- sessionを使って再入力時に以前入力した項目を選択済みにする -->
        <?php if(!empty($_SESSION['year'])){
          echo '<option value = "'.$_SESSION['year'].'">'.$_SESSION['year']."</option>";
        }?>
        <!--デフォルト値のValueを削除-->
        <option value="">----</option>
        <?php
        for($i=1950; $i<=2010; $i++){ ?>
        <option value="<?php echo $i;?>"><?php echo $i ;?></option>
        <?php } ?>

    </select>年
    <select name="month">
      <?php if(!empty($_SESSION['month'])){
        echo '<option value = "'.$_SESSION['month'].'">'.$_SESSION['month']."</option>";
      }?>
      <!--デフォルト値のValueを削除-->
        <option value="">--</option>
        <?php
        for($i = 1; $i<=12; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php } ;?>

    </select>月
    <select name="day">
      <?php if(!empty($_SESSION['day'])){
        echo '<option value = "'.$_SESSION['day'].'">'.$_SESSION['day']."</option>";
      }?>
      <!--デフォルト値のValueを削除-->
        <option value="">--</option>
        <?php
        for($i = 1; $i<=31; $i++){ ?>
        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
        <?php } ?>
    </select>日
    <br><br>

    種別:
    <br>
    <input type="radio" name="type" value="エンジニア" <?php if($_SESSION['type']=="エンジニア"){ echo 'checked'; }?> >エンジニア<br><!--????checkedを指定しているにも関わらず初期画面で選択されていない????-->
    <input type="radio" name="type" value="営業" <?php if($_SESSION['type']=="営業"){ echo 'checked'; }?>>営業<br>
    <input type="radio" name="type" value="その他" <?php if($_SESSION['type']=="その他"){ echo 'checked'; }?>>その他<br>
    <br>

    電話番号:
    <input type="text" name="tell" <?php if(!empty($_SESSION['tell'])){
      echo 'value = "'.$_SESSION['tell'].'"';
    }  ?>>
    <br><br>

    自己紹介文
    <br>
    <textarea name="comment" rows=10 cols=50 style="resize:none" wrap="hard"><?php
    if(!empty($_SESSION['comment'])){
      echo $_SESSION['comment'];
    }?></textarea><br><br>

    <input type="submit" name="btnSubmit" value="確認画面へ">
    </form>
    <?php
    //トップページへ戻るリンクを作成
    echo return_top();

    ?>
</body>
</html>
