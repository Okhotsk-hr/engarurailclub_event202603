<?php
session_start();

include("db/top_connect.php");


$jump = "";
// session_start();
if (!isset($_SESSION["save"])) {
} else if (($_SESSION["save"]) == 1) {
}


$file_name = 'index.php';
include("elements/windowsize_checker.php");
//echo "ブラウザの幅は" . $_SESSION["windowsize"];

//echo "ブラウザの幅は" . $_SESSION["windowsize"];

include("elements/bulk_css.php");
include("elements/header.php");
include("elements/footer.php");
include("elements/scroll_menu.php");

//メニュー
include("elements/menu.php");

//セッション変数"text"が存在しないなら、0に設定
if (!isset($_SESSION["hnum"])) {
    $_SESSION["hnum"] = "0";
} else {
    include("elements/header_move.php");
}

if ($_SESSION["size_turn"] == 1) {
    $_SESSION["hnum"] = "0";
}

// $i = 0;
// while (true) {
//     echo date("Y/m/d H:i:s");
//     echo '<br/>';
//     sleep(5);
//     $i = $i + 1;
//     if ($i == 5) {
//         break;
//     }
// }

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
    <link rel="stylesheet" href="bulk.css">
</head>

<body>
    <header class="header">

        <?= $header ?>

    </header>

    <?= $windowcheck ?>


    <!-- 見やすく一時的に上で -->
    <?= $scroll_menu ?>

    <div class="info_title">
        第三回鉄道模型で遊ぼう <br />
        2026年3月28,29日開催！！
    </div>

    <img src="poster.png" alt="" width="100%" />

    <!-- <p class="layout_title">各レイアウトにて <br />無料運転体験あり!</p>

    <div class="layout">
        <p>
            車両の持ち込みOK<br />
            車両を持っていなくても<br />
            レンタル車両から<br />
            好きな車両を選んで<br />
            走らせられます
        </p>
    </div> -->


    <div class="place">
        <div>　</div>
        <div class="place_text">
            <p class="title">会場</p>
            <p>遠軽町芸術文化交流プラザ</p>
            <p>メトロプラザ2F多目的室4・5</p>
        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2867.1807237712064!2d143.517969276063!3d44.05897667108584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f12a1305c4d097b%3A0xb256d5c14fb15c6d!2z6YGg6Lu955S66Iq46KGT5paH5YyW5Lqk5rWB44OX44Op44K2IOODoeODiOODreODl-ODqeOCtg!5e0!3m2!1sja!2sjp!4v1707444218871!5m2!1sja!2sjp" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>



    <?= $footer ?>

    <div style="height: 100px"></div>


    <?= $menu_show ?>
    <script>
        // クリックイベントを設定
        function handleClick(hnum) {
            // 非同期リクエスト送信 (Ajax)
            fetch('elements/process.php', {
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