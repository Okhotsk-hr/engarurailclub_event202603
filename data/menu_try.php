<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ハンバーガーメニュー試し</title>
    <link rel="stylesheet" href="bulk.css">
    <link rel="stylesheet" media="(min-width: 500px)" href="PC_bulk.css">
    <link rel="stylesheet" href="top.css">
    <link rel="stylesheet" href="menu.css">


    <script type="text/javascript" charset="UTF-8" src="//cache1.value-domain.com/xrea_header.js" async="async"></script>
</head>

<body>
    <header class="header">
        <!-- ヘッダーロゴ -->
        <div class="logo">鉄道模型で遊ぼう</div>

        <!-- ハンバーガーメニュー部分 -->
        <div class="nav">

            <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
            <input id="drawer_input" class="drawer_hidden" type="checkbox">

            <!-- ハンバーガーアイコン -->
            <label for="drawer_input" class="drawer_open"><span></span></label>

            <!-- メニュー -->
            <nav class="nav_content">
                <ul class="nav_list">
                    <div class="logo">鉄道模型で遊ぼう</div>
                    <li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/index.php ">TOP</a></li>
                    <li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/n_ho/ ">Nゲージとは</a></li>
                    <li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/v_menu.php ">車両紹介</a></li>
                    <li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/report/ ">2024年レポート</a></li>
                    <li class="nav_item"><a href="http://engarumrhall.s322.xrea.com/event202403/syuminokai/ ">
                            <主催>遠軽鉄道趣味の会
                        </a></li>
                    <li class="nav_item"><a href="https://twitter.com/engarumrhall ">
                            <協力>遠軽鉄道模型館(X)
                        </a></li>
                    <li class="nav_item"><a href="https://www.railpark.net/ ">
                            <協力>Rail Park Sapporo
                        </a></li>
                </ul>
            </nav>

        </div>
    </header>


    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <script src="bulk.js"></script>
    <script>
        $("#v_menu").on("click", function() {
            window.location.href = "v_menu.php";
        });
    </script>
</body>

</html>