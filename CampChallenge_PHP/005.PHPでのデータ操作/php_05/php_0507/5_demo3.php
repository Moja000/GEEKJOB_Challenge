<?php
    require_once '5_demo4.php';
    require_once '5_demo6.php';

    touch('posts.txt');

    session_chk();
    
    $get_data = array();//配列が格納されている。
    
    if(!empty($_GET['name'])){
        $get_data['name'] = $_GET['name'];
    }//もし名前が入力されて入れば、配列にname => 入力された値を代入
    if(!empty($_GET['text'])){
        $get_data['text'] = $_GET['text'];
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo SHOW ?></title>
</head>
<body>
    <h1>投稿内容</h1>
    <?php 
$post = '名前 :'.$get_data['name'].'<br>本文 :'.$get_data['text'].'<br><br>';


    if(!isset($get_data['name']) || !isset($get_data['text'])){
        echo '入力データが不十分です。もう一度入力を行ってください。';
    }else{
$fp= fopen('posts.txt','a');
fwrite($fp,$post);
fclose($fp);
$fshow = file_get_contents('posts.txt');
echo $fshow;
//echo 'ok';
    }
    ?>
</body>
</html>


<!--投稿データの表示-->
