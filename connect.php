<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "digital";

$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed". connect_error);

}else{
    echo "connection to Database was successful <br>";
}

//  $sql = "CREATE DATABASE digitals";
// if($conn->query($sql)){
//     echo "Database was successfully created <br>";
// }else{
//     echo "Error encountered in creatng databse <br>" . $conn->error;
// }

// $sql = "CREATE TABLE students (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     email VARCHAR(30) NOT NULL,
//     address VARCHAR(100),
//     date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if($conn->query($sql)){
//     echo "Table created successfully";
// }else{
//     echo "Error in creating table" . $conn->error;
// }

$sql = "INSERT INTO students (name, email, address) VALUES ('xoxo', 'assumpta@gmail.com', 'DDL, Enugu');";
$sql .= "INSERT INTO students (name, email, address) VALUES ('Assumpta', 'assumpta@gmaill.com', 'Achara layout, Enugu');";
$sql .= "INSERT INTO students (name, email, address) VALUES ('Chelsea', 'xoxo@gmaill.com', 'Ekulu, Enugu');";


if($conn->multi_query($sql)){
    $id = $conn->insert_id;
    echo "User created successfully with an ID of:" . $id."<br>";
    
}else{
    echo "user not added" . $conn->error;
}
echo "<br>";
print_r($conn);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Database conncetion</h1> 
</body>
</html>