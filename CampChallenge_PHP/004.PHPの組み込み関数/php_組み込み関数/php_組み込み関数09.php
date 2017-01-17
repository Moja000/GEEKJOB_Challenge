<?php
echo '<h2>PHP組み込み関数 </h2><br>';
echo '<h4>PHP/基礎4-9:ファイルから読み出しと表示</h4><br>';
/* ファイルから自己紹介を読み出し、表示してください。*/
$fs = file_get_contents('self-introduce.txt');
echo $fs;