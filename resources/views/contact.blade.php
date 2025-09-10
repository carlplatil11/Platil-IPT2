<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <style>
    body { 
      font-family: Arial, sans-serif; 
      margin: 0; 
      padding: 0; 
      background: #f4f6f9;
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

    /* ✅ Center content */
    .content {
      display: flex;
      flex-direction: column;
      justify-content: center; 
      align-items: center;
      text-align: center;
      height: 50vh; 
    }

    .content form {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      gap: 15px;
      width: 100%;
      max-width: 400px; /* prevent it from being too wide */
    }

    textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      resize: none;
      font-size: 14px;
      font-family: Arial, sans-serif;
    }

    button {
      padding: 10px;
      background: #007bff;
      border: none;
      color: white;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      transition: background 0.3s;
    }

    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <nav>
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
    <a href="{{ route('logout') }}">Logout</a>
  </nav>

  <div class="content">
    <h1>Contact Us</h1>
    <p>Comments and Suggestions</p>

    <form method="POST" action="#">
      @csrf
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
</body>
</html>
