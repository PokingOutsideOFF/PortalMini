<?php 
 session_start();
?>

<html>
<body>
<?php

include_once("connect.php");
$txtname = $_POST['usrnm'];
$txtpass = $_POST['psw'];
$flag = false;
$sql = "SELECT Username, Authenticate FROM profile";
$users = mysqli_query($conn, $sql);
mysqli_fetch_all($users, MYSQLI_ASSOC);
foreach($users as $user)
{
    if(($user['Username'] == $txtname) && ($user['Authenticate'] == $txtpass))
    {
        $flag = true;
        $_SESSION["status"] = "active";
        $_SESSION['usrname'] = $txtname;
        header("Location:Homepage.html");
        break;
    }
}
if (($flag == false))
    {
        header("Location:Login.html");
        echo '<script language="javascript">window.alert("Wrong username or password")</script>';
    }
?>
</body>
</html>
