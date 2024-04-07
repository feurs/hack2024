<?php
// Acount Coin information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UsersLog";








// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// sql to create table
$sql = "CREATE TABLE UserAcount (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
BTCUSDT FLOAT NOT NULL,
ETHUSDT FLOAT NOT NULL,
BNBUSDT FLOAT NOT NULL,
ADAUSDT FLOAT NOT NULL,
XRPUSDT FLOAT NOT NULL,
SOLUSDT FLOAT NOT NULL,
DOTUSDT FLOAT NOT NULL,
DOGEUSDT FLOAT NOT NULL,
LUNAUSDT FLOAT NOT NULL,
AVAXUSDT FLOAT NOT NULL,
EURUSDT FLOAT NOT NULL,
TATRAEUR FLOAT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table UserAcount created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
EUR FLOAT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


// sql to create table
$sql = "CREATE TABLE id_client (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  index_column INT NOT NULL
)";
try {
    $conn_1 = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn_1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // use exec() because no results are returned
    $conn_1->exec($sql);
    echo "Table id_client created successfully";

    $new_sql = "INSERT INTO id_client(index_column) VALUE(-1)";
    try {
        // use exec() because no results are returned
        $conn_1->exec($new_sql);
        echo "DATA ADD";

    } catch(PDOException $e) {
        echo $new_sql . "<br>" . $e->getMessage();
    }

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn_1 = null;
$conn->close();
?>