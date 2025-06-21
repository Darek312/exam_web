<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Приветствие</title>
</head>
<body>
    <h1>Привет, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="login.php?logout=1">Выйти</a>
</body>
</html>