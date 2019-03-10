<?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = clearStr($_POST['login']);
    $password = clearStr($_POST['password']);
    $sql = "UPDATE users SET 
            login='$login',
            password='$password'
            WHERE id = $id";
    mysqli_query(connect (), $sql);
    header('Location: ?page=3');
    exit;
}
$sql = "SELECT id, fio, login, password, date, count 
        FROM users 
        WHERE id = $id";
$result = mysqli_query(connect (), $sql);
$row = mysqli_fetch_assoc($result);

$content =<<<php
<h1>Редактирование пользователя</h1>
php;

$content .=<<<php
<form method="post">
    <input type="text" value="{$row['login']}" name="login" placeholder="login">
    <input type="text" value="{$row['password']}" name="password" placeholder="password">
    <input type="hidden" name="page" value="2">
    <input type="submit">
</form>
php;
