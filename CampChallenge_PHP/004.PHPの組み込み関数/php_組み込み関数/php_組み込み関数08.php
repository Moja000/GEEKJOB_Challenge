<?php
echo '<h2>PHP組み込み関数 </h2><br>';
echo '<h4>PHP/基礎4-8:ファイルの書き出しと保存</h4><br>';
/* ファイルに自己紹介を書き出し、保存してください。*/

touch('self-introduce.txt');
$fp = fopen('self-introduce.txt','w');
fgets($fp);
fwrite($fp, 'My name is Motoharu Tanaka');
echo $fp;
var_dump($fp);
fclose($fp);
