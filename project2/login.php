<?php
    session_start();
    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
        header("Location: ./manage.php");
    }

    require_once("settings.php");
    $conn = @mysqli_connect($host, $username, $password, $dbname);
?>

<?php include 'header.inc'; ?>

<?php include 'nav.inc'; 
        require_once("settings.php");
        
            $conn = @mysqli_connect($host, $username, $password, $dbname);
            if (!$conn) {
                echo "<p>Database connection failure</p>";
            }
?>

    <div class="loginpage">
        <form action="authentication.php" method="post" class="loginform" novalidate>
            <h2>Manager Login</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
    
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">

            <input type="hidden" name="token" value="abc123">
            <input type="submit" value="Login">

<?php include 'includes/footer.inc'; ?>

</body>

</html>