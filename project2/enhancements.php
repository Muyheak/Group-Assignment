<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css"> 
    <title>About Us!</title>
</head>

    <?php include 'header.inc'; ?>

    <?php include 'nav.inc'; ?>

<form>
<article class="eh1">
    <h2>Enhancement 1: Login and Logout Functionality</h2>
    <ul>
        <h3>How it goes beyond the basic requirements of the assignment:</h3>
        <li>
            <p>The assignment does not require user authentication. By implementing login and logout features, we enable session-based user management, which is essential for real-world web applications.</p>
            <ul>
                <li>Secure login using HTML forms and PHP sessions</li>
                <li>Persistent user sessions for protected access</li>
                <li>Logout function that properly destroys sessions</li>
            </ul>
        </li>

        <h3>What code is needed to implement the feature:</h3>
        <li>
            <ul>
                <li><code>session_start()</code> to initiate sessions</li>
                <li><code>$_POST</code> for retrieving form inputs</li>
                <li><code>$_SESSION['user']</code> to store login status</li>
                <li><code>session_unset()</code> and <code>session_destroy()</code> to log the user out</li>
                <li><code>header("Location: Login.php")</code> to redirect after logout</li>
            </ul>
        </li>

        <h3>Where we applied the extension:</h3>
        <li>
            <p>This enhancement is implemented in <code>Login.php</code>, <code>Processing.php</code>, and <code>Logout.php</code>. Users must log in to access protected content, and they can securely log out when finished.</p>
        </li>
    </ul>
</article>
</form>

<form>
<article class="eh1">
    <h2>Enhancement 2: Limited Login Attempts with Temporary Lockout</h2>
    <ul>
        <h3>How it goes beyond the basic requirements of the assignment:</h3>
        <li>
            <p>This enhancement improves security by limiting the number of login attempts, helping to prevent brute-force attacks.</p>
            <ul>
                <li>Tracks the number of failed login attempts per session</li>
                <li>Locks the user out after a predefined number of failed attempts</li>
                <li>Displays a lockout message with a timer until login is available again</li>
            </ul>
        </li>

        <h3>What code is needed to implement the feature:</h3>
        <li>
            <ul>
                <li><code>$_SESSION['attempts']</code> to count failed login attempts</li>
                <li><code>$_SESSION['locked']</code> to set a lockout time</li>
                <li><code>time()</code> to compare the current time with the lockout expiry</li>
            </ul>
        </li>

        <h3>Where we applied the extension:</h3>
        <li>
            <p>The login attempt limit and lockout logic are handled in <code>Processing.php</code>. Users exceeding 3 failed attempts are temporarily locked out for 10 seconds.</p>
        </li>
    </ul>
</article>
</form>

<?php include 'footer.inc'; ?>