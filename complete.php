<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials1");
// $filtered = array(
//     'id' => mysqli_real_escape_string($conn, $_POST['id'])
// );
$sql = "
UPDATE 
    topic1 
SET 
    ok='0' 
WHERE 
    id=".$_GET['id'];
$result = mysqli_query($conn, $sql);
header('Location: http://localhost/upload/index.php');
?>