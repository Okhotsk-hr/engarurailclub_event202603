<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文字検索プログラム</title>
</head>

<body>
    <h1>3次元配列の検索</h1>
    <form method="post">
        <label for="searchValue">検索する文字を入力してください:</label>
        <input type="text" id="searchValue" name="searchValue" maxlength="3" required>
        <button type="submit">検索</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // 配列を定義 (日本語を含む)
        $array = [
            ["JR", "新幹線", "キハ40"],
            ["キハ54", "キハ183", "東北新幹線"]
            // [["JR", "新幹線", "キハ40"], ["キハ54", "キハ183", "東北新幹線"]],
            // [["ぶどう", "ぼうし", "こおり"], ["ゼリー", "たこ", "ライオン"]]
        ];

        // フォームから入力を取得
        $searchValue = $_POST["searchValue"];

        // 日本語を含む検索処理 (一致するすべての要素を取得)
        function findMatchesIn3DArray($array, $value)
        {
            $matches = []; // 一致する要素を格納する配列

            foreach ($array as $i => $twoDArray) {
                foreach ($twoDArray as $j => $oneDArray) {
                    foreach ($oneDArray as $k => $element) {
                        // 日本語対応の部分一致検索 (mb_strpos)
                        if (mb_strpos($element, $value) !== false) {
                            $matches[] = [
                                "value" => $element,
                                "position" => "[$i][$j][$k]"
                            ];
                        }
                    }
                }
            }

            return $matches;
        }

        // 検索を実行
        $results = findMatchesIn3DArray($array, $searchValue);

        // 結果を表示
        if (count($results) > 0) {
            echo "<h2>検索結果:</h2>";
            echo "<ul>";
            foreach ($results as $result) {
                echo "<li>文字列 '{$result['value']}' は位置 {$result['position']} にあります。</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>文字 '{$searchValue}' は配列内に見つかりませんでした。</p>";
        }
    }
    ?>
</body>

</html>