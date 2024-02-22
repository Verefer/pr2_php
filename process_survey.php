<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $programming_languages = $_POST['programming_languages'] ?? '';
    $experience = $_POST['experience'] ?? '';

    // Вычисляем возраст
    $dob_timestamp = strtotime($dob);
    $now_timestamp = time();
    $age_seconds = $now_timestamp - $dob_timestamp;
    $age_years = floor($age_seconds / (365 * 24 * 60 * 60));

    // Выводим результат
    echo "<h2>Результаты анкеты:</h2>";
    echo "<p><strong>Имя:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Дата рождения:</strong> $dob</p>";
    echo "<p><strong>Возраст:</strong> $age_years года(лет)</p>";
    echo "<p><strong>Языки программирования:</strong> $programming_languages</p>";
    echo "<p><strong>Опыт работы:</strong> $experience года(лет)</p>";
} else {
    echo "<h2>Ошибка: данные не были отправлены через форму.</h2>";
}
?>
