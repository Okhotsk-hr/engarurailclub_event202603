<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['text'])) {
    $text = htmlspecialchars($_POST['text'], ENT_QUOTES, 'UTF-8');

    session_start();
    $_SESSION["text"] = $text;
    echo $text;
} else {
    echo "エラー: データがありません";
}
