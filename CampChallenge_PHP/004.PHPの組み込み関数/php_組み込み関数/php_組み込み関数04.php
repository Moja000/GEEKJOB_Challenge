<?php
echo '<h2>PHP組み込み関数 </h2><br>';
echo '<h4>PHP/基礎4-4:タイムスタンプの表示</h4><br>';
/* 2015年1月1日 0時0分0秒と2015年12月31日 23時59分59秒の差（ミリ秒）を表示してください。*/
//date_default_timezone_set('Asia/Tokyo');//タイムゾーンを日本にセット

$firstDay = mktime(0,0,0,1,1,2015);//年始の時刻を取得
$lastDay = mktime(23,59,59,12,31,2015);//年末の時刻を取得

$minus = $lastDay - $firstDay;
echo $minus.'<br>';
echo date('Y/m/d h:m:s:u',$minus);

/*To Do!
年始と年末のミリ秒を取得
取得した値の差を表示*/
