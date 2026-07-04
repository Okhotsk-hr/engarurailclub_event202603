<?php
session_start();

include("../db/report_connect.php");


$jump = "";
// session_start();
if (!isset($_SESSION["save"])) {
} else if (($_SESSION["save"]) == 1) {
}


$file_name = 'report.php';
include("../elements/windowsize_checker.php");
//echo "ブラウザの幅は" . $_SESSION["windowsize"];

//echo "ブラウザの幅は" . $_SESSION["windowsize"];

include("../elements/bulk_css.php");
include("report_css.php");
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
    <title>鉄道模型で遊ぼう2026/イベントレポート</title>
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
        第三回鉄道模型で遊ぼう<br>
        イベントレポート
    </div>

    <div>
        開催日時：2026年3月 <br>
        　　　　　28日（土）10:00～18:00 <br>
        　　　　　29日（日）10:00～16:00 <br>
        会場：<br>
        遠軽町芸術文化交流プラザ <br>
        メトロプラザ2F多目的室4・5
    </div>
    <div>
        <p>
            2026年3月28,29日、遠軽町芸術文化交流プラザ メトロプラザにて第三回目となる鉄道模型で遊ぼうを
            開催することができました。

        </p>
    </div>

    <div></div>

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