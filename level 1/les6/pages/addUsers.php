<?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = clearStr($_POST['login']);
    $password = clearStr($_POST['password']);
    $sql = "INSERT INTO users(login, password) 
            VALUES ('$login', '$password')";
    mysqli_query(connect (), $sql);
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit;
}
$content =<<<php
<h1>Добавление пользователя</h1>
php;

$content .=<<<php
<form method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <input type="hidden" name="page" value="2">
    <input type="submit">
</form>
php;
