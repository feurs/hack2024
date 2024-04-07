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

}
// Закриваємо з'єднання з базою даних
$conn->close();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bank dashboard concept</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style1.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<section class="background1" id="beginning">
<div class="app">
    <header class="app-header">
        <div class="app-header-logo">
            <div class="logo">
            <span class="logo-icon">
                <a href="mainpage.php" class="href">
              <img src="assets/images.png" style="logo">
                </a>
            </span>
                <h1 class="logo-title">

                </h1>
            </div>
        </div>
        <div class="app-header-navigation">
            <div class="tabs">
                <a href="#">
                    Overview
                </a>
                <a href="#" class="active">
                    Payments
                </a>
                <a href="#">
                    <button style="background-color: #1f1f1f; color: #969593; border: none;">Deposit</button>
                </a>
                <a href="#">
                    Account
                </a>
                <a href="#">
                    System
                </a>
                <a href="index.php">
                    Log Out
                </a>
            </div>
        </div>
        <div class="app-header-actions">
            <div class="app-header-actions-buttons">
            </div>
        </div>
        <div class="app-header-mobile">
            <button class="icon-button large">
                <i class="ph-list"></i>
            </button>
        </div>

    </header>
    <div class="app-body">
        <div class="app-body-navigation">
            <nav class="navigation">
                <a href="https://www.tatrabanka.sk/sk/personal/">
                    <i class="ph-browsers"></i>
                    <span>Main page</span>
                </a>
                <a href="#">
                    <i class="ph-check-square"></i>
                    <span>Scheduled</span>
                </a>
                <a href="#">
                    <i class="ph-swap"></i>
                    <span>Transfers</span>
                </a>
                <a href="#">
                    <i class="ph-file-text"></i>
                    <span>Templates</span>
                </a>
                <a href="https://www.swift.com/">
                    <i class="ph-globe"></i>
                    <span>SWIFT</span>
                </a>
                <a href="https://www.xe.com/currencyconverter/">
                    <i class="ph-clipboard-text"></i>
                    <span>Exchange</span>
                </a>
            </nav>
        </div>
        <div class="app-body-main-content">
            <section class="service-section">
                <h2>Your stocks</h2>
                <div class="mobile-only">
                    <button class="flat-button">
                        Toggle search
                    </button>
                </div>
                <div class="tiles">
                    <article class="tile">
                        <div class="tile-header">
                            <i class="ph-lightning-light"></i>
                            <h3>
                               <?php echo $row['BTCUSDT'];?>
                            </h3>
                        </div>
                        <a href="#">
                            <span>BTC/USDT</span>
                            <span class="icon-button">
                    <i class="ph-caret-right-bold"></i>
                  </span>
                        </a>
                    </article>
                    <article class="tile">
                        <div class="tile-header">
                            <i class="ph-fire-simple-light"></i>
                            <h3>
                                <?php echo $row['ETHUSDT'];?>
                            </h3>
                        </div>
                        <a href="#">
                            <span>ETH/USDT</span>
                            <span class="icon-button">
                    <i class="ph-caret-right-bold"></i>
                  </span>
                        </a>
                    </article>
                    <article class="tile">
                        <div class="tile-header">
                            <i class="ph-file-light"></i>
                            <h3>
                                <?php echo $row['BNBUSDT'];?>
                            </h3>
                        </div>
                        <a href="#">
                            <span>BNB/USDT</span>
                            <span class="icon-button">
                    <i class="ph-caret-right-bold"></i>
                  </span>
                        </a>
                    </article>
                    <article class="tile">
                        <div class="tile-header">
                            <i class="ph-lightning-light"></i>
                            <h3>
                                <?php echo $row['ADAUSDT'];?>
                            </h3>
                        </div>
                        <a href="#">
                            <span>ADA/USDT</span>
                            <span class="icon-button">
                    <i class="ph-caret-right-bold"></i>
                  </span>
                        </a>
                    </article>
                    <article class="tile">
                        <div class="tile-header">
                            <i class="ph-fire-simple-light"></i>
                            <h3>
                                <?php echo $row['XRPUSDT'];?>
                            </h3>
                        </div>
                        <a href="#">
                            <span>XRP/USDT</span>
                            <span class="icon-button">
                    <i class="ph-caret-right-bold"></i>
                  </span>
                        </a>
                    </article>
                    <article class="tile">
                        <div class="tile-header">
                            <i class="ph-file-light"></i>
                            <h3>
                                <?php echo $row['SOLUSDT'];?>
                            </h3>
                        </div>
                        <a href="#">
                            <span>SOL/USDT</span>
                            <span class="icon-button">
                    <i class="ph-caret-right-bold"></i>
                  </span>
                        </a>
                    </article><article class="tile">
                        <div class="tile-header">
                            <i class="ph-lightning-light"></i>
                            <h3>
                                <?php echo $row['DOTUSDT'];?>
                            </h3>
                        </div>
                        <a href="#">
                            <span>DOT/USDT</span>
                            <span class="icon-button">
                    <i class="ph-caret-right-bold"></i>
                  </span>
                        </a>
                    </article><article class="tile">
                        <div class="tile-header">
                            <i class="ph-fire-simple-light"></i>
                            <h3>
                                <?php echo $row['DOGEUSDT'];?>
                            </h3>
                        </div>
                        <a href="#">
                            <span>DOGE/USDT</span>
                            <span class="icon-button">
                    <i class="ph-caret-right-bold"></i>
                  </span>
                        </a>
                    </article><article class="tile">
                        <div class="tile-header">
                            <i class="ph-file-light"></i>
                            <h3>
                                <?php echo $row['LUNAUSDT'];?>
                            </h3>
                        </div>
                        <a href="#">
                  </span>
                            <span>LUNA/USDT</span><span class="icon-button">
                    <i class="ph-caret-right-bold"></i>
                        </a>
                    </article>
                </div>
                <div class="service-section-footer">
                </div>
            </section>
            <section class="transfer-section">
                <div class="transfer-section-header">
                    <h2>Latest buying</h2>
                    <div class="filter-options">
                        <p>Filter selected: less than 100 $</p>
                        <button class="icon-button">
                            <i class="ph-funnel"></i>
                        </button>
                        <button class="icon-button">
                            <i class="ph-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="transfers">
                    <div class="transfer">
                        <div class="transfer-logo">
                            <img src="https://static.wixstatic.com/media/c13bd5_82bbc807645e45b39d068c46276903d9~mv2.png/v1/fill/w_602,h_480,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/SP500-logo_edited.png" />
                        </div>
                        <dl class="transfer-details">
                            <div>
                                <dt>S&P 500</dt>
                            </div>
                            <div>
                                <dt>4012</dt>
                                <dd>Last four digits</dd>
                            </div>
                            <div>
                                <dt>28 Oct. 21</dt>
                                <dd>Date payment</dd>
                            </div>
                        </dl>
                        <div class="transfer-number">
                            - $ 5500
                        </div>
                    </div>
                    <div class="transfer">
                        <div class="transfer-logo">
                            <img src="assets/nyse.png">
                        </div>
                        <dl class="transfer-details">
                            <div>
                                <dt>NYSE</dt>
                            </div>
                            <div>
                                <dt>5214</dt>
                                <dd>Last four digits</dd>
                            </div>
                            <div>
                                <dt>26 Oct. 21</dt>
                                <dd>Date payment</dd>
                            </div>
                        </dl>
                        <div class="transfer-number">
                            - $ 3000
                        </div>
                    </div>
                    <div class="transfer">
                        <div class="transfer-logo">
                            <img src="assets/apple.png" />
                        </div>
                        <dl class="transfer-details">
                            <div>
                                <dt>AAPL</dt>
                            </div>
                            <div>
                                <dt>2228</dt>
                                <dd>Last four digits</dd>
                            </div>
                            <div>
                                <dt>22 Oct. 21</dt>
                                <dd>Date payment</dd>
                            </div>
                        </dl>
                        <div class="transfer-number">
                            - $ 110
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        </div>
    </div>
</div>


<script src="https://unpkg.com/phosphor-icons"></script>
</section>

</body>
</html>