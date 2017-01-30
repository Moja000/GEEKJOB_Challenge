<?php
/*
下記のデモプログラムを参考に、次の課題を行いなさい。

＞デモプログラム

『デモプログラムの動かし方』
・ファイルを解凍し、databaseディレクトにあるpdo_demo.sqlを各自のデータベースに入れてください。
>> mysql -u root < "pdo_demo.sqlがあるフォルダまでのパス"\pdo_demo.sql
・sourceフォルダの中身をXAMPPのいつもの場所に置き、動く事を確認してください。

以下の仕様のプログラムを作成しなさい
・○×塾の一週間時間割
・時間割はhtmlのテーブル構造をうまく用いること
・科目名と、担当者が各テーブルに入る
・科目名、担当者名は自由に考えてよい。
・入力フォームを持つページを用意し、何日目の、何時限目に、どの科目で、どの担当者が担当するのか、をそれぞれ入力できる。*/

?>
<html>
<head>
  <title>○x塾：時間割の編集</title>
</head>
<body>
<h2>時間割編集ページ</h2>

<!--フォームの作成-->
<form name="arrenge-schedule" action="pdo-arrenge-schedule.php" method="POST">
曜日を選択してください。
  <select name="day" >
    <option value="WS_Mon">月曜日</option>
    <option value="WS_Tue">火曜日</option>
    <option value="WS_Wed">水曜日</option>
    <option value="WS_Thu">木曜日</option>
    <option value="WS_Fri">金曜日</option>
    <option value="WS_Sat">土曜日</option>
    <option value="WS_Sun">日曜日</option>
  </select>
  <br />
  時間を選択してください。
<select name="time">
  <option value="1">1時間目</option>
  <option value="2">2時間目</option>
  <option value="3">3時間目</option>
  <option value="4">3時間目</option>
  <option value="5">5時間目</option>
</select>
<br />
科目を選択してください。
<select name="subject">
<option value="国語">国語</option>
<option value="英語">英語</option>
<option value="数学">数学</option>
<option value="理科">理科</option>
<option value="社会">社会</option>
</select>
<br />
担当者を選択してください。
<select name="teacher">
<option value="山田">山田</option>
<option value="田中">田中</option>
<option value="佐藤">佐藤</option>
<option value="鈴木">鈴木</option>
<option value="伊藤">伊藤</option>
</select>
<br />
<br />
<input type ="submit" value="編集!" />

<?php
$day=$_POST['day'];
$time=$_POST['time'];
$subject=$_POST['subject'];
$teacher=$_POST['teacher'];


$pdo=new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test' );
$sql= "UPDATE $day SET ID=$time, Sub= '$subject', teacher = '$teacher' where ID=$time;";

$query=$pdo->prepare($sql);
$query->execute();

if($query->execute()==ture){
echo '<br><h3>時間割を更新しました。</h3>';
echo '<a href="http://localhost:8888/php_07/php_db%E6%93%8D%E4%BD%9C13/pdo-main.php">トップページへ戻る</a>';
}


?>

</body>
</html>
