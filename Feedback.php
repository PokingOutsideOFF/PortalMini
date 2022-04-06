<?php 
include_once("connect.php");
$txtname = $_POST['usrnm'];
$txtfeedback = $_POST['feedback'];
$flag = false;
$sql = "SELECT Username FROM profile";

$users = mysqli_query($conn, $sql);
mysqli_fetch_all($users, MYSQLI_NUM);

foreach($users as $user)
{
    if ($user['Username'] == $txtname)
    {
        $flag = true;
        $sql1 = "INSERT INTO user_feedback(username, feedback) VALUES ('$txtname', '$txtfeedback')";
        mysqli_query($conn, $sql1);
        header("Location:Homepage.html"); 
        break;
    }
}

if ($flag == false) 
{
    header("Location:Feedback.html");
    die();
}
?>
