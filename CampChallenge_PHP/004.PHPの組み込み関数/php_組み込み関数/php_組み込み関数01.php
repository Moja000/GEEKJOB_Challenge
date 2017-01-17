<?php
echo '<h2>PHP組み込み関数 </h2><br>';
echo '<h4>PHP/基礎4-1:タイムスタンプの作成</h4><br>';
/* 2016年1月1日 0時0分0秒のタイムスタンプを作成し、表示してください。*/
$timestamp = mktime(0,0,0,1,1,2016);//(h m s M D Y)
echo $timestamp;