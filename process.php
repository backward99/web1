<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials1");
$sql = "INSERT INTO topic1 (title,created,complted) VALUES('".$_POST['title']."', now(), '0000-00-00')";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost/upload/index.php');
?>