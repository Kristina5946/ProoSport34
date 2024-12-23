<?php
    $host = 'localhost'; // Адрес сервера
    $user = 'root'; // Пользователь
    $password = ''; // Пароль (по умолчанию пустой)
    $database = 'your_database'; // Имя вашей базы данных

    // Подключение
    $conn = new mysqli($host, $user, $password, $database);

    // Проверка подключения
    if ($conn->connect_error) {
        die('Ошибка подключения: ' . $conn->connect_error);
    }
?>
