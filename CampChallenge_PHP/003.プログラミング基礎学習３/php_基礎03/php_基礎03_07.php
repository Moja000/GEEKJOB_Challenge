<?php
echo '<h2>PHP基礎課題3</h2><br>';
echo '<br><h4>PHP/基礎3-7:グローバル変数</h4><br>';
/* 引き数、戻り値はなしの関数を用意。初期値3のglobal値を2倍していく、ローカルな値はstaticとしてその関数が何回実行されたのかを保持していくような関数である。この関数を20回呼び出す*/
$three = 3;

function gs(){
  
  static $num1;
  $num1++;
  echo $num1.'回目<br>';
  
  global $three;
  $three = $three*2;
  echo $three.'<br><br>';
}

for($i=1;$i<=20;$i++){
  echo gs();
}

