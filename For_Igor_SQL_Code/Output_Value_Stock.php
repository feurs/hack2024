
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
//UserACount
$sql = "SELECT index_column FROM id_client WHERE id = 1";
$result = $conn->query($sql);
$user_id = -1;
// Перевіряємо, чи знайдено рядок
if ($result->num_rows > 0) {
    // Отримуємо рядок результату та отримуємо значення index_column
    $row = $result->fetch_assoc();
    $user_id = $row['index_column'];
    echo "Значення index_column для користувача з id=1: " . $user_id;
} else {
    echo "Користувач з id=1 не знайдений";
}





// Підготовлений SQL-запит для отримання даних користувача за ідентифікатором
$sql = "SELECT BTCUSDT, ETHUSDT, BNBUSDT, ADAUSDT, XRPUSDT, SOLUSDT, DOTUSDT, DOGEUSDT, LUNAUSDT, AVAXUSDT, EURUSDT, TATRAEUR
            FROM UserAcount
            WHERE id = $user_id";
$result = $conn->query($sql);

// Перевіряємо, чи знайдено рядок
if ($result->num_rows > 0) {
    // Отримуємо рядок результату та зберігаємо його у змінну
    $row = $result->fetch_assoc();
    // Зберігаємо дані у змінних PHP
    $BTCUSDT = $row['BTCUSDT'];
    $ETHUSDT = $row['ETHUSDT'];
    $BNBUSDT = $row['BNBUSDT'];
    $ADAUSDT = $row['ADAUSDT'];
    $XRPUSDT = $row['XRPUSDT'];
    $SOLUSDT = $row['SOLUSDT'];
    $DOTUSDT = $row['DOTUSDT'];
    $DOGEUSDT = $row['DOGEUSDT'];
    $LUNAUSDT = $row['LUNAUSDT'];
    $AVAXUSDT = $row['AVAXUSDT'];
    $EURUSDT = $row['EURUSDT'];
    $TATRAEUR = $row['TATRAEUR'];

    // Виводимо дані (при потребі)
    echo "BTCUSDT: $BTCUSDT, ETHUSDT: $ETHUSDT, BNBUSDT: $BNBUSDT, ADAUSDT: $ADAUSDT, XRPUSDT: $XRPUSDT, SOLUSDT: $SOLUSDT, DOTUSDT: $DOTUSDT, DOGEUSDT: $DOGEUSDT, LUNAUSDT: $LUNAUSDT, AVAXUSDT: $AVAXUSDT, EURUSDT: $EURUSDT, TATRAEUR: $TATRAEUR";
} else {
    echo "Користувач з id=1 не знайдений";
}

// Закриваємо з'єднання з базою даних
$conn->close();


?>
