<?php
$set_name = setcookie('name',$_POST['name']);
$set_gender = setcookie('gender',$_POST['gender']);
$set_hobby = setcookie('hobby',$_POST['hobby']);

echo 'なまえ'.$_COOKIE['name'].'<br>';
echo 'せいべつ'.$_COOKIE['gender'].'<br>';
echo 'しゅみ'.$_COOKIE['hobby'].'<br>';



//echo $_COOKIE['name'];

//$name = $_POST['name'];
//$gender = $_POST['gender'];
//$hobby = $_POST['hobby'];





?>

