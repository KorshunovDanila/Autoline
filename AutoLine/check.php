<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

if (mb_strlen($name) < 2 || mb_strlen($name) > 90 {
    echo "Недопустимая длина имени";
    exit();
} else if (mb_strlen($email) < 7 || mb_strlen($email) > 90 {
    echo "Недопустимая почта";
    exit();
} else if (mb_strlen($password)) < 2 || mb_strlen($password) > 6 {
    echo "Недопустимая почта";
    exit();
}  

$masql = new mysqli('localhost', 'root', '', 'AutoLine');
$masql ->query("INSERT INTO 'users' ('name', 'email', 'password')
VALUES('$name', '$email', '$password')");

$mysql->close();
?>