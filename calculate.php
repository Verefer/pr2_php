<?php
if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Ошибка: деление на ноль!";
            }
            break;
        default:
            $result = "Неизвестная операция";
            break;
    }

    echo "<h2>Результат: $result</h2>";
} else {
    echo "<h2>Ошибка: Не все данные переданы.</h2>";
}
?>
