<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP基礎01</title>


</head>
<body>

  <?php
  //PHPプログラミング基礎1-1
    // 'Hello world.'を表示してください
    echo "Hello world."
  ?>

  <br>

  <?php
  //PHPプログラミング基礎1-2
    // 「groove」「-」「gear」の３つの文字列を連結して表示してください
    echo 'groove'.'-'.'gear';
  ?>

  <br>

  <?php
  //PHPプログラミング基礎1-3
    // 変数を宣言し、自分の自己紹介を中身として定義、それを表示してみてください。
    $selfIntroduce = 'はじめまして、私の名前はタナカモトハルです。';
    echo $selfIntroduce;
  ?>

    <br>

  <?php
  //PHPプログラミング基礎1-4
    // 「定数と変数を宣言し、それぞれに数値を入れて四則演算を行い、四則演算の結果をそれぞれ表示してください。
    const NUM1 = 5;
    $num2 = 5;
    echo NUM1+$num2.'<br>';
    echo NUM1-$num2.'<br>';
    echo NUM1*$num2.'<br>';
    echo NUM1/$num2.'<br>';
    echo NUM1%$num2.'<br>';
  ?>

    <br>

  <?php
  //PHPプログラミング基礎1-5
    /* 変数を宣言し、その変数の中身によって以下の表示を行ってください。
    ⇒値が 1 なら「１です！」
    ⇒値が 2 なら「プログラミングキャンプ！」
    ⇒それ以外なら「その他です！」*/
    $num1 = 1;

    if($num1 == 1){
    echo '１です！';
    }
    elseif($num1 == 2){
    echo 'プログラミングキャンプ！';
    }
    else{
    echo 'その他です！';
    }

  ?>

    <br>

  <?php
  //PHPプログラミング基礎1-6
    /* クエリストリングを利用して、以下の処理を実現してください。
スーパーのレジでレシートを作る仕組みを作成します。
*/



//初期化処理
$totalPrice = $_GET['totalprice']; //合計価格
$countItem = $_GET['countitem']; //商品個数
$categorie = $_GET['categorie']; //商品種別

/*
①商品種別は、３つ。１：雑貨、２：生鮮食品、３：その他
まずは、この商品種別を表示してください。
*/
if($categorie == 1){
   $categorie = '雑貨';
}elseif($categorie == 2){
  $categorie = '生鮮食品';
}elseif($categorie == 3){
  $categorie = 'その他';
}

echo '商品種別：'.$categorie.'<br>';


/*
②総額と個数から１個当たりの値段を算出してください。
総額と１個当たりの値段を表示してください。
*/
$price = 0 ;//商品単価
$price = $totalPrice/$countItem;

echo '総額：'.$totalPrice.'円<br>';
echo '単価：'.$price.'円<br>';


/*③3000円以上購入で4%、5000円以上購入で5%のポイントが付きます。
購入額に応じたポイントの表示を行ってください。*/
$point = 0 ;//ポイント
if($totalPrice >= 3000 && $totalPrice < 5000){
  $point = $totalPrice*0.04;
}elseif($totalPrice >= 5000){
  $point = $totalPrice*0.05;
}

echo '獲得ポイント'.$point.' point<br>'

  ?>

    

</body>
</html>