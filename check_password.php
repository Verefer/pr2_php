<?php
$correct_password = "secret"; // Правильный пароль

$user_password = $_POST['password'];

if ($user_password === $correct_password) {
    header("Location: congratulations.php");
    exit();
} else {
    echo "Неправильный пароль!";
}
?>

