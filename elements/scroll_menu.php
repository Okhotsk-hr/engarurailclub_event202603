<?php
$event_info = [
    ["2026/03/13", "車両紹介ページを公開しました", "http://engarumrhall.s322.xrea.com/event202603/vehicles/"],
    ["2026/03/06", "ミニジオラマ製作ワークショップを開催します", "http://engarumrhall.s322.xrea.com/event202603/workshop/workshop.php"],
    ["2026/02/24", "第三回鉄道模型で遊ぼうを開催します", "http://engarumrhall.s322.xrea.com/event202603/"]
];

$release_info = [
    ["2026/03/15", "車両紹介を追加", "http://engarumrhall.s322.xrea.com/event202603/vehicles/"],
    ["2026/03/13", "車両紹介ページ公開", "http://engarumrhall.s322.xrea.com/event202603/vehicles/"],
    ["2026/03/10", "イベントお知らせ/サイト更新情報一覧の表示を追加", ""],
    ["2026/03/06", "ワークショップページ公開", "http://engarumrhall.s322.xrea.com/event202603/workshop/workshop.php"],
    ["2026/02/24", "第三回鉄道模型で遊ぼうイベントサイト公開", "http://engarumrhall.s322.xrea.com/event202603/"]
];

//イベント情報
$scroll_menu = '
    <div>　</div>
    <div>お知らせ</div>
    <div class="scroll">
';

for ($i = 0; $i < count($event_info); $i++) {
    $scroll_menu .= '
        <div class="scroll_content">
            <div class="scroll_space"></div>
            <div class="date">' . $event_info[$i][0] . '</div>';

    if ($event_info[$i][2] == "") {
        $scroll_menu .= '
            <div class="scroll_title">' . $event_info[$i][1] . '</div>
            <div class="scroll_space"></div>
        </div>
    ';
    } else {
        $scroll_menu .= '
            <div class="scroll_title"><a href="' . $event_info[$i][2] . '">' . $event_info[$i][1] . '<br> ＞＞＞</a></div>
            <div class="scroll_space"></div>
        </div>
    ';
    }
}

$scroll_menu .= '
    </div>
';

//サイト情報
$scroll_menu .= '
    <div>　</div>
    <div>サイト更新</div>
    <div class="scroll">
';

for ($i = 0; $i < count($release_info); $i++) {
    $scroll_menu .= '
        <div class="scroll_content">
            <div class="scroll_space"></div>
            <div class="date">' . $release_info[$i][0] . '</div>';

    if ($release_info[$i][2] == "") {
        $scroll_menu .= '
            <div class="scroll_title">' . $release_info[$i][1] . '</div>
            <div class="scroll_space"></div>
        </div>
    ';
    } else {
        $scroll_menu .= '
            <div class="scroll_title"><a href="' . $release_info[$i][2] . '">' . $release_info[$i][1] . '<br> ＞＞＞</a></div>
            <div class="scroll_space"></div>
        </div>
    ';
    }
}

$scroll_menu .= '
    </div>
';
