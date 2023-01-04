<?php
require_once'room_query.php';

if(isset($_POST['update']))
{
  if (isset($_GET['update']))
  {
   $RoomID = $_GET['update'];
  }
$roomType= legal_input($_POST['roomType']);
$deviceType = legal_input($_POST['deviceType']);;

$result= update_room($conn, $roomType,$deviceType,$RoomID);
if($result)
{

  echo "Room updated successfully...";
 
  header("Location: viewroom.php");
  exit();
  
} 
else{ echo "Room not updated successfully";
}
}

function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewaparment" content="width=device-width, initial-scale=1">
<title>View Room</title>
<style>
    
body{
    overflow-x: hidden;
}
* {
  box-sizing:border-box;}
.create form {
    height: 50vh;
    border: 2px solid #f1f1f1;
    padding: 30px;
    background-color: white;
    position: center;
    }
    .viewapartmant{
      width: 30%;
    float: left;
    }
input{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;}
button[type=submit] {
    background-color:  #4070f4;
    color: #fff;
    padding: 10px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    font-size: 20px;}
label{
  font-size: 18px;;}
button[type=submit]:hover {
  background-color:#3d3c3c;}
  .form-title a, .form-title h2{
   display: inline-block;
   
  }
  .form-title a{
      text-decoration: none;
      font-size: 20px;
      background-color: blue;
      color: honeydew;
      padding: 4px 30px;
  }
 
</style>
</head>
<body>
<div class="room-detail">
    <div class="form-title">
    <h2>Update Room</h2>
    
    
    </div>
 
    <p style="color:red">
    
<?php if(!empty($msg)){echo $msg; }?>
</p>
    <form method="post" action="">
         
          <label>room type</label>

        <?php 
        require_once'dbconfig.php';
        if (isset($_GET['update']))
        {
         $ApartID = $_GET['update'];
        }
           $tbl_user=$conn->query("SELECT * FROM `room` WHERE RoomID=''");
           $fetch=$tbl_user->fetch_array();


        ?>
<input type="text" placeholder="roomType" name="roomType" required value="<?php echo $fetch['roomType'] ?>">
         
          <label>device Type</label>
<input type="text" placeholder="deviceType" name="deviceType" required value="<?php echo $fetch['deviceType'] ?>">
         
          <button type="submit" name="update">update</button>
    </form>
        </div>
</div>

</body>
</html>