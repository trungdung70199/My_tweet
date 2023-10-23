<?php
require_once('../app.php');

// POSTリクエスト以外は処理しない
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('can not get access');
}

// セッションから入力されたデータを取得
$post = $_SESSION['regis'];

// TODO: MySQLに保存
$user = new User();
$user->insert($post);

// 完了画面にリダイレクト
header('Location: result.php');
