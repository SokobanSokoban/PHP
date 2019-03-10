<?
if (!empty($id)) {
    $sql = "DELETE FROM users WHERE id = $id";
    mysqli_query(connect(), $sql);
}
header('Location: ?page=3');
exit;

