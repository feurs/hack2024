<?php

include 'tatracoin.php';
include 'data.php';

// тут челиков создаем но надо их брать с sql 
$user1 = new Data('user1', 'password1');
$user2 = new Data('user2', 'password2');

//монетку создаем
$tatracoin = new Tatracoin('userDatas.txt');

// ААА ВОТ НАХУЯ МНЕ ТА ФУНКЦИЯ ВСЕ ТАКИ НЕ УДАЛЯЙТЕ ЕЕ
$tatracoin->addUser($user1);
$tatracoin->addUser($user2);

// тут я просто токены для теста выдавал пацанятам
$user1->financialAssets['TATRA'] = 800;
$user2->financialAssets['TATRA'] = 400;

//ну и послал это
$tatracoin->transferCoin('user1', 'user2', 100);

// Кринжевывывод информации о пользователе 1
echo "Пользователь 1:<br>";
echo "Логин: " . $user1->login . "<br>";
echo "Пароль: " . $user1->password . "<br>";
echo "День регистрации: " . $user1->dateOfRegistration . "<br>";
echo "Баланс: " . $user1->financialAssets['TATRA'] . "<br>";

// Кринжевыводывод информации о пользователе 2
echo "<br>Пользователь 2:<br>";
echo "Логин: " . $user2->login . "<br>";
echo "Пароль: " . $user2->password . "<br>";
echo "День регистрации: " . $user2->dateOfRegistration . "<br>";
echo "Баланс: " . $user2->financialAssets['TATRA'] . "<br>";

// Кринжевыводывод цепочки блоков
echo "<br>Цепочка блоков:<br>";
$blockchain = new Blockchain();
$blockchain->addBlock(new Block(1, date('Y-m-d H:i:s'), ['amount' => 10]));
echo "<br>";
$blockchain->addBlock(new Block(2, date('Y-m-d H:i:s'), ['amount' => 20]));
//VTNJL GJCN HEKBN
echo json_encode($blockchain, JSON_PRETTY_PRINT);

echo "<br>";
echo "<br>";

// вот тут не знаю нахуя я второй раз эту отладку вставил но живите с этим
echo "Пользователь 1:<br>";
echo "Логин: " . $user1->login . "<br>";
echo "Пароль: " . $user1->password . "<br>";
echo "День регистрации: " . $user1->dateOfRegistration . "<br>";
echo "Баланс: " . $user1->financialAssets['TATRA'] . "<br>";

echo "<br>Пользователь 2:<br>";
echo "Логин: " . $user2->login . "<br>";
echo "Пароль: " . $user2->password . "<br>";
echo "День регистрации: " . $user2->dateOfRegistration . "<br>";
echo "Баланс: " . $user2->financialAssets['TATRA'] . "<br>";

?>
