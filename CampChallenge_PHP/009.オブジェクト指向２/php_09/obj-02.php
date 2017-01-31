<?php

//抽象クラスの作成
abstract class base{
  abstract protected function load();
  abstract public function show();
}


//抽象クラスの継承
class human extends base{

  //プライベートな変数の作成
  private $table;
  function __construct(){
    $this->table = 'human';
  }

//データベースから情報を取得
  function load(){
    //DBへ接続
    $pdo= new PDO('mysql:host=localhost;dbname=Obj_db;charset=utf8','test','test');
    //SQL
    $sql ='SELECT * FROM '.$this->table;//「覚書」bindValueをテーブル名検索に利用することはできない。
    $query=$pdo->prepare($sql);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    $pdo = null;
  }

//取得した情報を表示
  public function show(){
   $result=$this->load();
   foreach($result as $value){
     echo '<br>';
     foreach($value as $value2){
       echo $value2.'<br>';
     }
     }
     }
}

//抽象クラスの継承
class station extends base{

  //プライベートな変数の作成
  private $table;
  function __construct(){
    $this->table = 'station';
  }

//データベースから情報を取得
  function load(){
    //DBへ接続
    $pdo= new PDO('mysql:host=localhost;dbname=Obj_db;charset=utf8','test','test');
    //SQL
    $sql ='SELECT * FROM '.$this->table;//「覚書」bindValueをテーブル名検索に利用することはできない。
    $query=$pdo->prepare($sql);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    $pdo = null;
  }

//取得した情報を表示
  public function show(){
   $result=$this->load();
   foreach($result as $value){
     echo '<br>';
     foreach($value as $value2){
       echo $value2.'<br>';
     }
     }
     }
}

//インスタンスの作成
$test = new human();
//データベース読み込み
$test->load();
//データの表示
$test->show();

$test = new station();
//データベース読み込み
$test->load();
//データの表示
$test->show();

?>
