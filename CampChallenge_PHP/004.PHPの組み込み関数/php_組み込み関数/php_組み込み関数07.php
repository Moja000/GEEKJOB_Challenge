<?php
echo '<h2>PHP組み込み関数 </h2><br>';
echo '<h4>PHP/基礎4-7:文字の入れ替え</h4><br>';
/* 以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、結果を表示してください。
「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」。*/

$str = 'きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます';

$str = str_replace('I','い',$str);
$str = str_replace('U','う',$str);

echo $str;