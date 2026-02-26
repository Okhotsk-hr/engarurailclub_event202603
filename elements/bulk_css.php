<?php
//共通部CSS
$css = '
header {
  align-items: center;
  padding: 0 20px;
  background: #fac344;
}

.header1 {
  display: flex;
  justify-content: space-between;
}
';
if ($_SESSION["windowsize"] > 500) {
  $css .= '
body{
    width: 500px;
    margin: 0 auto;
}

header {
  //display: flex;
  //justify-content: space-between;
  align-items: center;
  padding: 0 20px;
  background: #fac344;
}
  
.menub {
  position: fixed;
  width: 500px;
  /* margin: 0 auto; */

  /* width: 70%;
        background: white; */
  bottom: 0px;
  /*自分が固定したい位置(例は上から0pxの位置)*/
  /* left: 0px; */
  /*自分が固定したい位置(例は左から10pxの位置)*/
}

.menu1 {
  display: flex;
  width: 100%;
}

.menu2 {
  display: flex;
  width: 100%;
}

.t_menu {
  width: 50%;
  height: 40px;
  /* background: blue; */
}

.logo {
  font-size: 30px;
  margin: 0 auto;
}

.info_title {
  position: relative;
  font-size: 26.357142857143px;
  width:330px;
  margin: 0 auto;
}

.layout_title {
  font-size: 28px;
  width:330px;
  margin: 0 auto;
}

.layout {
  line-height: 20px;
  width:330px;
  margin: 0 auto;
}

';
} else {
  $css .= '
body{
    width: 95%;
    margin: 0 auto;
}

header {
  //display: flex;
  //justify-content: space-between;
  align-items: center;
  padding: 0 20px;
  background: #fac344;
}

.menub {
  position: fixed;
  width: 100%;
  /* width: 70%;
        background: white; */
  bottom: 0px;
  /*自分が固定したい位置(例は上から0pxの位置)*/
  left: 0px;
  /*自分が固定したい位置(例は左から10pxの位置)*/
}

.menu1 {
  display: flex;
  width: 100%;
}

.menu2 {
  display: flex;
  width: 100%;
}

.t_menu {
  width: 50%;
  height: 40px;
  /* background: blue; */
}

.logo {
  font-size: ' . ($_SESSION["windowsize"] / 13) . 'px;
  margin: 0 auto;
}

.info_title {
  position: relative;
  font-size: 26.357142857143px;
}


.layout_title {
  font-size: 28px;
}

.layout {
  line-height: 20px;
}

';
}
