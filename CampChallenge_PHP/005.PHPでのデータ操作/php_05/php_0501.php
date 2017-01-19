<html>
<head>
</head>
<body>



<?php
echo '<h2>PHPデータ操作 </h2><br>';
echo '<h4>１:HTMLの入力データの取得と表示</h4><br>';
/*以下の入力フィールドを持ったHTMLを、PHPで処理する想定で記述し、作成したHTMLの入力データを取得し、画面に表示する。
・名前（テキストボックス）、性別（ラジオボタン）、趣味（複数行テキストボックス）*/

$name = $_POST['name'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];


echo $name.'<br>';
echo $gender.'<br>';
echo $hobby.'<br>';

?>

<form action ="http://localhost:8888/php_%E3%83%87%E3%83%BC%E3%82%BF%E6%93%8D%E4%BD%9C/php_%E3%83%87%E3%83%BC%E3%82%BF%E6%93%8D%E4%BD%9C01.php" method = "post">

名前：
<input type ="text" name = "name">
<br>
性別：
<input type ="radio" name = "gender" value="男">男
<input type ="radio" name = "gender" value="女">女

<br>
趣味：
<textarea name="hobby"></textarea>
<br>
<br>
<input type = "submit" value = "送信">

</form>

</body>
</html>
