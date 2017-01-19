<html>
<head>
</head>
<body>

<?php
echo '<h2>PHPデータ操作 </h2><br>';
echo '<h4>５:PHPとHTMLの入力フォーム</h4><br>';
/*名前・性別・趣味を入力するページを作成してください。
また、入力された名前・性別・趣味を記憶し、次にアクセスした際に記録されたデータを初期値として表示してください。
※PHPと同時に、HTMLの知識が必要になります。
※入力フィールドの使い方を調べてみましょう。*/
$set_name = setcookie('name',$_POST['name']);
$set_gender = setcookie('gender',$_POST['gender']);
$set_hobby = setcookie('hobby',$_POST['hobby']);

?>
<form name = "form1" action = "php_0505.php" method = "post">
名前：<input type = "text" name ="name" value=<?php echo '"'.$_POST['name'].'"'; ?>>
<br>
性別：
男<input type ="radio" name ="gender" value="♂" <?php if($_POST['gender']=='♂'){
 echo checked;
 } ?>>
女<input type ="radio" name ="gender" value="♀" <?php if($_POST['gender']=='♀'){
 echo 'checked';
 } ?>>
<br>
趣味：<textarea name="hobby" ><?php echo $_POST['hobby']; ?></textarea>
<br>
<br>
<input type ="submit" value = "送信">
</form>



</body>
</html>
