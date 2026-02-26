<?php
//echo " <script>alert('include');</script>";

$_SESSION["size_turn"] = 0;
//session_start();
$windowcheck = "";
//unset($_SESSION("turn"));

//echo $_SESSION["turn"] . "//";

//セッション変数"turn"が存在しないなら、0に設定
if (!isset($_SESSION["turn"])) {
    $_SESSION["turn"] = 0;
    //echo " <script>alert('turnが存在していなかった');</script>";
}

//セッション変数"windowsize"が存在しないなら、0に設定
if (!isset($_SESSION["windowsize"])) {
    $_SESSION["windowsize"] = 0;
    //echo " <script>alert('windowsizeが存在していなかった');</script>";
}

//echo $_SESSION["windowsize"];

//GET"inwindowsize"が存在するなら、しないなら0に設定
if (isset($_GET["inwindowsize"])) {
    //echo " <script>alert('GET存在する');</script>";
    if ($_SESSION["windowsize"] == $_GET["inwindowsize"]) {
        //echo " <script>alert('SESSIONとGETが同じ');</script>";
        $_SESSION["turn"] = 1;
        $_SESSION["save"] = 0;
        $windowcheck = "    <script>
        window.location.href = '" . $file_name . "';
        //alert('a');
    </script>";
    } else {
        //echo " <script>alert('SESSIONとGETが違う');</script>";
        $_SESSION["windowsize"] = $_GET["inwindowsize"];
        $_SESSION["turn"] = 1;
        $_SESSION["save"] = 0;
        $windowcheck = "    <script>
        //alert('b');
        window.location.href = '" . $file_name . "';
        //alert('b');
    </script>";
    }
} else {
    //echo " <script>alert('GET存在しない');</script>";
    $getn = 0;
    //POST"turn"の有無
    if ($_SESSION["turn"] == 0) {
        //echo " <script>alert('SESSIONturn:0');</script>";
        //サイズ取得とリロード
        $_SESSION["turn"] = 1;
        $_SESSION["save"] = 0;
        $windowcheck = "    <script>
        //alert('c');
        //alert(window.innerWidth);
        window.location.href ='" . $file_name . "?inwindowsize='+ window.innerWidth;
    </script>";
    } else {
        //echo " <script>alert('d');</script>";
        $_SESSION["size_turn"] = 1;
        $_SESSION["turn"] = 0;
        $_SESSION["save"] = 1;
    }
}
