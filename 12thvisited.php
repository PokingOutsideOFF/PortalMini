<?php 
session_start();
?>
<html>
    <body>
    <?php 
    

$txtname1 = $_SESSION['usrname'];
$visited = "12th Standard";
include_once("connect.php");

$sql = "INSERT INTO user_visited VALUES('$txtname1', '$visited')";
mysqli_query($conn, $sql);

header("Location:12thHomepage.html");
?>
    </body>
</html>