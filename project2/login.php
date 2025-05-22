<?php
session_start();

// Redirect if already authenticated
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    header("Location: ./manage.php");
    exit();
}

require_once("settings.php");
$conn = @mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Database connection failed.");
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_user = mysqli_real_escape_string($conn, $_POST['username'] ?? '');
    $input_pass = mysqli_real_escape_string($conn, $_POST['password'] ?? '');

    $query = "SELECT * FROM managers WHERE username = '$input_user' AND password = '$input_pass'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $input_user;
        header("Location: ./manage.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<?php include 'header.inc'; ?>
<?php include 'nav.inc'; ?>

<div class="loginpage">
    <form method="post" action="">
        <h2>Manager Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
    
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    
        <input type="submit" value="Login">
    </form>
</div>

<?php include 'includes/footer.inc'; ?>
</body>
</html>
