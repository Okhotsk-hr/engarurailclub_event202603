<?php
if ($_SESSION["hnum"] == 1) {
} else if ($_SESSION["hnum"] == 2) {
} else if ($_SESSION["hnum"] == 3) {
} else if ($_SESSION["hnum"] == 4) {
} else if ($_SESSION["hnum"] == 5) {

    if ($_SESSION["windowsize"] >= 870) {
        $header .= '
    <div class="menu2">
        <div><p onclick="handleClick(51)">主催：遠軽鉄道趣味の会</p></div>
        <hr>
        <div><p>協力：KATO（関水金属）</p></div>
        <hr>
        <div><p onclick="handleClick(52)">協力：Rail Park Sapporo</p></div>
        <hr>
        <div><p onclick="handleClick(53)">協力：遠軽鉄道模型館</p></div>
    </div>
    ';
    } else {
        $header .= '
    <div class="menu2">
        <div><p onclick="handleClick(51)">主催：遠軽鉄道趣味の会</p></div>
        
        <div><p>協力：KATO（関水金属）</p></div>
        
        <div><p onclick="handleClick(52)">協力：Rail Park Sapporo</p></div>
        
        <div><p onclick="handleClick(53)">協力：遠軽鉄道模型館</p></div>
    </div>
    ';
    }
}
