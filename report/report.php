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
            2026年3月28,29日、遠軽町芸術文化交流プラザ メトロプラザにて第三回目となる鉄道模型で遊ぼうを開催しました。
        </p>
        <p>
            イベントアンケートは引き続き受付中です。ぜひご意見を聞かせてください。<br>
            <a href="https://forms.gle/FJwV1FwchiSuSjtb7">https://forms.gle/FJwV1FwchiSuSjtb7</a>
        </p>
        <img src="img/img01.png" alt="">
    </div>
    <hr>
    <div>
        <p>
            今イベントの特徴（前回からの変更）
        </p>
        <ul>
            <li>道内団体によるミニジオラマワークショップの実施（本イベントでのワークショップ自体は2回目）</li>
            <li>HOゲージのレイアウト内にミニジオラマ走行展示</li>
            <li>Nゲージメインレイアウト内で信号機の設定</li>
            <li>メインレイアウトの運転体験で整理券制度及びタイマーの導入（前回2日目より導入）</li>
            <li>運転体験車両を選びやすいよう、陳列場所を変更（今回2日目より導入）</li>
            <li>KATOのサウンドシステム（前回より導入）</li>
            <li>公立はこだて未来大学のサークル「Ichigo鉄道」によるNゲージの自動運転展示及びプログラミング体験</li>
            <li>Nゲージチラシ設置</li>
        </ul>
    </div>
    <hr>
    <div>
        <p>
            Nゲージメインレイアウト
        </p>
        <p>車庫の風景</p>
        <div class="img_flex">
            <div class="img_box">
                <div class="img"><img src="img/img06.png" alt=""></div>
            </div>
            <div class="img_box">
                <div class="img"><img src="img/img30.png" alt=""></div>
            </div>
        </div>
        <p>
            今回のイベントでは、鉄道模型で遊ぼうでは初めての信号機を車庫付近に3基設置しました。
            車両が通過すると赤に変わり、時間経過で順に信号が切り替わります。
        </p>
        <img src="img/img05.png" alt="">
        <p>
            メインレイアウト付近では先頭車両の展示などもしていました。
        </p>
        <div class="img_flex">
            <div class="img_box">
                <div class="img"><img src="img/img24.png" alt=""></div>
            </div>
            <div class="img_box">
                <div class="img"><img src="img/img22.png" alt=""></div>
            </div>
        </div>
    </div>
    <hr>
    <div>
        <p>
            ミニジオラマ・ワークショップ
        </p>
        <p>
            前年KATOの方にお越しいただき実施したミニジオラマワークショップを、今回は道内の団体である
            <a href="https://yh-sapporo.jp/">一般財団法人北海道青年会館</a>、
            <a href="https://sites.google.com/view/doushakyoushi/">北海道社会教育士会</a>の方にお越しいただき実施しました。<br>
            HOゲージレイアウトの中にはミニジオラマを並べ車両を走らせていました。ワークショップの参加後はここに自分が作ったジオラマを繋げることもできました。
        </p>
        <img src="img/img13.png" alt="">
    </div>
    <hr>
    <div>
        <p>
            HOゲージ
        </p>
        <p>
            キハ82や昨年度から引き続きトーマスシリーズの車両が走りました。
        </p>
        <img src="img/img19.png" alt="">
    </div>
    <hr>
    <div>
        <p>
            Ichigo鉄道コーナー
        </p>
        <p>
            公立はこだて未来大学のサークル「Ichigo鉄道」による、こどもパソコンIchigoJamを使用したNゲージの自動運転展示。<br>
            転車台を使った自動運転の他、IchigoJamプログラミング体験も。
        </p>
        <img src="img/img20.png" alt="">
    </div>

    <hr>
    <div>
        <p>
            次回に向けて
        </p>
        <ul>
            <li>メインレイアウトでホームの延長（長編成対応化）</li>
            <li>ミニジオラマワークショップの開催継続</li>
            <li>運転体験の待ち時間改善<br>整理券制度の改善や待ち時間の明確化、回転の効率化など</li>
            <li>運転体験の車両が選びやすいようにする</li>
            <li>イベントサイトの充実</li>
            <li>他団体との協力</li>
            <li>窓から見える列車の時刻案内</li>
        </ul>
        <p>
            次回開催に向けてリクエスト募集中です。
            以下イベントアンケートより。
            <a href="https://forms.gle/FJwV1FwchiSuSjtb7">https://forms.gle/FJwV1FwchiSuSjtb7</a>
        </p>
    </div>

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