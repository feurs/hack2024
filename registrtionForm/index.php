<?php
include 'scripts/user.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"]) && isset($_POST["password"])) {
        $formData = new Data($_POST["login"], $_POST["password"]);
//        $formData->getDataFromRegistration($_POST["login"], $_POST["password"]);
        $formData->serializeDataFromForm();
    }
}

?>

<!DOCTYPE html>
<html>
<body>

<h2>Registration of new user</h2>

<form method="post">
    <label for="login">Login:</label><br>
    <input type="text" id="login" name="login" value="login"><br>
    <label for="password">Password:</label><br>
    <input type="text" id="password" name="password" value="***"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
