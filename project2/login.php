<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css"> 
    <title>Log In</title>
</head>

<?php include 'header.inc'; ?>

<?php include 'nav.inc'; ?>

<body>
<div class="container">
  <form method="post" action="Processing.php">
      <label for="username">Username:</label>
      <input type="text" name="username" required><br>

      <label for="password">Password:</label>
      <input type="password" name="password" required><br>

      <input type="hidden" name="token" value="abc123">
      <input type="submit" value="Login" class="login-button">
  </form>
</div>
</body>

</html>

<?php include 'footer.inc'; ?>