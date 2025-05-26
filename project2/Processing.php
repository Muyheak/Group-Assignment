<?php
session_start();

$maxAttempts = 3;
$lockoutDuration = 30;

if (isset($_SESSION['locked']) && time() < $_SESSION['locked']) {
    $remaining = $_SESSION['locked'] - time();
    echo "Too many failed attempts. Access denied for another $remaining seconds.";
    exit();
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "login";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $conn->real_escape_string($username);
$password = $conn->real_escape_string($password);

$sql = "SELECT * FROM user WHERE Username = '$username' AND Password = '$password'";
$result = $conn->query($sql);

if ($result && $result->num_rows === 1) {
    $_SESSION['user'] = $username;
    $_SESSION['attempts'] = 0;
    header('Location: manage.php');
    exit();
} else {
    $_SESSION['attempts'] = ($_SESSION['attempts'] ?? 0) + 1;

    if ($_SESSION['attempts'] >= $maxAttempts) {
        $_SESSION['locked'] = time() + $lockoutDuration;
        echo "Too many failed attempts. You are locked out for 30 seconds.";
    } else {
        $remainingAttempts = $maxAttempts - $_SESSION['attempts'];
        echo "Invalid login. You have $remainingAttempts attempt(s) left. <a href='Login.php'>Try again</a>";
    }
}

$conn->close();
?>
