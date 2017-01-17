<?php
echo '<h2>PHP組み込み関数 </h2><br>';
echo '<h4>PHP/基礎4-5:バイト数と文字数の取得</h4><br>';
/* 自分の氏名について、バイト数と文字数を取得して、表示してください。*/

$myName = '田中元春';
echo '私の名前は '.$myName.'です<br>';

$str = strlen($myName);
$strb = mb_strlen($myName);

echo 'バイト数は、'.$str.'バイト<br>';
echo '文字数は、'.$strb.'文字です。<br>';