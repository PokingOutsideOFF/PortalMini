<html>
<body>
<?php
include_once("connect.php");
$txtEmail = $_POST['email'];
$txtname = $_POST['usrnm'];
$txtpass = $_POST['psw'];
$txtquali = $_POST['quali'];
$txtcity = $_POST['city'];
try
{
    $sql="INSERT INTO profile (Email, Username, Authenticate, Qualification, City) 
    VALUES ('$txtEmail', '$txtname', '$txtpass', '$txtquali', '$txtcity')";
    $rs=mysqli_query($conn,$sql);
    if($rs)
    { 
        header("Location:Login.html");
    }
}
catch(Exception $e)
{
    $e->getMessage();
    echo $e;
}
?>
</body>
</html>
