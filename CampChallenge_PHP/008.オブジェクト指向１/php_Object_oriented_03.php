<?php
/*課題「クラスの作成1」のクラスを継承し、以下の機能を持つクラスを作成してください。
・２つの変数の中身をクリアするパブリックな関数 */

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
  echo $this->name.'<br>';
  echo $this->age;
    }
  }

//クラスの継承
class NClear extends Prof{

//２つの変数の中身をクリアする関数の定義
  public function setClear(){
    $n='';
    $a=NULL;
    $this->name=$n;
    $this->age =$a;
  }
}


$a = new NClear;//継承したクラスの呼び出し
$a->setProf('Jhon',18);//適当な値を設定
echo $a->getProf();//値が入っていることを確認
$a->setClear();//クリア関数の呼び出し
echo $a->getProf();//値がクリアされていることを確認
