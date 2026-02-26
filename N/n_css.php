<?php

if ($_SESSION["windowsize"] >= 800) {
    $css .= '
    .n_box{
        width: 750px;
        margin: 0 auto;
    }
    
    img{
        width:100%
    }
        ';
} else {
    $css .= '
    .n_box{
        width: 95%;
        margin: 0 auto;
    }
    
    img{
        width:100%
    }    
        ';
}
