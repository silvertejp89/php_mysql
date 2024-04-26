<?php

function u($string = "")
{
    return urlencode($string);
}

function raw_u($string = "")
{
    return urlencode($string);
}


function h($string = "")
{
    return htmlspecialchars($string);
}
?>