<?php
echo '<h2>PHP基礎課題3</h2><br>';
echo '<br><h4>PHP/基礎3-6:引数、戻り値</h4><br>';
/* 名前による検索プログラムを実装する。3人分のプロフィール(項目は課題「戻り値2」参照)をあらかじめ定義しておく。引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を返却する。引き数の文字が名前に含まれる(部分一致)プロフィール情報(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。それ以降などは課題「戻り値2」と同じ扱いに*/
//要は引数に入れた文字列に部分一致するプロフィールを戻り値として返す。


$inputs = '治';//検索する文字列を入力してください。
$profs = array();


function profile2($profs,$inputs){

  $profile1 = array(1,'東野圭吾','1958/02/04','大阪府');
  $profile2 = array(2,'村上春樹','1949/01/12','京都府');
  $profile3 = array(3,'太宰治','1909/06/19','青森県');
  
  global $profs;
  $profs = array($profile1,$profile2,$profile3);
  global $inputs;
  //strpos(文字列A,文字列B)
  //AからBを検索しその位置を返す。もし見つからない場合-1を返す。

//もし入力された文字が
if(strpos($profile1[1],$inputs) != false){
  return $profile1;
}elseif(strpos($profile2[1],$inputs) != false){
  return $profile2;
}elseif(strpos($profile3[1],$inputs) != false){
  return $profile3;
}
}


$heystack = profile2($profs,$inputs);

foreach($heystack as $key){
  echo $key.'<br>';
}
