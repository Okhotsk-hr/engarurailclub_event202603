<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPで文字をクリック</title>
    <script>
        // クリックイベントを設定
        function handleClick(text) {
            // 非同期リクエスト送信 (Ajax)
            fetch('process.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'text=' + encodeURIComponent(text)
                })
                .then(response => response.text())
                .then(data => {
                    alert("挨拶: " + data);
                });
        }
    </script>
</head>

<body>
    <h1>文字をクリックしてください</h1>
    <p onclick="handleClick('こんにちは')">こんにちは</p>
    <p onclick="handleClick('ありがとう')">ありがとう</p>
    <p onclick="handleClick('さようなら')">さようなら</p>
</body>

</html>