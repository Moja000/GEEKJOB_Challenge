<?php

//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う
function connect2MySQL(){
    try{

        $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','test','test',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $pdo;
        // throw new Exception('データベースの接続に失敗しました。');
    } catch (PDOException $e) {
      echo $e->getMessage();
        // die('接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
    }
}

function insertToMysql($insert_db,$name,$birthday,$tell,$type,$comment){
  //DBに全項目のある1レコードを登録するSQL
  //try　catchを追加
  try{
    $insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
          . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

  //クエリとして用意
  $insert_query = $insert_db->prepare($insert_sql);

  //SQL文にセッションから受け取った値＆現在時をバインド
  $insert_query->bindValue(':name',$name);
  $insert_query->bindValue(':birthday',$birthday);
  $insert_query->bindValue(':tell',$tell);
  $insert_query->bindValue(':type',$type);
  $insert_query->bindValue(':comment',$comment);
  // newDateの値をtime()からdate()に変更
  $insert_query->bindValue(':newDate',date('Y-m-d h:m:s'));

  //SQLを実行
  $ret = $insert_query->execute();
  return $ret;
}catch(PDOException $e){
  //エラーの際、メッセージを表示
  echo 'データの注入に失敗しました';
  echo $e->getMessage();
}

}

function disconnectDB(){
  $pdo=Null;
}
