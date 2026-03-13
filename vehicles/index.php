<?php
session_start();
$_SESSION["css"] = "";

include("../db/vehicles_connect.php");

$jump = "";
// session_start();
if (!isset($_SESSION["save"])) {
} else if (($_SESSION["save"]) == 1) {
}


$file_name = 'index.php';
//echo " <script>alert('windowsiae_checker');</script>";
include("../elements/windowsize_checker.php");

//echo "ブラウザの幅は" . $_SESSION["windowsize"];

include("../elements/bulk_css.php");
include("../elements/header.php");
include("../elements/footer.php");
//メニュー
include("../elements/menu.php");

//include("../elements/base_announcement.php");

//セッション変数"text"が存在しないなら、0に設定
if (!isset($_SESSION["hnum"])) {
    $_SESSION["hnum"] = "0";
} else {
    include("../elements/header_move.php");
}

if ($_SESSION["size_turn"] == 1) {
    $_SESSION["hnum"] = "0";
}

include("first_search.php");
//include("list_show_csv.php");
//include("search.php");
//include("allshow.php");

// $_SESSION["serchword"] = "a";

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

// v_cardsが空または未定義なら検索フォームにimgを自動入力して送信
if (!isset($_SESSION["v_cards"]) || $_SESSION["v_cards"] === "") {
    echo '<script>
        window.onload = function() {
            var input = document.getElementById("searchValue");
            if(input) {
                input.value = "img";
                document.forms[0].submit();
            }
        };
    </script>';
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>鉄道模型で遊ぼう</title>
    <style>
        <?= $css ?><?= $_SESSION["css"] ?>
    </style>
    <link rel="stylesheet" href="../bulk.css">
</head>

<body>
    <header class="header">

        <?= $header ?>

    </header>

    <form method="post" action="search.php">
        <label for="searchValue">検索する文字をキーワードしてください:</label><br>
        <input type="text" id="searchValue" name="searchValue" maxlength="10    " required>
        <button type="submit">検索</button>
    </form>
    <form method="post" action="allshow.php">
        <button type="submit">リセット</button>
    </form>

    <!-- <?= $_SESSION["wordresult"] ?> -->
    <?= $_SESSION["v_cards"] ?>

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