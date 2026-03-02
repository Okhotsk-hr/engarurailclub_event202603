<?php
session_start();

include("../db/workshop_connect.php");


$jump = "";
// session_start();
if (!isset($_SESSION["save"])) {
} else if (($_SESSION["save"]) == 1) {
}


$file_name = 'workshop.php';
include("../elements/windowsize_checker.php");
//echo "ブラウザの幅は" . $_SESSION["windowsize"];

//echo "ブラウザの幅は" . $_SESSION["windowsize"];

include("../elements/bulk_css.php");
include("../elements/header.php");
include("../elements/footer.php");

//メニュー
include("../elements/menu.php");

//セッション変数"text"が存在しないなら、0に設定
if (!isset($_SESSION["hnum"])) {
    $_SESSION["hnum"] = "0";
} else {
    include("../elements/header_move.php");
}

if ($_SESSION["size_turn"] == 1) {
    $_SESSION["hnum"] = "0";
}


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>鉄道模型で遊ぼう2026</title>
    <style>
        <?= $css ?>
    </style>
    <link rel="stylesheet" href="../bulk.css">
    <link rel="stylesheet" href="workshop.css">
</head>

<body>
    <header class="header">

        <?= $header ?>

    </header>

    <?= $windowcheck ?>

    <div class="ws_title">
        ミニジオラマ制作ワークショップ
    </div>

    <div>
        <p>
            日時：3月29日（日）10:00～16:00 <br>
            場所：多目的室6<br>
            材料費：2,500円<br>
            所要時間：約90～120分<br>
            参加方法：予約（ <a href="https://forms.gle/KxTqsWzT3uwKq3D79">予約フォーム</a> ） <br>
            　　　　　当日先着順（先着20組）<br>
        </p>
    </div>

    <div style="height: 10px"></div>

    <?= $footer ?>

    <div style="height: 100px"></div>


    <?= $menu_show ?>
    <script>
        // クリックイベントを設定
        function handleClick(hnum) {
            // 非同期リクエスト送信 (Ajax)
            fetch('../elements/process.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'hnum=' + encodeURIComponent(hnum)
                })
                .then(response => response.text())
                .then(data => {
                    //alert(data);
                    location.href = data;
                    //location.reload()

                });
        }

        <?= $menu_js ?>
    </script>

</body>

</html>