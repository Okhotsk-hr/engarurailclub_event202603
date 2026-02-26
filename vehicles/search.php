<?php
//条件にあった車両を探す
session_start();
// echo "    <script>
// alert('search.php');
// </script>";
$_SESSION["wordresult"] = "";
$_SESSION["v_cards"] = "";
// フォームから入力を取得
$_SESSION["searchword"] = $_POST["searchValue"];
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
