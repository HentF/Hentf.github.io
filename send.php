<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $text = htmlspecialchars($text);

    $name = urldecode($name);
    $email = urldecode($email);
    $text = urldecode($text);

    $name = trim($name);
    $email = trim($email);
    $text = trim($text);

    if (mail("hentaifeiren@gmail.com",
            "Новое письмо с сайта",
            "Имя: ".$name."\n".
            "Почта: ".$email."\n".
            "Текст: ".$text,
            "From: no-reply@mydomain.com\r\n")
    ) {
        echo ('Письмо успешно отправлено!');
    }

    else {
        echo ('Есть ошибки! Проверьте данные...');
    }

?>