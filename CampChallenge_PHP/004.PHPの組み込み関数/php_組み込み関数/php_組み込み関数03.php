<?php
echo '<h2>PHP組み込み関数 </h2><br>';
echo '<h4>PHP/基礎4-3:タイムスタンプの表示</h4><br>';
/* 2016年11月4日 10時0分0秒のタイムスタンプを作成し、「年-月-日 時:分:秒」で表示してください。*/

$timestamp = mktime(10,0,0,11,4,2016);
$date_jp = date('Y年m月d日 H時:i分:s秒',$timestamp);
echo $date_jp;