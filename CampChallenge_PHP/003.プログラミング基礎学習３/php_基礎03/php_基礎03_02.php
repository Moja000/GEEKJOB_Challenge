<?php
echo '<h2>PHP基礎課題3</h2><br>';
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


