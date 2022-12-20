<!DOCTYPE html>
<html>
<head>
  <title>Secure Your Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="script.js"></script>
</head>
<body>
  <header>
    <div id="logo"><img src="/images/logo.jpg" width="190px" height="190px"/></div>
  </header>
  <nav>
    <ul>
      <li><a onclick="$('#main-content').load('/home/index.php')">Home</a></li>
      <li><a onclick="$('#main-content').load('/aboutus/index.php')">About Us</a></li>
      <li><a onclick="$('#main-content').load('/signup/index.php')">Sign Up</a></li>
      <li><a onclick="$('#main-content').load('/login/index.php')">Login</a></li>
      <li><a onclick="$('#main-content').load('/contactus/index.php')">Contact Us</a></li>
    </ul>
  </nav>
  <main>
    <div id="main-content">
      Loading...
    </div>
  </main>
  <script>
    // Load the home page by default
    $('#main-content').load('/home/index.php');
  </script>
</body>
</html>
