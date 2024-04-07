<?php

include 'tatracoin.php';
include 'data.php';

$user1 = new Data('user1', 'password1');
$user2 = new Data('user2', 'password2');

$tatracoin = new Tatracoin('userDatas.txt');

$tatracoin->addUser($user1);
$tatracoin->addUser($user2);

$user1->financialAssets['TATRA'] = 800;
$user2->financialAssets['TATRA'] = 400;

$tatracoin->transferCoin('user1', 'user2', 100);

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

echo "<br>Цепочка блоков:<br>";
$blockchain = new Blockchain();
$blockchain->addBlock(new Block(1, date('Y-m-d H:i:s'), ['amount' => 10]));
echo "<br>";
$blockchain->addBlock(new Block(2, date('Y-m-d H:i:s'), ['amount' => 20]));

echo json_encode($blockchain, JSON_PRETTY_PRINT);

echo "<br>";
echo "<br>";


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
