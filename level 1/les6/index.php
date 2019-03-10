<?php
const PUBLIC_DIR = __DIR__;
include('config.php');
$id = (int)$_GET['id'];

const PAGES = 'pages';
$page = (int)$_GET['page'];
switch ($page) {
    case 1:
        include(PAGES . '/main.php');
        break;
    case 2:
        include(PAGES . '/addUsers.php');
        break;
    case 3:
        include(PAGES . '/Users.php');
        break;
    case 4:
        include(PAGES . '/User.php');
        break;
    case 5:
        include(PAGES . '/delUser.php');
        break;
    case 6:
        include(PAGES . '/updateUser.php');
        break;
    case 7:
        include(PAGES . '/calc.php');
        break;
    case 8:
        include(PAGES . '/gallery.php');
        break;
    default:
        include(PAGES . '/main.php');
        break;
}

$tmpl = file_get_contents('html.html');
echo str_replace('{{content}}', $content, $tmpl);

