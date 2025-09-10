<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  <style>
    body { 
      font-family: Arial, sans-serif; 
      margin: 0; 
      padding: 0; 
      background: #f4f6f9; /* light background */
    }

    nav {
      background: #007bff;
      padding: 15px;
      display: flex;
      justify-content: center;
      gap: 30px;
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

    /* ✅ Center content */
    .content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      height: 30vh;
      padding: 20px;
    }

    .content h1 {
      margin-bottom: 15px;
    }

    .content p {
      max-width: 600px; /* keep text readable */
      line-height: 1.6;
      color: #333;
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
    <h1>About Us</h1>
    <p>
      IPT2 Project diri rani 
    </p>
  </div>
</body>
</html>
