<?php
session_start();
$notif = "";

if (isset($_POST['send'])) {
    $_SESSION['user_reg'] = $_POST['username'];
    $_SESSION['pass_reg'] = $_POST['password'];
    $notif = "user is added <a href='login.php'>Login</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <div style="margin-top: 10px;">
                <button type="submit" name="send">Send</button>
                <a href="login.php"><button type="button" style="background: #007bff;">Login</button></a>
            </div>
        </form>
        <p class="message"><?php echo $notif; ?></p>
    </div>
</body>
</html>