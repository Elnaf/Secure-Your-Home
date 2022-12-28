<?php
if(isset($_POST['submit']))
{


$apartmentName = $_POST['apartmentName'];
$NumberOfRoom = $_POST['NumberOfRooms'];

// Database connection
$conn = new mysqli('localhost','root','','secure_home');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into apartment(apartmentName, NumberOfRooms) values(?, ?)");
  $stmt->bind_param("si", $apartmentName, $NumberOfRoom);
  $execval = $stmt->execute();
  echo $execval;
  echo "Apartment Added successfully...";
  $stmt->close();
  $conn->close();
}
}
?>
<html>
<head>
    <title>Manage Apartment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="banner">
          
        </div>
        <div class="wrapper">
          <h2>Apartment Registration</h2>
          <form Method="post">
            <div class="input-box">
              <input type="text" name="apartmentName" placeholder="Apartment Name" required>
            </div>
            <div class="input-box">
              <input type="text" name="NumberOfRooms"  placeholder="Number Of Rooms" required>
            </div>
           
            <div class="input-box button">
              <button type="Submit" name="submit" >Add</button>
              <a href="viewapartment.php">view apartment</a>
            </div>
          </form>
        </div>
        
</body>
</html>
