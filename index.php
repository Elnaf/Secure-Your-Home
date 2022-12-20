<!DOCTYPE html>
<html>
<head>
  <title>Secure Your Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <header>
    <h1>Secure Your Home</h1>
  </header>
  <nav>
    <ul>
      <li><a href="#" onclick="loadPage('/home/index.php')">Home</a></li>
      <li><a href="#" onclick="loadPage('/aboutus/index.php')">About Us</a></li>
      <li><a href="#" onclick="loadPage('/signup/index.php')">Sign Up</a></li>
      <li><a href="#" onclick="loadPage('/login/index.php')">Login</a></li>
      <li><a href="#" onclick="loadPage('/contactus/index.php')">Contact Us</a></li>
    </ul>
  </nav>
  <main>
    <div id="main-content">
      Loading...
    </div>
  </main>
  
  <script>
    // Load the home page by default
    loadPage('/home/index.php');
  </script>
</body>
</html>
