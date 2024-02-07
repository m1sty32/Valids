<?php

// Функция для проверки валидности email адреса
function validateEmail($email)
{
    // Используем встроенную функцию PHP для проверки валидности email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

// Функция для проверки валидности номера телефона
function validatePhoneNumber($phoneNumber)
{
    // Используем регулярное выражение для проверки формата номера телефона
    if (preg_match("/^\+?\d{1,3}[-\s]?\(?\d{3}\)?[-\s]?\d{3}[-\s]?\d{2,4}$/", $phoneNumber)) {
        return true;
    } else {
        return false;
    }
}

// Запрашиваем у пользователя ввод email адреса
$email = readline("Введите email адрес: ");
if (validateEmail($email)) {
    echo "Email адрес $email валиден.\n";
} else {
    echo "Email адрес $email не валиден.\n";
}

// Запрашиваем у пользователя ввод номера телефона
$phoneNumber = readline("Введите номер телефона: ");
if (validatePhoneNumber($phoneNumber)) {
    echo "Номер телефона $phoneNumber валиден.\n";
} else {
    echo "Номер телефона $phoneNumber не валиден.\n";
}

?>



