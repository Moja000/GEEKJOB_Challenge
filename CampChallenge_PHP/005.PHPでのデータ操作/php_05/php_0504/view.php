<HTML>
  <HEAD>
    <TITLE>PHPのテスト</TITLE>
  </HEAD>
  <BODY>
    <?php
        echo sys_get_temp_dir();

        $file_dir = 'Applications/MAMP/htdoccs/php_05/php_0504/image/';
        var_dump($_FILES);
        $file_path = $file_dir.$_FILES["uploadfile"]["name"];

        if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$file_path)){

            $img_dir = "/image/";
            $img_path = $img_dir.$_FILES["uploadfile"]["name"];
            $size = getimagesize($file_path);
    ?>
    ファイルアップロードを完了しました。<br>
    <IMG src = "<?=$img_path?>"<?=$size[3]?>><br>
    <B><?=$_POST["comment"]?></B><br>
    <?php
  }else{
    ?>
    正常にアップロードされませんでした。<br>
    <?php
  }
  ?>
  </BODY>
  </HTML>