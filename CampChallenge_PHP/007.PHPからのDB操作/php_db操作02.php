<?php

/*以下の課題を、PHPからのPDOを用いて実現してください。
前回の課題「テーブルの作成とinsert」で作成したテーブルに自由なメンバー情報を格納する処理を構築してください*/

$pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test');
$sql ="insert into profiles values(5,'矢島 英','080-5522-6611',13,'2004-07-13');";
$query = $pdo->prepare($sql);
$query->execute();
$pdo = Null;

 ?>
