<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hnum'])) {
    $hnum = htmlspecialchars($_POST['hnum'], ENT_QUOTES, 'UTF-8');

    session_start();
    $_SESSION["save"] = 0;
    if ($hnum == 1) {
        //トップページ
        $_SESSION["hnum"] = 0;
        echo "http://engarumrhall.s322.xrea.com/event202503/index.php";
    } else if ($hnum == 2) {
        //Nゲージとは
        $_SESSION["hnum"] = 0;
        echo "http://engarumrhall.s322.xrea.com/event202503/N/index.php";
    } else if ($hnum == 3) {
        //車両紹介
        $_SESSION["hnum"] = 0;
        echo "http://engarumrhall.s322.xrea.com/event202503/vehicles/index.php";
    } else if ($hnum == 52) {
        //レールパークサッポロ
        $_SESSION["hnum"] = 0;
        echo "https://www.railpark.net/";
    } else if ($hnum == 53) {
        //遠軽鉄道模型館
        $_SESSION["hnum"] = 0;
        echo "http://engarumrhall.s322.xrea.com/engarumrhall/";
    } else {
        $_SESSION["hnum"] = $hnum;
        echo "";
    }
} else {
    echo "エラー: データがありません";
}
