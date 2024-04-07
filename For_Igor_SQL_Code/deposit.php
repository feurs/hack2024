<?php
//поповнення рахунку в EUR
// Параметри підключення до бази даних
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UsersLog";

//сюди записати id користувача
$id_user = 1;
//сюди записати значення з форми на яку суму ми хочем поповнити
$value_EUR = 500.0;

try {
    // Підключаємося до бази даних
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Перевіряємо підключення
    if ($conn->connect_error) {
        die("Database connection error:" . $conn->connect_error);
    }

    // Підготовлений SQL-запит для оновлення балансу користувача
    $sql = "UPDATE users SET EUR = EUR + ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("di", $value_EUR, $id_user);
    $stmt->execute();

    echo "User balance successfully updated";

    // Закриваємо з'єднання з базою даних
    $stmt->close();
    $conn->close();
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
