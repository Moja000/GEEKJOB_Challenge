<?php

echo 'PHP基礎課題2-1 switch文1<br>';
/*switch文を利用して、以下の処理を実現してください。
値が1なら「one」、値が2なら「two」、それ以外は「想定外」と表示する処理*/
$var = 1;

switch ($var) {
  case 1:
    echo 'one';
    break;
  case 2:
    echo 'two';
    break;
  default:
    echo '想定外';
    break;
}


echo '<br><br>PHP基礎課題2-2 switch文2<br>';
/*switch文を利用して、以下の処理を実現してください。
値が"A"なら「英語」、値が"あ"なら「日本語」、それ以外は何も表示しない処理*/
$language = 'A';

switch ($language){
  case 'A':
  echo '英語';
  break;
  case 'あ':
  echo '日本語';
  break;
}

echo '<br><br>PHP基礎課題2-3 for文1<br>';
/*for文を利用して、8を20回掛ける処理を実現してください。*/
$eight = 8;
for($i=1;$i<=20;$i++){
$eight*=8;
}
echo $eight;


echo '<br><br>PHP基礎課題2-4 for文2<br>';
/*for文を利用して、"A"を30個連結する処理を実現してください。*/
$A = '';
for($i=1;$i<=30;$i++){
  $A .='A';
}
echo $A;

echo '<br><br>PHP基礎課題2-5 for文3<br>';
/*for文を利用して、0から100を全部足す処理を実現してください。*/
$sum = 0;
for($i=0;$i<=100;$i++){
$sum += $i;
}
echo $sum;


echo '<br><br>PHP基礎課題2-6 while文１<br>';
/*while文を利用して、以下の処理を実現してください。
1000を2で割り続け、100より小さくなったらループを抜ける処理*/
$div = 1000;
while($div>=100){
  echo $div.'<br>';
  $div/=2;
}

echo '<br><br>PHP基礎課題2-7 配列の作成<br>';
/*以下の順番で、要素が格納された配列を作成してください。
"10", "100", "soeda", "hayashi", "-20", "118", "END"*/
$arr1 = array("10", "100", "soeda", "hayashi", "-20", "118", "END");
var_dump($arr1);
echo '<br><br>PHP基礎課題2-8 配列の変更<br>';

/*課題「配列の作成」で作成した配列の"soeda"を"33"に変更してください。*/
$arr[2]='33';
echo $arr[2];

echo '<br><br>PHP基礎課題2-9 連想配列の作成  <br>';
/*以下の順で、連想配列を作成してください。
"1"に"AAA", "hello"に"world", "soeda"に"33", "20"に"20"*/
$arr2 = array("1"=>"AAA", "hello"=>"world", "soeda"=>"33", "20"=>"20");
var_dump($arr2);

echo '<br><br>PHP基礎課題2-10 クエストリング（簡易素因数分解）<br>';
/*クエリストリングを利用して、以下の処理を実現してください。
簡易素因数分解のロジックを作成します。
クエリストリングから渡された数値を1ケタの素数で可能な限り分解し、
元の値と素因数分解の結果を表示するようにしてください。
2ケタ以上の素数が含まれた数値の場合は、
「元の値  1ケタの素因数  その他」と表記して、その他  に含んでください。*/
$int = $_GET['int']; //値の取得
$num1 = $int; //割った後の数
$num2 = ''; //素数
$otherNum = null; //素数が２桁だった場合の数

//入力した値が素数だった場合を排除する条件
while($num1 != 2 ||$num1 != 3 ||$num1 != 5 ||$num1 != 7){
  if($num1%2==0){
   $num1 = $num1 / 2;
   $num2 .= '2, ';
   if($num1 == 1){
    break;
   }
  }elseif($num1%3==0){
   $num1 = $num1 / 3;
   $num2 .= '3, ';
   if($num1 == 1){
    break;
   }
  }elseif($num1%5==0){
   $num1 = $num1 / 5;
   $num2 .= '5, ';
   if($num1 == 1){
    break;
   }
  }elseif($num1%7==0){
   $num1 = $num1 / 7;
   $num2 .= '7, ';
   if($num1 == 1){
    break;
   }
  }else{
    if($num1 != 1){
$otherNum = $num1;
}
break;
  }
}
echo '元の値：'.$int.'<br>';
echo '素数：'.$num2.'<br>';
echo 'その他：'.$otherNum.'<br>';


?>




