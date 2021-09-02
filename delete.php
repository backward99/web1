<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials1");
$sql = "
DELETE FROM
    topic1  
WHERE 
    id=".$_GET['id'];
$result = mysqli_query($conn, $sql);
header('Location: http://localhost/upload/index.php');
?>