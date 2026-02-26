<?php
if ($_SESSION["windowsize"] >= 500) {

  $header = '
                <div class="logo">鉄道模型で遊ぼう</div>

    ';

  $css .= '
        .header1{
        
                    display: flex;
                    justify-content: space-between;
}

        .logo {
          font-size: 30px;
          margin: 0 auto;
        }
        ';
} else {
  $header = '
 <!-- ヘッダーロゴ -->
        <div class="logo">鉄道模型で遊ぼう</div>
    ';

  $css .= '
    ';
}
