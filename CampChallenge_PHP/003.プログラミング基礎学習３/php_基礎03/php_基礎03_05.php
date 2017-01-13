<?php
echo '<h2>PHP基礎課題3</h2><br>';
echo '<br><h4>PHP/基礎3-5:戻り値２</h4><br>';
/* 戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する*/

function profile(){
$id = 1;
$name = 'タナカ モトハル';
$birth = '1989/04/18';
$add = '神奈川県';
$prof = array($id,$name,$birth,$add);
return $prof;
}

$info = profile();
foreach($info as $key){
  echo $key.'<br>';
}
