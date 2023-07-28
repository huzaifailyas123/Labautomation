<?php
session_start();
include 'admin/conn.php';

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password' LIMIT 1";
    $query = mysqli_query($con, $sql);
    if(mysqli_num_rows($query) > 0)
    {
        $row = mysqli_fetch_array($query);
        $_SESSION['user'] = $row[1];
        header('Location: admin/index.php');
    }
    else
    {
        $_SESSION['errorMessage'] = "Email or Password does not matched";
        header('Location: login.php');
    }

}

?>