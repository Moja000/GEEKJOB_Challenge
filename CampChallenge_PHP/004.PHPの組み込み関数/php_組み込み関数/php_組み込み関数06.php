<?php
echo '<h2>PHP組み込み関数 </h2><br>';
echo '<h4>PHP/基礎4-6:文字数の取得</h4><br>';
/* 自分のメールアドレスの「@」以降の文字を取得して、表示してください。*/
$emailAddress = 'motoharu.tanaka.0418@gmail.com';
echo strstr($emailAddress,'@');