<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if($username=='Placeholder'&& $password == '12345') {
    $_SESSION['user'] = $username;
    header('Location: manage.php');
} else {
    echo "Invalid login. <a href='Login.php'>Try again</a>";
}
?>