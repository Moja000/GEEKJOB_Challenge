<?php
class Items {

//変数の初期化
PUBLIC $id = NULL;
PUBLIC $name = '';
PUBLIC $price = NULL;
PUBLIC $stock = NULL;

//商品を登録する関数
function ItemRegistar($id,$name,$price,$stock){
  $pdo=new PDO('mysql:host=localhost;dbname=Obj_db;charset=utf8','test','test');
  $sql="INSERT INTO item (id,name,price,stock) VALUES('$id','$name','$price','$stock');";
  $query=$pdo->prepare($sql);
  $query->execute();
}

//全商品一覧を表示する関数
  function showAllItems(){
    //dbへ接続
    $pdo=new PDO('mysql:host=localhost;dbname=Obj_db;charset=utf8','test','test');
    $sql='select * from item';
    $query=$pdo->prepare($sql);
    $query->execute();

    //結果をテーブルとして出力
    $result=$query->fetchAll(PDO::FETCH_ASSOC);
    echo '<h1>商品一覧</h1>';
    echo '<table border="1" >';
    echo '<tr bgcolor="lightblue" align="center" ><th width="100px">品番</th><th width="100px">商品名</th><th width="100px">単価</th><th width="100px">在庫数</th></tr>';
    foreach($result as $value){
      echo '<tr align="center" >';
      foreach($value as $value2){
        echo '<td>'.$value2.'</td>';
      }echo '</tr>';
    }echo'</table>';
  }
}


class Users{

//変数の定義
public $id=NULL;
public $name ='';
public $age = NULL;
public $email = '';
public $pass ='';

//ログイン機能
function login(){

}



//ログアウト機能

}
?>
