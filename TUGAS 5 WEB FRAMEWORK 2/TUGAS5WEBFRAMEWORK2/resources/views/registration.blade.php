<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; margin-top: 50px; }
        .container { width: 350px; }
        h2 { text-align: center; margin-bottom: 30px; font-weight: normal; }
        .form-group { display: flex; align-items: center; margin-bottom: 20px; }
        .form-group label { width: 100px; font-size: 14px; }
        .form-group input { flex: 1; padding: 8px; border: 1px solid #ccc; border-radius: 5px; outline: none; }
        .action-group { display: flex; align-items: center; gap: 20px; padding-left: 100px; }
        button { background-color: #198754; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; }
        a { color: #0d6efd; text-decoration: none; font-size: 14px; }
        a:hover { text-decoration: underline; }
        .msg { color: green; text-align: center; margin-bottom: 15px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration</h2>

        @if(session('success'))
            <p class="msg">{{ session('success') }}</p>
        @endif

        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            
            <div class="action-group">
                <button type="submit">Register</button>
                <a href="/login">Sudah punya<br>akun? Login</a>
            </div>
        </form>
    </div>
</body>
</html>