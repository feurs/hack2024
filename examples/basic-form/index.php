<?php
//$sercername = "localhost";
//$ussername = "root";
//$password = "";
//$conn = new mysqli($sercername,$ussername,$password);
//if($conn->connect_error){
//    die("Connection failed".$conn->connect_error);
//}
//
//echo "Connecction Successful";
//$conn->close();
//?>
//------------------------------------------------------------------------------

//0.1.0
<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";
//$conn->close();
//?>
//------------------------------------------------------------------------------
0.1.1
<?php
//// Змінні для підключення до бази даних
//$servername = "localhost";
//$username = "root";
//$password = ""; // Ваш пароль для підключення до MySQL
//$dbname = "database1"; // Ім'я бази даних
//
//try {
//    // Створення об'єкта PDO для підключення до бази даних
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    // Встановлення режиму помилок на викидування винятків
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully"; // Повідомлення про успішне підключення
//} catch(PDOException $e) { // Обробка винятків
//    echo "Connection failed: " . $e->getMessage(); // Повідомлення про помилку підключення
//}
//?>

//------------------------------------------------------------------------------
0.1.2
<?php
//$servername = "localhost";
//$username = "root";
//$password = ""; // Ваш пароль для підключення до MySQL
//$dbname = "database1"; // Ім'я бази даних
//
//// Create connection
//$conn = new mysqli($servername, $username, $password);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
////Метод query() виконує SQL-запит і повертає результат
//
//// Create database
//$sql = "CREATE DATABASE myDB";
//if ($conn->query($sql) === TRUE) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . $conn->error;
//}
//
//$conn->close();
//?>

//------------------------------------------------------------------------------
0.1.2.1
<!---->
<?php
//$servername = "localhost";
//$username = "root";
//$password = ""; // Ваш пароль для підключення до MySQL
//$dbname = "database1"; // Ім'я бази даних
//
//$sql = "CREATE DATABASE myDBPDO";
////exec використовуйте exec(), оскільки результати не повертаються
//try {
//    $conn = new PDO("mysql:host=$servername", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    // use exec() because no results are returned
//    $conn->exec($sql);
//    echo "Database created successfully<br>";
//} catch(PDOException $e) {
//    echo $sql ."<br>" . $e->getMessage();
//}
//
//$conn = null;
//?>
//------------------------------------------------------------------------------
0.1.3
<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//else{
//    echo "Connecction Successful";
//}
//
//// sql to create table
//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}
//
//$conn->close();
//?>

//------------------------------------------------------------------------------
0.1.3.1
<?php
////запис через mysqli_query
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";
//
//// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
//// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//
//// sql to create table
//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";
//
//if (mysqli_query($conn, $sql)) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . mysqli_error($conn);
//}
//
//mysqli_close($conn);
//?>

//------------------------------------------------------------------------------
0.1.3.2
<!---->
<?php
//////запироз який не вовертає значення TRUE / FALSE
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";
//
//
//// sql to create table
//$sql = "CREATE TABLE MyGuests (
//  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//  firstname VARCHAR(30) NOT NULL,
//  lastname VARCHAR(30) NOT NULL,
//  email VARCHAR(50),
//  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//  )";
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//
//
//    // use exec() because no results are returned
//    $conn->exec($sql);
//    echo "Table MyGuests created successfully";
//} catch(PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//}
//
//$conn = null;
//?>

//------------------------------------------------------------------------------
0.1.4

<?php
////запис даних до таблиці
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();
//?>
//------------------------------------------------------------------------------
0.1.4.1

<?php
////апис даних без повернення підтвердження успішності операції
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";
//
//
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//  VALUES ('Oleh', 'Micko', 'micko@example.com')";
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    // use exec() because no results are returned
//    $conn->exec($sql);
//    echo "New record created successfully";
//} catch(PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//}
//
//$conn = null;
//?>


//------------------------------------------------------------------------------
0.1.5
<?php
//// отримати останні й індекс
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Marek', 'Pavlik', 'pavlik@example.com')";
//
//if ($conn->query($sql) === TRUE) {
//    $last_id = $conn->insert_id;
//    echo "New record created successfully. Last inserted ID is: " . $last_id;
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();
//?>
//------------------------------------------------------------------------------
0.1.6
<?php
////додовання деільког людей до таблиці з змінними які ми самі вказуєм нижче
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";
//
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//
//// prepare and bind
////Знаки питання (?) вказують на параметри, які будуть заміщені реальними значеннями під час виконання запиту.
//$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
////Цей рядок коду прив'язує змінні $firstname, $lastname і $email до параметрів запиту. "sss" вказує на типи даних параметрів: в даному випадку це рядки (string). Кількість "s" відповідає кількості параметрів.
//$stmt->bind_param("sss", $firstname, $lastname, $email);
//
//// set parameters and execute
//$firstname = "John";
//$lastname = "Doe";
//$email = "john@example.com";
//$stmt->execute();
//
//$firstname = "Mary";
//$lastname = "Moe";
//$email = "mary@example.com";
//$stmt->execute();
//
//$firstname = "Julie";
//$lastname = "Dooley";
//$email = "julie@example.com";
//$stmt->execute();
//
//echo "New records created successfully";
//
//$stmt->close();
//$conn->close();
//?>

//------------------------------------------------------------------------------
0.1.7
<?php
//вивід інфи з таблиць
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
        //вивід одного рялка
            $new_result = $conn->query("SELECT id, firstname, lastname FROM MyGuests WHERE id = 1");

            if ($new_result->num_rows > 0) {
                $row = $new_result->fetch_assoc();
                $id =  $row["id"];
                $name =  $row["firstname"];
                $last_name = $row["lastname"];
                echo $id.$name.$last_name;
            } else {
                echo "0 результатів";
            }
        //кінець

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

