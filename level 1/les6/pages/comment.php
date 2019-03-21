<?php
// код для добавления комментария на странице вывода комментариев
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id      = $_POST["id"];
    $user    = clearStr($_POST['user']);
    $comment = clearStr($_POST['comment']);

    $sql = "INSERT INTO comments(id_photo, user,comment) 
            VALUES ($id, '$user' ,'$comment')";

    mysqli_query(connect (), $sql);
    header('Location: ' . $_SERVER['REQUEST_URI']);

   // exit;
}

// получаем фото к коменту
$sql = "SELECT  * 
        FROM img 
        WHERE id = $id ";
$content ='';
$result = mysqli_query(connect (), $sql);
$content = '<div class="container">';
while($row = mysqli_fetch_assoc($result)) {
    $content .= <<<php
    <div class="img_block" >
    <a href="?id={$row['id']}">
    <img src= {$row['path']}{$row['name']} width="25%" alt="#"></a>
    </div>
php;
}
$content .= '</div>';

// тут новый коммент
$content .= <<<php
<form method="POST">
	<p>Введите свой ник</p>
	<input type="text" name="user" value="" >
	<p>оставьте отзыв</p>
	<textarea rows="5" cols="50" name="comment"> </textarea>
	<br>
	<br>
	<!--поле  нужно для передачи id методом пост-->
	<input name="id" type="hidden" value="{$id}">
	<input type="submit" value="Сохранить отзыв">
</form>
php;


// тут список комменов
$sql = "SELECT * 
        FROM comments 
        WHERE id_photo = $id";
$result = mysqli_query(connect (), $sql);
while($row = mysqli_fetch_assoc($result)) {
    $content .= <<<php
    <hr>
    <p> от {$row['user']}</p>
    <p>{$row['comment']}</p>
    <hr>
php;
}



?>