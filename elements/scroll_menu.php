<?php
$release_info = [
    ["2026/03/bb", "ワークショップページ公開", "event202603/"],
    ["2026/03/aa", "第三回鉄道模型で遊ぼうイベントサイト公開", "event202603/"]
];

$scroll_menu = '
    <div class="scroll">
';

for ($i = 0; $i < count($release_info); $i++) {
    $scroll_menu .= '
        <div class="scroll_content">
            <div class="scroll_space"></div>
            <div class="date">' . $release_info[$i][0] . '</div>
            <div class="scroll_title"><a href="' . $release_info[$i][2] . '">' . $release_info[$i][1] . '<br> ＞＞＞</a></div>
            <div class="scroll_space"></div>
        </div>
    ';
}

$scroll_menu .= '
    </div>
';

// $scroll_menu = '
//     <div class="scroll">
//         <div class="scroll_content">
//             <div class="scroll_space"></div>
//             <div class="date">ここに更新日付が入ります</div>
//             <div class="scroll_title">ここに内容・リンクが入ります</div>
//             <div class="scroll_space"></div>
//         </div>

//         <div class="scroll_content">
//             <div class="scroll_space"></div>
//             <div class="date">ここに更新日付が入ります</div>
//             <div class="scroll_title">ここに内容・リンクが入ります</div>
//             <div class="scroll_space"></div>
//         </div>


//     </div>
// ';
