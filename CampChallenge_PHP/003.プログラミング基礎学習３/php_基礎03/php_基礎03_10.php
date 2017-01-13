<?php
echo '<h2>PHP基礎課題3</h2><br>';
echo '<br><h4>PHP/基礎3-10:continueとbreak</h4><br>';
/* 課題「continue」の処理のうち2人目まででforeachのループを抜けるようにする*/


function showProf(){

  $profile1 = array(1, '東野圭吾','1958/02/04','大阪府');
  $profile2 = array(2,'村上春樹','1949/01/12','京都府');
  $profile3 = array(3,'太宰治','1909/06/19','青森県');
  $profs = array($profile1,$profile2,$profile3);


foreach($profs as $key1){
   foreach($key1 as $key2){
    if($key2 == $key1[0] || $key2 == $key1[3] ){
    continue;
  }//ここまではOkay

//Profile3でループを抜ける処理を追加。

  elseif($key1 == $profs[2]){
    break;
  }
   echo $key2.'<br>';}
   }
 }


$pf =  showProf();
echo $pf().'<br>';

//



?>

