
<?php
   require_once'apart_query.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>
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
 <h2>View Apartment</h2>
          
            </div>

    <table border="1">



        <tr>
            <th>S.N</th>
            <th>Apartment Name</th>
            <th>Room Number</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
<?php
            $i=1;
            
              
              $result= display_apartment($conn);
               while($fetch=$result->fetch_array())
            
               {
                  
            ?>
 
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $fetch['ApartmentName']; ?></td>
<td><?php echo $fetch['NumberOfRooms']; ?> </td>
<td><a href="update.php?update=<?php echo $fetch['ApartID']; ?>">Edit</a></td>
<td><a href="delete.php?delete=<?php echo $fetch['ApartID']; ?>">Delete</a></td>
</tr> 
 <?php
               }
               ?>
            
            
    </table>
    </div>
</body
</html>