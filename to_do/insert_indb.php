<?php
include 'dbconn.php';

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
$cate = $mydata['category'];
$name = $mydata['name'];

if(!empty($name)){
    $sql = "INSERT INTO todo(name,category_id) VALUES ('$name', '$cate')";

    if($conn -> query($sql)== TRUE){
        echo "saved";
    }else{
        echo "unable";
    }
}else{
    echo "full all fiels";
}

?>