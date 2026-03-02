<?php
$menu_list = [
    ["TOP", "http://localhost/code/event202603/00remake/", "l_top()"],
    ["車両紹介", "http://localhost/code/event202603/00remake/n", "l_aboutn()"],
    ["ジオラマワークショップ", "http://localhost/code/engarurailclub/event202603/workshop/workshop.php", "l_vehicles()"],
    ["～～～～", "http://localhost/code/event202603/00remake/member", "l_member()"]
];

if (count($menu_list) == 4) {
    $menu_show = '
  <div class="menub">
        <div class="menu1">
            <button class="t_menu" onclick="' . $menu_list[0][2] . '">' . $menu_list[0][0] . '</button>
            <button class="t_menu" onclick="' . $menu_list[1][2] . '">' . $menu_list[1][0] . '</button>
        </div>

        <div class="menu2">
            <button class="t_menu" onclick="' . $menu_list[2][2] . '">' . $menu_list[2][0] . '</button>
            <button class="t_menu" onclick="' . $menu_list[3][2] . '">' . $menu_list[3][0] . '</button>
        </div>
    </div>
    ';
    $menu_js = '
        function ' . $menu_list[0][2] . ' {
            //alert("' . $menu_list[0][0] . '");
            window.location.href = "' . $menu_list[0][1] . '";
        }

        function ' . $menu_list[1][2] . ' {
            alert("近日公開");
            //window.location.href = "' . $menu_list[1][1] . '";
        }

        function ' . $menu_list[2][2] . ' {
            //alert("近日公開");
            window.location.href = "' . $menu_list[2][1] . '";
        }

        function ' . $menu_list[3][2] . ' {
            //alert("' . $menu_list[3][0] . '");
            //window.location.href = "' . $menu_list[3][1] . '";
        }
    ';
} else if (count($menu_list) == 6) {
    $menu_show = '
  <div class="menub">
        <div class="menu1">
            <button class="t_menu">' . $menu_list[0][0] . '</button>
            <button class="t_menu">' . $menu_list[1][0] . '</button>
            <button class="t_menu">' . $menu_list[2][0] . '</button>
        </div>

        <div class="menu2">
            <button class="t_menu">' . $menu_list[3][0] . '</button>
            <button class="t_menu">' . $menu_list[4][0] . '</button>
            <button class="t_menu">' . $menu_list[5][0] . '</button>
        </div>
    </div>
    ';
}
