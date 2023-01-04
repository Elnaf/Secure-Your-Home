<?php
require_once'dbconfig.php';
function display_apartment($conn)
{
    $query=$conn->prepare("SELECT * FROM apartment ") or die($this->conn->error);
    if($query->execute()){
        $result=$query->get_result();
        return $result;
    }
}

function get_apartment($conn, $ApartID)
{
    $query=$conn->prepare("SELECT * FROM apartment WHERE ApartID ='$ApartID'") or die($this->conn->error);
    if($query->execute()){
        $result=$query->get_result();
        return $result;
    }
}
function delete_data($conn, $ApartID){
    $query=$conn->prepare("DELETE FROM `apartment` WHERE ApartID=?") or die($this->conn->error);
    $query->bind_param("i", $ApartID);
    if($query->execute()){
        
        return true;
    }
}
function update_apartment($conn,$ApartmentName,$NumberOfRooms, $ApartID){
    $query=$conn->prepare("UPDATE `apartment` SET  ApartmentName=?, NumberOfRooms =? WHERE `ApartID`=?") or die($this->conn->error);
    $query->bind_param("sii",$ApartmentName,$NumberOfRooms,$ApartID);
    
    if($query->execute()){
        
        return true;
    }
}
?>
