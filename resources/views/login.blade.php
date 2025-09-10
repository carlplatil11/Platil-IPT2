<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f4f6f9;
    }
    .login-container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      width: 300px;
      text-align: center;
    }
    h2 { margin-bottom: 20px; }
    input {
      width: 100%; padding: 10px; margin: 8px 0;
      border: 1px solid #ccc; border-radius: 6px;
    }
    button {
      width: 100%; padding: 10px;
      background: #007bff; border: none; color: white;
      border-radius: 6px; cursor: pointer;
    }
    button:hover { background: #0056b3; }
    .error { color: red; font-size: 14px; margin-top: 10px; }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login.post') }}">
      @csrf
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    @if(session('error'))
      <p class="error">{{ session('error') }}</p>
    @endif
  </div>
</body>
</html>
