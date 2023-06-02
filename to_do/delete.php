<?php
include 'dbconn.php';

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$id = $mydata['sid'];


// Deleting 
if(!empty($id)){
    $sql = "DELETE FROM todo WHERE id = {$id}";

    if($conn -> query($sql)== TRUE){
        echo "Deleted";
    }else{
        echo "unable to delete";
    }
}
?>