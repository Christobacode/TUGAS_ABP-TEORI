<?php
session_start();
$hasil = "";

if (isset($_POST['login'])) {
    $input_user = $_POST['username'];
    $input_pass = $_POST['password'];

    if (isset($_SESSION['user_reg']) && $input_user == $_SESSION['user_reg'] && $input_pass == $_SESSION['pass_reg']) {
        $hasil = "welcome " . $input_user;
    } else {
        $hasil = "wrong username/password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
            <a href="register.php">Register</a>
        </form>
        <p class="message"><?php echo $hasil; ?></p>
    </div>
</body>
</html>