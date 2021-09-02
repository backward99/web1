<!DOCTYPE html>
<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials1");

?>
<html lang="kr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My_Produce</title>
    <link rel="stylesheet" href="style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="mouseon.js"></script>
  </head>
  <body class="cat">
    <form name="form1" method="POST">
      <h1>To-Do List</h1>
        <div class="grid_r">
          <div class="grid_c">
            <div class="">
              <a href="https://backward99.github.io/web1/practice.html">깃허브로 들어가기</a>
              <a href="practice.html">비트나미로 들어가기</a>
            </div>
            <div>
              <input type="button"  value="ajax" onclick="fetch('css').then(function(response){
                response.text().then(function(text){
                alert(text);
                })
              })">
            </div>
            <ul>
              <?php
              echo file_get_contents('1.txt');
              ?>
            </ul>
          </div>
          <div class="grid">
            <div>
              <label for="ready">해야할 일</label>
            </div>
            <div>
              <label for="complet">완료한 일</label>      
            </div>
            <div class="ListField"  id="ListField">
              <input type="text" id="inputText" name="title">
              <button type="submit" id="plus" formaction="process.php">+</button>
              <?php
              while($row = mysqli_fetch_assoc($result)){
                if($row['ok']==='1'){
                  echo "<div class=\"cursor\"><li id=\"{$row['title']}\"><a href=\"http://localhost/upload/index.php?id={$row['id']}\">{$row['title']}</a></li></div>";
                }
              }
              ?>
            </div>
            <div class="ListField" id="CompletList">
              <?php
              while($row = mysqli_fetch_assoc($result2)){
                if($row['ok']==='0'){
                  echo "<div class=\"cursor\"><li id=\"{$row['title']}\"><a href=\"http://localhost/upload/index.php?id={$row['id']}\">{$row['title']}</a></li></div>";
                }
              } 
              ?>
            </div>
            <div class="okButton">
              <?=$if_button?>
            </div>
            <div class="">
              <?=$back_button?>
              <?=$delete_button?>
            </div>
          </div>
        </div>
    </form>
  </body>
</html>
