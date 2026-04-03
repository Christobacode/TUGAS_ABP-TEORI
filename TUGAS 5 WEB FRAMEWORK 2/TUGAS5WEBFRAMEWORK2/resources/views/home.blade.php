<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <p>Selamat datang, {{ Auth::user()->name }}</p>
    <br>
    <a href="/logout"><button>Logout</button></a>
</body>
</html>