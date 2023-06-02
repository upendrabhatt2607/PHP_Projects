<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'todo_db';
$conn = mysqli_connect($host, $user, $pass, $dbname);  

//$sql = 'CREATE Database todo_db';  

$sql2 = "CREATE table todo(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,  
category_id VARCHAR(20) NOT NULL,timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_DATE(),primary key (id))"; 

$sql3 = "CREATE table category(id INT primary key, name varchar(20) NOT NULL)";


$sql4 = 'INSERT INTO category(id, name) VALUES (1,"Category A"),(2,"Category B"),(3,"Category C")';


// if(isset($_POST['submite'])){
//     $name = $_POST['item'];
//     $category = $_POST['categorie'];

//     $sqll = "INSERT INTO todo(name, category_id) VALUES ('$name', '$category')";
//     if(mysqli_query($conn, $sqll)){  
//     //     echo "Record inserted successfully";  
//        }else{  
//     //    echo "Could not insert record: ". mysqli_error($conn);  
//        }  
         
//       //     mysqli_close($conn);  

// }

?>  