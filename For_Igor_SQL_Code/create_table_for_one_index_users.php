<?php
//створення таблизі з одним рядком для збереження індексу користувача
//запироз який не вовертає значення TRUE / FALSE
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userslog";


// sql to create table
$sql = "CREATE TABLE id_client (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  index_column INT NOT NULL
)";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
  
    $new_sql = "UPDATE id_client SET index_column = $user_id WHERE id = 1";
        try {
            $new_conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password_sql);
            // set the PDO error mode to exception
            $new_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // use exec() because no results are returned
            $new_conn->exec($new_sql);
            echo "Table MyGuests created successfully";

        } catch(PDOException $e) {
            echo $new_sql . "<br>" . $e->getMessage();
        }
    
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
