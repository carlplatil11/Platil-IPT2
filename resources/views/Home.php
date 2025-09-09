<?php
session_start();

// If not logged in, redirect to login page
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home Page</title>
  <style>
    body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
    a { display: inline-block; margin-top: 20px; color: #007bff; text-decoration: none; }
    a:hover { text-decoration: underline; }
  </style>
</head>
<body>
  <h1>Welcome, <?php echo $_SESSION["username"]; ?> 🎉</h1>
  <p>You have successfully logged in.</p>
  <a href="logout.php">Logout</a>
</body>
</html>
