
<?php
/*以下の仕様のプログラムを作成しなさい
・○×塾の一週間時間割
・時間割はhtmlのテーブル構造をうまく用いること
・科目名と、担当者が各テーブルに入る
・科目名、担当者名は自由に考えてよい。


・入力フォームを持つページを用意し、何日目の、何時限目に、どの科目で、どの担当者が担当するのか、をそれぞれ入力できる。
入力フォーム→完了
*/




//変数の初期化
$tb_name='';
$col_name='';
$id=1;


//データベースに接続し、引数に渡した値に対応するテーブルの値を表示する関数
function tb_getter($tb_name,$col_name,$id){
 $pdo=new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');
 $sql= "SELECT $col_name from $tb_name where ID= $id;";
 $query=$pdo->prepare($sql);
 $query->execute();

$result=$query->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $value){
  foreach($value as $value2){
    echo $value2;
  }
}
}




?>

<html>
<head>
  <title>時間割表</title>
</head>
<body>
  <h1>時間割表</h1><br />
<!--テーブルの作成-->
<table border="1">
<tr bgcolor="skyblue">
  <th width="100">
    時限目
  </th>
  <th width="100">
    月曜日
  </th>
  <th width="100">
    火曜日
  </th>
  <th width="100">
    水曜日
  </th>
  <th width="100">
    木曜日
  </th>
  <th width="100">
    金曜日
  </th>
  <th width="100">
    土曜日
  </th>
  <th width="100">
    日曜日
  </th>
</tr>

<tr>
  <td rowspan="3" align="center" bgcolor="lightgreen">
<?php tb_getter('WS_Mon','ID',1);?>
  </td>
</tr>
<tr>
  <td align="center">
    <?php tb_getter('WS_Mon','Sub',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','Sub',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','Sub',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','Sub',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','Sub',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','Sub',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','Sub',1);?>
  </td>
</tr>

<tr bgcolor="lightgray">
  <td align="center" >
    <?php tb_getter('WS_Mon','teacher',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','teacher',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','teacher',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','teacher',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','teacher',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','teacher',1);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','teacher',1);?>
  </td>
</tr>

<tr>
  <td rowspan="3" align="center" bgcolor="lightgreen">
<?php tb_getter('WS_Mon','ID',2);?>
  </td>
</tr>
<tr>
  <td align="center">
    <?php tb_getter('WS_Mon','Sub',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','Sub',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','Sub',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','Sub',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','Sub',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','Sub',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','Sub',2);?>
  </td>
</tr>

<tr bgcolor="lightgray">
  <td align="center" >
    <?php tb_getter('WS_Mon','teacher',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','teacher',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','teacher',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','teacher',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','teacher',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','teacher',2);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','teacher',2);?>
  </td>
</tr>

<tr>
  <td rowspan="3" align="center" bgcolor="lightgreen">
<?php tb_getter('WS_Mon','ID',3);?>
  </td>
</tr>
<tr>
  <td align="center">
    <?php tb_getter('WS_Mon','Sub',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','Sub',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','Sub',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','Sub',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','Sub',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','Sub',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','Sub',3);?>
  </td>
</tr>

<tr bgcolor="lightgray">
  <td align="center" >
    <?php tb_getter('WS_Mon','teacher',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','teacher',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','teacher',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','teacher',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','teacher',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','teacher',3);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','teacher',3);?>
  </td>
</tr>

<tr>
  <td rowspan="3" align="center" bgcolor="lightgreen">
<?php tb_getter('WS_Mon','ID',4);?>
  </td>
</tr>
<tr>
  <td align="center">
    <?php tb_getter('WS_Mon','Sub',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','Sub',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','Sub',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','Sub',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','Sub',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','Sub',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','Sub',24);?>
  </td>
</tr>

<tr bgcolor="lightgray">
  <td align="center" >
    <?php tb_getter('WS_Mon','teacher',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','teacher',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','teacher',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','teacher',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','teacher',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','teacher',4);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','teacher',4);?>
  </td>
</tr>

<tr>
  <td rowspan="3" align="center" bgcolor="lightgreen">
<?php tb_getter('WS_Mon','ID',5);?>
  </td>
</tr>
<tr>
  <td align="center">
    <?php tb_getter('WS_Mon','Sub',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','Sub',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','Sub',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','Sub',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','Sub',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','Sub',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','Sub',5);?>
  </td>
</tr>

<tr bgcolor="lightgray">
  <td align="center" >
    <?php tb_getter('WS_Mon','teacher',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Tue','teacher',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Wed','teacher',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Thu','teacher',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Fri','teacher',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sat','teacher',5);?>
  </td>
  <td align="center">
    <?php tb_getter('WS_Sun','teacher',5);?>
  </td>
</tr>


</table>



</body>
</html>
