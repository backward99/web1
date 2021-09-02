<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials1");
$sql = "
UPDATE 
    topic1 
SET 
    ok='1' 
WHERE 
    id=".$_GET['id'];
$result = mysqli_query($conn, $sql);
header('Location: http://localhost/upload/index.php');
?>