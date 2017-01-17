<?php
echo '<h2>PHP組み込み関数 </h2><br>';
echo '<h4>PHP/基礎4-10:組み込み関数まとめ</h4><br>';
/* 紹介していないPHPの組み込み関数を利用して、処理を作成してください。

講義では紹介されていないPHPの組み込み関数はたくさん存在します。
PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。

また、この処理を作成するに当たり、下記を必ず実装してください。
①処理の経過を書き込むログファイルを作成する。
②処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
③書き込む内容は、「日時 状況（開始・終了）」の形式で書き込む。
④最後に、ログファイルを読み込み、その内容を表示してください。*/

//①処理の経過を書き込むログファイルを作成する。
//

touch('test.txt');//ログファイルの作成
date_default_timezone_set('Asia/Tokyo');//タイムゾーンの変更
mktime();//日時の取得
$day = date('Y/m/d h:m:s').'<br>';
$start = '開始  '.$day.'<br>';//処理の開始日時
$finish = '終了  '.$day.'<br>';//処理の終了日時

//ここから実際に組み込む関数を記述。
//①配列を文字列に変換し出力
$profile = array('プロフィール：','田中','２７','東京');
$str = implode(',',$profile);

//②処理にかかった時間を計測
$start_time = microtime(true);
$end_time = microtime(true);
$time = $end_time - $start_time;

//ファイルへの記述

$fp = fopen('test.txt','w');
fgets($fp);
$start_time;
fwrite($fp,$start.$str);
$end_time;
fwrite($fp,"<br>処理速度： {$time}秒かかりました。<br><br>".$finish);
fclose($fp);

//ファイルの呼び出し
$fs = file_get_contents('test.txt');
echo $fs;
