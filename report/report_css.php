<?php
if ($_SESSION["windowsize"] > 500) {
    $css .= '
    .ws_title {
  font-size: 30px;
}

img {
  width: 100%;
}

.img {
  width: 95%;
  margin: 0 auto;
}

.img_box {
  width: 50%;
}

.img_flex {
  display: flex;
  justify-content: space-between;
}
  ';
} else {
    $css .= '
.ws_title {
  font-size: ' . ($_SESSION["windowsize"] / 17) . 'px;
}

img {
  width: 100%;
}

.img {
  width: 95%;
  margin: 0 auto;
}

.img_box {
  width: 50%;
}

.img_flex {
  display: flex;
  justify-content: space-between;
}

.ws_info {
  font-size: ' . ($_SESSION["windowsize"] / 22) . 'px;
}
    ';
}
