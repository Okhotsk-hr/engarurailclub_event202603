<?php

session_start();
// echo "    <script>
// alert('search.php');
// </script>";
$_SESSION["wordresult"] = "";
$_SESSION["v_cards"] = "";
// フォームから入力を取得
$_SESSION["searchword"] = "img";
$result_lines = [];
// echo "    <script>
//         alert('" .  $_POST["searchValue"] . "');
//     </script>";
//$_SESSION["searchword"] = "E";

//csv読み込み<<<
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

//>>>


echo "<br>";
//echo $_SESSION["searchword"];

$searchValue = $_SESSION["searchword"];
// include("list_show_csv.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    // 日本語を含む検索処理 (一致するすべての要素を取得)
    function findMatchesIn3DArray($v_list, $value)
    {
        $result_lines = [];
        $matches = []; // 一致する要素を格納する配列
        $k = 0;
        foreach ($v_list as $i => $oneDArray) {
            foreach ($oneDArray as $j => $element) {
                // 日本語対応の部分一致検索 (mb_strpos)
                if (mb_strpos($element, $value) !== false) {
                    if ($k == 0) {
                        $result_lines[$k] = $i;
                        $k++;
                    } else if ($result_lines[$k - 1] != $i) {
                        $result_lines[$k] = $i;
                        $k++;
                    }
                    $matches[] = [
                        "value" => $element,
                        "position" => "[$i][$j]"
                    ];
                }
            }
        }

        $_SESSION["result_lines"] = $result_lines;
        return $matches;
    }

    // 検索を実行
    $results = findMatchesIn3DArray($v_list, $searchValue);
    $_SESSION["wordresult"] = "";
    $result_lines = $_SESSION["result_lines"];
    // 結果を表示
    if (count($results) > 0) {
        //$_SESSION["wordresult"] .= '<h2>検索結果:</h2>';
        foreach ($results as $result) {
            //$_SESSION["wordresult"] .=  "<li>文字列 '{$result['value']}' は位置 {$result['position']} にあります。</li>";
        }

        $_SESSION["wordresult"] .= '</ul>';
    } else {
        $_SESSION["wordresult"] = "<p>文字 '{$searchValue}' は配列内に見つかりませんでした。</p>";
    }
    // if ($reload) {
    //     echo "    <script>
    //     //alert('" . $_SESSION["searchword"] . "');
    //     location.reload();
    //     // window.location.href ='index.php';
    //     //alert('c');
    // </script>";
    // } else {
    //     $reload = true;
    // }
}

include("list_search.php");

echo "    <script>
        // alert('" . $result_lines[0] . "');
        // alert('" . $_SESSION["searchword"] . "');
        
        // location.reload();
         window.location.href ='index.php';
        //alert('c');
    </script>";



// //csv読み込み<<<
// $v_list = [[], []];
// $v_list_squeeze  = [[], []];

// // #1 ファイルの読み込み
// $fp = fopen("v_list.csv", "r");
// $data = fgetcsv($fp);

// $i = 0;
// while ($data = fgetcsv($fp)) {
//     // テーブルセルに配列の値を格納
//     $v_list[$i] = $data;
//     $i++;
// }

// // #4 ファイルを閉じる
// fclose($fp);

// //>>>

// //最初の表示
// for ($i = 0; $i <= count($v_list) - 1; $i++) {
//     if ($i % 4 == 0 && $_SESSION["windowsize"] >= 900) {
//         $_SESSION["v_cards"] .= '
//         <div>　</div>
//         <div class="card_step">';
//     } else if ($i % 2 == 0 && $_SESSION["windowsize"] < 900) {
//         $_SESSION["v_cards"] .= '
//         <div>　</div>
//         <div class="card_step">
//         ';
//     }
//     $_SESSION["v_cards"] .= '
//     <div class="card">
//     <div style="font-size:5px">　</div>
//             <!--<div class="v_name">' . $v_list[$i][3] . ' </div>-->

//                     <div class="titlebox">
//             <div class="icon"><img src=' . $v_list[$i][8] . ' alt=""></div>
//               <table border="1" class="tables">
//                 <tr>
//                     <th>
//                         ' . $v_list[$i][3] . '
//                     </th>
//                 </tr>
//             </table>
//                         </div>

//             <div></div>
//             <!--
//             <div class="icons">
//             <div class="icon"><img src=http://www.trainfrontview.net/b/h40ssv.png alt=""></div>
//             <div class="icon"><img src=http://www.trainfrontview.net/b/h40ssg.png alt=""></div>
//             <div class="icon"><img src=http://www.trainfrontview.net/b/h261-5b_hkt.png alt=""></div>
//             <div class="icon"><img src=http://www.trainfrontview.net/b/h261-5v_ozr.png alt=""></div>
//             </div>
//             -->

//             <div class="img"><img src=' . $v_list[$i][1] . ' alt="" class="mainimg"></div>
//             <div style="font-size:5px">　</div>
  

//             <div class="n_text" style="text-align: center;">' . $v_list[$i][4] . '　' . $v_list[$i][5] . '</div>
//             <div class="n_text">' . $v_list[$i][6] . '</div>
//             <!--<table border="1" class="tables">
//                 <tr>
//                     <td>
//                         ' . $v_list[$i][4] . '
//                     </td>
//                     <td>
//                         ' . $v_list[$i][5] . '
//                     </td>
//                 </tr>
//             </table>-->
//     </div>

//     ';

//     if ($i % 4 == 3 && $_SESSION["windowsize"] >= 900) {
//         $_SESSION["v_cards"] .= '</div>
//         <div style="font-size:5px">　</div>
//         ';
//     } else if ($i % 2 == 1 && $_SESSION["windowsize"] < 900) {
//         $_SESSION["v_cards"] .= '</div>
//         <div style="font-size:5px">　</div>
//         ';
//     }
// }
