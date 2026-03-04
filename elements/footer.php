<?php
if ($_SESSION["windowsize"] >= 500) {

  $footer = '
    <div style="height: 10px"></div>
    <footer>
        <div style="font-size: 20px;">鉄道模型で遊ぼう2026</div>
        <div>
            <div><strong>主催</strong></div>
            <div><a href="https://x.com/engarumrhall">遠軽鉄道趣味の会</a></div>
            <div><strong>協力</strong></div>
            <div><a href="https://www.railpark.net/">Rail Park Sapporo</a></div>
            <div><a href="https://yh-sapporo.jp/">一般財団法人 北海道青年会館</a></div>
            <div><a href="https://sites.google.com/view/doushakyoushi/">北海道社会教育士会</a></div>
            <div><a href="http://engarumrhall.s322.xrea.com/ichigorailclub/">Ichigo鉄道</a></div>
        </div>
    </footer>

    ';

  $css .= '

        ';
} else {
  $footer = '
    <div style="height: 10px"></div>
    <footer>
        <div style="font-size: 20px;">鉄道模型で遊ぼう2026</div>
        <div>
            <div><strong>主催</strong></div>
            <div><a href="https://x.com/engarumrhall">遠軽鉄道趣味の会</a></div>
            <div><strong>協力</strong></div>
            <div><a href="https://www.railpark.net/">Rail Park Sapporo</a></div>
            <div><a href="https://yh-sapporo.jp/">一般財団法人 北海道青年会館</a></div>
            <div><a href="https://sites.google.com/view/doushakyoushi/">北海道社会教育士会</a></div>
            <div><a href="http://engarumrhall.s322.xrea.com/ichigorailclub/">Ichigo鉄道</a></div>
        </div>
    </footer>
    ';

  $css .= '
    ';
}
