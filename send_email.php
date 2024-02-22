<?php
if (isset($_POST['mail_ok'])) {
    // Получаем данные из формы
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Отправляем письмо
    $result = mail($to, $subject, $message);

    // Проверяем результат отправки
    if ($result) {
        echo "<h2>Письмо успешно отправлено!</h2>";
    } else {
        echo "<h2>Ошибка при отправке письма.</h2>";
    }
}
?>
