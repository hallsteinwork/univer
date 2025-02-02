<?php
// Параметри підключення до бази даних
$host = 'MySQL-8.2';
$user = 'root';
$pass = '';
$dbname = 'wordpress';

// Підключення до бази даних
$db = new mysqli($host, $user, $pass, $dbname);

// Перевірка на помилки при підключенні
if ($db->connect_error) {
    die("Помилка підключення: " . $db->connect_error);
}
?>
