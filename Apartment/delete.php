<?php
include("dbconfig.php");
require_once'apart_query.php';
if(isset($_GET['delete'])){
  $ApartID= $_GET['delete'];

 $result= delete_data($conn, $ApartID);
 if($result){
  header("location: viewapartment.php");
 }
  
}

?>