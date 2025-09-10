<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home Page</title>
  <style>
    body { 
      font-family: Arial, sans-serif; 
      margin: 0;
      padding: 0;
    }
    nav {
      background: #007bff;
      padding: 15px;
      display: flex;
      justify-content: center; /* centers all links */
      gap: 30px; /* space between links */
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 8px 14px;
      border-radius: 4px;
      transition: background 0.3s;
    }

    nav a:hover {
      background: rgba(255, 255, 255, 0.2);
    }

    nav a.active {
      background: #0056b3;
    }

    /* ✅ Fix: center content */
    .content {
      display: flex;
      flex-direction: column;
      justify-content: center; 
      align-items: center;
      text-align: center;
      height: 30vh; /* center vertically */
    }
  </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav>
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
    <a href="{{ route('logout') }}">Logout</a>
  </nav>

  <!-- Page Content -->
  <div class="content">
    <h1>Welcome, {{ session('username') }} 🎉</h1>
    <p>You have successfully logged in.</p>
    <p>My Page</p>
  </div>
</body>
</html>
