<?php
echo '<h2>PHP基礎課題3</h2><br>';
echo '<h4>PHP/基礎3-1:ユーザー定義関数</h4><br>';
/* 自分のプロフィール(名前、生年月日、自己紹介)を3行に分けて表示するユーザー定義関数を作り、関数を10回呼び出して下さい*/

function profile(){
  $name = '名前：タナカ モトハル';
  $dayOfBirth = '生年月日：1989年4月18日';
  $profile ='プロフィール：よろしくお願いします。';
  echo $name.'<br>';
  echo $dayOfBirth.'<br>';
  echo $profile.'<br>';
}

for($i = 1; $i <= 10; $i++){
  echo $i.'回目<br>';
  echo profile().'<br>';
}

