<?php
echo '<h2>PHP基礎課題3</h2><br>';
echo '<br><h4>PHP/基礎3-4:戻り値１</h4><br>';
/* 課題「ユーザー定義関数]で定義した関数に追記する形として、戻り値　true(bool値)　を返却するように修正し、関数の呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、そうでないなら「正しく実行できませんでした」と表示する*/


function profile(){
  $name = '名前：タナカ モトハル';
  $dayOfBirth = '生年月日：1989年4月18日';
  $profile ='プロフィール：よろしくお願いします。';
  echo $name.'<br>';
  echo $dayOfBirth.'<br>';
  echo $profile.'<br>';
  return true;
}

for($i = 1; $i <= 10; $i++){
  echo $i.'回目<br>';
  echo profile().'<br>';
}


$trueOrFalse = profile();
if ($trueOrFalse==true){
  echo 'この処理は正しく実行できました';
}else{
  echo '正しく実行できませんでした';
}

