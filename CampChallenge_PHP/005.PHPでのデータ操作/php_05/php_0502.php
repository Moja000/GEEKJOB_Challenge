<?php
echo '<h2>PHPデータ操作 </h2><br>';
echo '<h4>２:クッキーの記録と表示</h4><br>';
/*クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。*/
$userName = '田中';
$access_time = date('Y/m/d h:m:s');
setcookie('loginDate',$access_time);

$login = $_COOKIE['loginDate'];

echo 'お帰りなさい！'.$userName.'さん';
echo '前回あなたがアクセスしたのは'.$login.'です。';