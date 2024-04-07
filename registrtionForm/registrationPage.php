
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tatra banka</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Glassmorphism login Form Tutorial in html css</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/registrationForm.css" class="href">
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="post">
    <h3>Register Here</h3>

    <label for="login">Username</label>
    <input type="text" placeholder="Email or Phone" id="login" name="login">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password">

    <button type="submit">Register</button>
    <div class="social">
        <div class="go"><i class="fab fa-google"></i> Google</div>
        <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
    </div>
</form>

</body>
</html>
</body>
</html>

<?php
//створення нового акаунту
// Параметри підключення до бази даних
$servername = "localhost";
$username = "root";
$password_sql = "";
$dbname = "UsersLog";

// Перевірка, чи передані логін та пароль
if (isset($_POST['login']) && isset($_POST['password'])) {
    // Зчитуємо логін та пароль з форми
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Підключаємося до бази даних
    $conn = new mysqli($servername, $username, $password_sql, $dbname);

    // Перевіряємо підключення
    if ($conn->connect_error) {
        die("Database connection error:" . $conn->connect_error);
    }

    // Підготовлений SQL-запит для перевірки існування користувача з вказаним логіном
    $sql_check_user = "SELECT id FROM users WHERE login = ?";
    $stmt_check_user = $conn->prepare($sql_check_user);
    $stmt_check_user->bind_param("s", $login);
    $stmt_check_user->execute();
    $result_check_user = $stmt_check_user->get_result();

    // Перевіряємо, чи знайдено користувача з вказаним логіном
    if ($result_check_user->num_rows > 0) {
        echo "A user with this login already exists";
    } else {
        // Підготовлений SQL-запит для додавання нового користувача
        $sql_add_user = "INSERT INTO users (login, password) VALUES (?, ?)";
        $stmt_add_user = $conn->prepare($sql_add_user);
        $stmt_add_user->bind_param("ss", $login, $password);

        // Виконуємо запит для додавання нового користувача
        if ($stmt_add_user->execute() === TRUE) {
            echo "New user successfully added";

            // Create connection
            $new_conn = new mysqli($servername, $username, $password_sql, $dbname);

            // Check connection
            if ($new_conn->connect_error) {
                die("Connection failed: " . $new_conn->connect_error);
            }
            $sql = "INSERT INTO UserAcount (BTCUSDT, ETHUSDT, BNBUSDT, ADAUSDT, XRPUSDT, SOLUSDT, DOTUSDT, DOGEUSDT, LUNAUSDT, AVAXUSDT, EURUSDT, TATRAEUR)
            VALUES (0,0,0,0,0,0,0,0,0,0,0,0)";


            if ($new_conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $new_conn->error;
            }


            $new_conn->close();
        } else {
            echo "Error adding user: " . $conn->error;
        }
        $stmt_add_user->close();
    }

    // Закриваємо з'єднання з базою даних
    $stmt_check_user->close();

    $conn->close();
} else {
    echo "Please enter your login and password";
}
?>
