<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      ini_set("display_errors","1");
      $uploaddir = 'C:\Bitnami\wampstack-8.0.8-0\apache2\htdocs\upload\file\\';
      $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
      echo '<pre>';
      if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        echo "성공\n";
      } else {
        print  "실패\n";
      }
      echo '자세한 디버깅 정보\n';
      print_r($_FILES);
      echo "</pre>";
    ?>
    <img src="file/<?=$_FILES['userfile']['name']?>" />
  </body>
</html>
