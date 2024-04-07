
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
        <link rel="stylesheet" href="style.css" class="href">
    </head>
    <body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post">
        <h3>Login Here</h3>

        <label for="login">Username</label>
        <input type="text" placeholder="Email or Phone" id="login" name="login">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button type="submit">Log In</button>
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
//вхід в акаунт (не створення нового)
// Параметри підключення до бази даних
$servername = "localhost";
$username = "root";
$password_sql = "";
$dbname = "UsersLog";

// Перевірка, чи передані логін та пароль
if (isset($_POST['login']) && isset($_POST['password'])){
    // Зчитуємо логін та пароль з форми
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Підключаємося до бази даних
    $conn = new mysqli($servername, $username, $password_sql, $dbname);

    // Перевіряємо підключення
    if ($conn->connect_error) {
        die("Error connection to the database " . $conn->connect_error);
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


        $new_sql = "UPDATE id_client SET index_column = $user_id WHERE id = 1";
        try {
            $new_conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password_sql);
            // set the PDO error mode to exception
            $new_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // use exec() because no results are returned
            $new_conn->exec($new_sql);
            echo "Login succesfully!";
            header("Location: mainpage.php");
        } catch(PDOException $e) {
            echo $new_sql . "<br>" . $e->getMessage();
        }




    } else {
        echo "Invalid login or password";
    }

    // Закриваємо з'єднання з базою даних
    $stmt->close();
    $conn->close();
}
?>