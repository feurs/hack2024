<?php
//Information login pass and eur
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
$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
EUR FLOAT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



//------

// prepare and bind
//Знаки питання (?) вказують на параметри, які будуть заміщені реальними значеннями під час виконання запиту.
$stmt = $conn->prepare("INSERT INTO Users (login, password, EUR) VALUES (?, ?, 0)");
//Цей рядок коду прив'язує змінні $firstname, $lastname і $email до параметрів запиту. "sss" вказує на типи даних параметрів: в даному випадку це рядки (string). Кількість "s" відповідає кількості параметрів.
$stmt->bind_param("ss", $login, $password);

// set parameters and execute
$login = "Jan";
$password = "123";

$stmt->execute();



$conn->close();
?>
