
<?php
   require_once'room_query.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>view room</title>
<style>
     table, td, th {  
      border: 1px solid #ddd;
      text-align: left;
    }
    
    table {
      border-collapse: collapse;
      max-width: 100%;
     width:90%;
    }
    .table-data{
      
      width:65%;
      float: right;
    }
    th, td {
      padding: 15px;
    }
body{
    overflow-x: hidden;
}
* {
  box-sizing: border-box;}
</style>
</head>
<body>
<div class="table-data">
        <div class="list-title">
 <h2>View Room</h2>
          
            </div>

    <table border="1">



        <tr>
            <th>S.N</th>
            <th>roomType</th>
            <th>deviceType</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
<?php
            $i=1;
            
              
              $result= display_room($conn);
               while($fetch=$result->fetch_array())
            
               {
                  
            ?>
 
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $fetch['roomType']; ?></td>
<td><?php echo $fetch['deviceType']; ?> </td>
<td><a href="update.php?update=<?php echo $fetch['RoomID']; ?>">Edit</a></td>
<td><a href="delete.php?delete=<?php echo $fetch['RoomID']; ?>">Delete</a></td>
</tr> 
 <?php
               }
               ?>
            
            
    </table>
    </div>
</body
</html>