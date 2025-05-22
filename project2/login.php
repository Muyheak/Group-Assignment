<?php include 'header.inc'; ?>

<?php include 'nav.inc'; ?>

<html>

<body>
<form method="post" action="Processing.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="hidden" name="token" value="abc123">
    <input type="submit" value="Login">
</form>
</body>

</html>

<?php include 'footer.inc'; ?>