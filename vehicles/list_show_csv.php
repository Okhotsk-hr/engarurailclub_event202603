<?php
//主催・協力黒--
// アイコン消す
// 枠と写真同じ幅:::優先できた
//説明文：：：準優先
//両の前にアイコン
//名前改行-----優先＋保留
//文章統一

$v_list = [[], []];
$v_list_squeeze  = [[], []];

// #1 ファイルの読み込み
$fp = fopen("v_list.csv", "r");
$data = fgetcsv($fp);

$i = 0;
while ($data = fgetcsv($fp)) {
    // テーブルセルに配列の値を格納
    $v_list[$i] = $data;
    $i++;
}

// #4 ファイルを閉じる
fclose($fp);




//include("v_list.php");
$v_cards = '
<div>車両紹介はイベント開催まで順次追加します。</div>
';

if ($_SESSION["windowsize"] >= 500) {
    $css .= '
    .card {
            width: 300px;
            height: 500px;
            background: rgb(50,180,250);
            border-radius: 10px;
            margin: 0 auto;
            padding: 0 auto;
        }

        .img {
            width: 90%;
            margin: 0 auto;
            border-radius: 10px;
        }

        .mainimg{
            border-radius: 10px;
        }

        img {
            width: 100%;


        }

        .v_name {
            /* width: 100px; */
            text-align: center;
            padding: 0 auto;
            font-size:20px
        }

        .card_step {
            width: 100%;
            display: flex;
            margin: auto;
        }

        table {
            /*width: 90%;*/
        }

        .tables{
            width:100%;
        }

        .icon{
            width:35px
        }
        .icons {
            width: 100px;
            /* display: flex; */
            /* margin: 0 atuo; */
            /* text-align: center; */
        }

        .titlebox {
            display: flex;
            width: 90%;
            margin: 0 auto;
        }

    ';
} else {
    $css .= '
    .card {
            width: 150px;
            height: 500px;
            background: rgb(50,180,250);
            border-radius: 10px;
            margin: 0 auto;
            padding: 0 auto;
        }

        .img {
            width: 90%;
            margin: 0 auto;
        }

        .mainimg{
            border-radius: 10px;
        }

        img {
            width: 100%;

        }

        .v_name {
            /* width: 100px; */
            text-align: center;
            padding: 0 auto;
            font-size:15px
        }

        .card_step {
            width: 100%;
            display: flex;
            margin: auto;
        }

        table {
            width: 80%;
            font-size: 15px;
        }

        .n_text{
            font-size: 15px;
        }

        .icon{
            width:20px
        }

        .tables{
            width:100%;
        }
            
        .icons {
            width: 100px;
            /* display: flex; */
            /* margin: 0 atuo; */
            /* text-align: center; */
        }

        .titlebox {
            display: flex;
            width: 90%;
            margin: 0 auto;
        }
    ';
}
// $v_cards .= '
//     <h1>2次元配列の検索</h1>
//     <form method="post">
//         <label for="searchValue">検索する文字を入力してください:</label>
//         <input type="text" id="searchValue" name="searchValue" maxlength="3" required>
//         <button type="submit">検索</button>
//     </form>
// ';

for ($i = 0; $i <= count($v_list) - 1; $i++) {
    if ($i % 4 == 0 && $_SESSION["windowsize"] >= 900) {
        $v_cards .= '
        <div>　</div>
        <div class="card_step">';
    } else if ($i % 2 == 0 && $_SESSION["windowsize"] < 900) {
        $v_cards .= '
        <div>　</div>
        <div class="card_step">
        ';
    }
    $v_cards .= '
    <div class="card">
    <div style="font-size:5px">　</div>
            <!--<div class="v_name">' . $v_list[$i][3] . ' </div>-->

                    <div class="titlebox">
            <div class="icon"><img src=' . $v_list[$i][8] . ' alt=""></div>
              <table border="1" class="tables">
                <tr>
                    <th>
                        ' . $v_list[$i][3] . '
                    </th>
                </tr>
            </table>
                        </div>

            <div></div>
            <!--
            <div class="icons">
            <div class="icon"><img src=http://www.trainfrontview.net/b/h40ssv.png alt=""></div>
            <div class="icon"><img src=http://www.trainfrontview.net/b/h40ssg.png alt=""></div>
            <div class="icon"><img src=http://www.trainfrontview.net/b/h261-5b_hkt.png alt=""></div>
            <div class="icon"><img src=http://www.trainfrontview.net/b/h261-5v_ozr.png alt=""></div>
            </div>
            -->

            <div class="img"><img src=' . $v_list[$i][1] . ' alt="" class="mainimg"></div>
            <div style="font-size:5px">　</div>
  

            <div class="n_text" style="text-align: center;">' . $v_list[$i][4] . '　' . $v_list[$i][5] . '</div>
            <div class="n_text">' . $v_list[$i][6] . '</div>
            <!--<table border="1" class="tables">
                <tr>
                    <td>
                        ' . $v_list[$i][4] . '
                    </td>
                    <td>
                        ' . $v_list[$i][5] . '
                    </td>
                </tr>
            </table>-->
    </div>

    ';

    if ($i % 4 == 3 && $_SESSION["windowsize"] >= 900) {
        $v_cards .= '</div>
        <div style="font-size:5px">　</div>
        ';
    } else if ($i % 2 == 1 && $_SESSION["windowsize"] < 900) {
        $v_cards .= '</div>
        <div style="font-size:5px">　</div>
        ';
    }
}

// $v_cards = '

//         <div class="card">
//             <div>　</div>
//             <div class="img"><img src="https://pbs.twimg.com/media/GI_9GIvbEAApD3Q?format=jpg&name=small" alt=""></div>

//             <div class="v_name">トワイライトエクスプレス</div>
//             <div>12両</div>
//             <div>TOMIX</div>
//         </div>

//         <div class="card">
//             <div>　</div>
//             <div class="img"><img src="https://pbs.twimg.com/media/GI_9GIvbEAApD3Q?format=jpg&name=small" alt=""></div>

//             <div class="v_name">カシオペア</div>
//             <div>12両</div>
//             <div>TOMIX</div>
//         </div>

//         <div class="card">
//             <div>　</div>
//             <div class="img"><img src="https://pbs.twimg.com/media/GI_9GIvbEAApD3Q?format=jpg&name=small" alt=""></div>

//             <div class="v_name">カシオペア</div>
//             <div>12両</div>
//             <div>TOMIX</div>
//         </div>
//     </div>
// ';
