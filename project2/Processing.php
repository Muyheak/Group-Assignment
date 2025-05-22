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

if ($username == 'Placeholder' && $password == '12345') {
    $_SESSION['user'] = $username;
    $_SESSION['attempts'] = 0;
    header('Location: manage.php');
    exit();
} else {
    if (!isset($_SESSION['attempts'])) {
        $_SESSION['attempts'] = 1;
    } else {
        $_SESSION['attempts']++;
    }

    if ($_SESSION['attempts'] >= $maxAttempts) {
        $_SESSION['locked'] = time() + $lockoutDuration;
        echo "Too many failed attempts. You are locked out for 30 seconds.";
    } else {
        $remainingAttempts = $maxAttempts - $_SESSION['attempts'];
        echo "Invalid login. You have $remainingAttempts attempt(s) left. <a href='Login.php'>Try again</a>";
    }
}
?>
