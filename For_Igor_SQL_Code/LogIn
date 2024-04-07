<?php
//вхід в акаунт (не створення нового)
// Параметри підключення до бази даних
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UsersLog";

// Перевірка, чи передані логін та пароль
if (isset($_POST['login']) && isset($_POST['password'])) {
    // Зчитуємо логін та пароль з форми
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Підключаємося до бази даних
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Перевіряємо підключення
    if ($conn->connect_error) {
        die("Помилка підключення до бази даних: " . $conn->connect_error);
    }

    // Підготовлений SQL-запит для отримання id користувача за логіном та паролем
    $sql = "SELECT id FROM users WHERE login = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Перевіряємо, чи знайдено користувача
    if ($result->num_rows > 0) {
        // Отримуємо рядок результату та повертаємо id користувача
        $row = $result->fetch_assoc();
        $user_id = $row['id'];
        //echo "ID користувача: " . $user_id;
    } else {
        echo "Invalid login or password";
    }

    // Закриваємо з'єднання з базою даних
    $stmt->close();
    $conn->close();
} else {
    echo "Будь ласка, введіть логін та пароль";
}
?>
