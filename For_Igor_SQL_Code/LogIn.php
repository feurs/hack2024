<?php
//створення таблизі з одним рядком для збереження індексу користувача
//запироз який не вовертає значення TRUE / FALSE
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userslog";


// sql to create table
$sql = "CREATE TABLE id_client (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  index_column INT(6) NOT NULL
)";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    $new_sql = "INSERT INTO id_client (index_column) VALUES (-1)";
    $conn->exec($new_sql);
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
