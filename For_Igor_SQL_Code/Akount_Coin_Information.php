<?php
 Acount Coin information
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



$sql = "INSERT INTO UserAcount (BTCUSDT, ETHUSDT, BNBUSDT, ADAUSDT, XRPUSDT, SOLUSDT, DOTUSDT, DOGEUSDT, LUNAUSDT, AVAXUSDT, EURUSDT, TATRAEUR)
VALUES (0,0,0,0,0,0,0,0,0,0,0,0)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
