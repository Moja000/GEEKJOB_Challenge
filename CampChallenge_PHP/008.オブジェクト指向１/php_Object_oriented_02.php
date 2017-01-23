<?php
/*以下の機能を持つクラスを作成してください。
・パブリックな２つの変数
・２つの変数に値を設定するパブリックな関数
・２つの変数の中身をechoするパブリックな関数
*/

class Prof{

//publicな変数の定義
  public $name='';
  public $age =NULL;

//各変数に値を設定するための関数
  public function setProf($n,$a){
    $this->name = $n;
    $this->age = $a;
  }

//各変数を取り出しエコーするための関数
  public function getProf(){
  echo $this->name;
  echo $this->age;
    }
}



$a = new Prof;//Profクラスのインスタンスを作成
$a->setProf('ken',10);//セッターで値をセット

$b = new Prof;//Profクラスのインスタンスを作成
$b->setProf('Kate',19);//セッターで値をセット

echo $a->getProf().'<br>';//ゲッターで値を取得しエコー
echo $b->getProf().'<br>';//ゲッターで値を取得しエコー

?>
