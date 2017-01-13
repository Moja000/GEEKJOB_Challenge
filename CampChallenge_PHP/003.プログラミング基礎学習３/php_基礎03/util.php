<?php
function evenOrOdd($num1){
if($num1%2==0){
  echo $num1.'は偶数です。';
}else{
  echo $num1.'は奇数です。';
}
}
$num1=rand(1,100);
echo evenOrOdd($num1);


