<?php
if(isset($_POST['submit']))
{


$roomType = $_POST['roomType'];
$deviceType = $_POST['deviceType'];

// Database connection
$conn = new mysqli('localhost','root','','secure_home');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into room(roomType,deviceType ) values(?, ?)");
  $stmt->bind_param("ss", $roomType, $deviceType);
  $execval = $stmt->execute();
  echo $execval;
  echo "Room Added successfully...";
  $stmt->close();
  $conn->close();
}
}
?>
<html>
<head>
    <title>Manage Room</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="banner">
          
        </div>
        <div class="wrapper">
          <h2>Room Registration</h2>
          <form Method="post">
            <div class="input-box">
              <input type="text" name="roomType" placeholder="roomType" required>
            </div>
            <div class="input-box">
              <input type="text" name="deviceType"  placeholder="deviceType" required>
            </div>
           
            <div class="input-box button">
              <button type="Submit" name="submit" >Add</button>
              <a href="viewroom.php">view room</a>
            </div>
          </form>
        </div>
        
</body>
</html>