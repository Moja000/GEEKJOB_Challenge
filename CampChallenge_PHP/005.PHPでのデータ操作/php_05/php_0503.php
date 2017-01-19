<?php
echo '<h2>PHPデータ操作 </h2><br>';
echo '<h4>３:セッションの記録と表示</h4><br>';
/*課題「クッキーの記録と表示」と同じ機能をセッションで作成してください。*/
$lastLoginDate = date('Y/m/d h:m:s');



session_start();
$_SESSION['date'] = $lastLoginDate;
echo '最後にあなたがログインしたのは'.$_SESSION['date'].'です。';