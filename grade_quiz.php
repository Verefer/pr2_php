<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_answers = array('a', 'c', array('a', 'c'));

    $score = 0;

    // Проверка ответов на вопросы 1 и 2
    for ($i = 1; $i <= 2; $i++) {
        $answer_key = 'q'.$i;
        if (isset($_POST[$answer_key]) && $_POST[$answer_key] == $correct_answers[$i - 1]) {
            $score++;
        }
    }

    // Проверка ответа на вопрос 3
    if (isset($_POST['q3'])) {
        $user_q3_answers = $_POST['q3'];
        sort($user_q3_answers);
        sort($correct_answers[2]);
        if ($user_q3_answers == $correct_answers[2]) {
            $score++;
        }
    }

    // Вывод результатов
    echo "<h2>Результаты теста:</h2>";
    echo "<p>Вы ответили правильно на $score из 3 вопросов.</p>";
} else {
    echo "<h2>Ошибка: данные не были отправлены через форму.</h2>";
}
?>
