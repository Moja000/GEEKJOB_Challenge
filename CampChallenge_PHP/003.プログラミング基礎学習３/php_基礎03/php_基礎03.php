<?php
echo '<h2>PHP基礎課題3</h2><br>';
echo '<h4>PHP/基礎3-1:ユーザー定義関数</h4><br>';
/* 自分のプロフィール(名前、生年月日、自己紹介)を3行に分けて表示するユーザー定義関数を作り、関数を10回呼び出して下さい*/
function profile(){
  echo 'NAME : MOTOHARU TANAKA <br>DAY OF BIRTH : 1989/04/18<br>PROFILE : Nice to meet you. I hoping that you have a beautiful day today!!<br><br>';
  return true;//課題3-4戻り値1
}
for($i = 1; $i <= 10; $i++){
  echo $i.'<br>';
  echo profile();
}


echo '<br><h4>PHP/基礎3-2:引数１</h4><br>';
/*引数として数値を受け取り、その値が奇数か偶数か判別＆表示する処理を関数として制作し、適当な数値に対して奇数・偶数の判別を行ってください */


function evenOrOdd($num1){
if($num1%2==0){
  echo $num1.'は偶数です。';
}else{
  echo $num1.'は奇数です。';
}
}
$num1=rand(1,100);
echo evenOrOdd($num1);


echo '<br><h4>PHP/基礎3-3:引数２</h4><br>';
/*引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、最後はデフォルト値がfalse(bool値)の$typeを引き数として定義する。1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、$typeがfalseの時はその値を表示、trueのときはさらに2乗して表示する。
例）function sample($□□□, $△△△, $type) // 引数が３つの関数書き出し部分(デフォルト値なし) */

function triple($num1,$num2=5,$type=false){
  $sum = $num1*$num2;
  if($type==false){
    echo $sum;
  }else{
    echo $sum*$sum;
  }
}
echo triple(rand(1,10));

echo '<br><h4>PHP/基礎3-4:戻り値１</h4><br>';
/* 課題「ユーザー定義関数]で定義した関数に追記する形として、戻り値　true(bool値)　を返却するように修正し、関数の呼び出し側でtrueを受け取れたら「この処理は正しく実行できました」、そうでないなら「正しく実行できませんでした」と表示する*/
$a = profile();
if ($a==true){
  echo 'この処理は正しく実行できました';
}else{
  echo '正しく実行できませんでした';
}

echo '<br><h4>PHP/基礎3-5:戻り値２</h4><br>';
/* 戻り値としてある人物のid(数値),名前,生年月日、住所を返却し、受け取った後は全情報を表示する*/

function profile2(){
$accountNumber = 1 ;
$accountName = '織田信長';
$accountBirth = '1534/06/23';
$accountAddress = '本能寺３丁目';
  $account = array($accountNumber,$accountName,$accountBirth,$accountAddress);
  return $account;

}
$arrProf = profile2();
foreach($arrProf as $key ){
echo $key.'<br>';
}


echo '<br><h4>PHP/基礎3-6:引数、戻り値</h4><br>';
/* 前による検索プログラムを実装する。3人分のプロフィール(項目は課題「戻り値2」参照)をあらかじめ定義しておく。引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を返却する。引き数の文字が名前に含まれる(部分一致)プロフィール情報(複数名合致する場合は最初のプロフィールとする)を戻り値として返却する。それ以降などは課題「戻り値2」と同じ扱いに*/
//要は引数に入れた文字列に一致するプロフィールを戻り値として返す。

function serach($name){
$prof1 = array(1,'タナカ','1989/04/18','東京');
$prof2 = array(2,'サトウ','2003/05/23','大阪');
$prof3 = array(3,'スズキ','1994/04/22','青森');

if($name=='タナカ'){
  return $prof1;
}elseif($name == 'サトウ'){
  return $prof2;
}elseif ($name == 'スズキ') {
  return $prof3;
};
}
$chose = serach('スズキ');
foreach ($chose as $key) {
  echo $key.'<br>';
};

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

echo '<br><h4>PHP/基礎3-8:require</h4><br>';
/* 課題「ユーザー定義関数」、課題「引数1」のユーザー定義箇所を含んだutil.phpを作成し、requireで呼び出して表示する*/
require "util.php";
echo req(200);



echo '<br><h4>PHP/基礎3-9:continue</h4><br>';
/* 3人分のプロフィールについてIDと住所以外を表示する処理を実行する。2重のforeachとcontinueを必ず用いること*/


echo '<br><h4>PHP/基礎3-10:continueとbreak</h4><br>';
/* 課題「continue」の処理のうち2人目まででforeachのループを抜けるようにする*/


?>

